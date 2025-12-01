<?php
session_start();
include_once('../../assets/php/conexao.php');

if (!isset($_SESSION['adm_id'])) {
    header("Location: login-adm.php");
    exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Função normalizar datas
function norm_date($d) {
    $d = trim((string)$d);
    return ($d === '' || $d === null) ? null : $d;
}

// Recebe dados do POST
$vest_id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$nome    = isset($_POST['nome']) ? trim($_POST['nome']) : '';
$taxa = isset($_POST['taxa']) ? floatval($_POST['taxa']) : 0.00;
$eventos_post = $_POST['eventos'] ?? [];

if ($vest_id <= 0) {
    $_SESSION['flash_error'] = "Vestibular inválido.";
    header("Location: tela-adm-vest.php");
    exit;
}

$mysqli = $conexao;
$mysqli->begin_transaction();

try {

    // Atualiza vestibular
    $sqlUpdateVest = "UPDATE vestibulares SET nome = ?, taxa = ? WHERE id = ?";
    $stmtVest = $mysqli->prepare($sqlUpdateVest);
    if (!$stmtVest) throw new Exception("Prepare update vestibular falhou: " . $mysqli->error);
    $stmtVest->bind_param('sdi', $nome, $taxa, $vest_id);
    if (!$stmtVest->execute()) throw new Exception("Execute update vestibular falhou: " . $stmtVest->error);
    $stmtVest->close();


    // Buscar eventos existentes
    $existing_ids = [];
    $sqlExist = "SELECT id FROM calendario WHERE vestibular_id = ?";
    $stmt = $mysqli->prepare($sqlExist);
    if (!$stmt) throw new Exception("Prepare select eventos falhou: " . $mysqli->error);
    $stmt->bind_param('i', $vest_id);
    if (!$stmt->execute()) throw new Exception("Execute select eventos falhou: " . $stmt->error);
    $res = $stmt->get_result();
    while ($r = $res->fetch_assoc()) {
        $existing_ids[] = (int)$r['id'];
    }
    $stmt->close();


    // Preparar UPDATE e INSERT
    $sqlUpdateEvent = "UPDATE calendario SET titulo = ?, data_inicio = ?, data_fim = ? WHERE id = ? AND vestibular_id = ?";
    $stmtUpdate = $mysqli->prepare($sqlUpdateEvent);
    if (!$stmtUpdate) throw new Exception("Prepare update evento falhou: " . $mysqli->error);

    $sqlInsertEvent = "INSERT INTO calendario (vestibular_id, titulo, data_inicio, data_fim) VALUES (?, ?, ?, ?)";
    $stmtInsert = $mysqli->prepare($sqlInsertEvent);
    if (!$stmtInsert) throw new Exception("Prepare insert evento falhou: " . $mysqli->error);

    $submitted_ids = [];

    foreach ($eventos_post as $ev) {
        if (!is_array($ev)) continue;

        $ev_id = intval($ev['id'] ?? '');
        $ev_titulo = trim($ev['titulo'] ?? '');
        $ev_inicio = !empty($ev['inicio']) ? $ev['inicio'] : null;
        $ev_fim    = !empty($ev['fim']) ? $ev['fim'] : null;

        if ($ev_titulo === '' || $ev_inicio === null) continue;

        if ($ev_id > 0) {
            $stmtUpdate->bind_param('ssssi', $ev_titulo, $ev_inicio, $ev_fim, $ev_id, $vest_id);
            if (!$stmtUpdate->execute()) throw new Exception("Update evento falhou: " . $stmtUpdate->error);
            $submitted_ids[] = $ev_id;
        } else {
            $stmtInsert->bind_param('isss', $vest_id, $ev_titulo, $ev_inicio, $ev_fim);
            if (!$stmtInsert->execute()) throw new Exception("Insert evento falhou: " . $stmtInsert->error);
            $submitted_ids[] = (int)$stmtInsert->insert_id;
        }
    }

    $stmtUpdate->close();
    $stmtInsert->close();

    // Deletar eventos removidos
    $to_delete = array_diff($existing_ids, $submitted_ids);
    if (!empty($to_delete)) {
        $sqlDel = "DELETE FROM calendario WHERE id = ? AND vestibular_id = ?";
        $stmtDel = $mysqli->prepare($sqlDel);
        if (!$stmtDel) throw new Exception("Prepare delete evento falhou: " . $mysqli->error);

        foreach ($to_delete as $del_id) {
            $stmtDel->bind_param('ii', $del_id, $vest_id);
            if (!$stmtDel->execute()) {
                throw new Exception("Delete evento falhou para id {$del_id}: " . $stmtDel->error);
            }
        }
        $stmtDel->close();
    }

    // CONFIRMAR ALTERAÇÕES
    $mysqli->commit();


    // ================================================
    //   ENVIAR E-MAIL PARA TODOS OS USUÁRIOS
    // ================================================

    require_once '../../PHPMailer/src/PHPMailer.php';
    require_once '../../PHPMailer/src/SMTP.php';
    require_once '../../PHPMailer/src/Exception.php';

    $buscaUsuarios = $mysqli->query("SELECT usuario, email FROM usuarios");

    while ($u = $buscaUsuarios->fetch_assoc()) {

        try {

            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'bem.formandos2025@gmail.com';
            $mail->Password = 'kdrm pane xnoi unxj'; 
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';

            $mail->setFrom('bem.formandos2025@gmail.com', 'Bem Formandos');
            $mail->addAddress($u['email'], $u['usuario']);

            $mail->isHTML(true);
            $mail->Subject = "Atualização no vestibular: $nome";

            $mail->Body = "
                <h3>Olá, {$u['usuario']}!</h3>
                <p>O vestibular <strong>$nome</strong> foi atualizado.</p>
                <p>Acesse o site <strong>bemformandos.com</strong> para conferir as novas datas e informações.</p>
                <hr>
                <p style='font-size: 13px; color: #555'>Equipe <strong>Bem Formandos</strong></p>
            ";

            $mail->send();

        } catch (Exception $e) {
            error_log("Falha ao enviar email para {$u['email']}: " . $mail->ErrorInfo);
        }
    }

    $_SESSION['msg_vest'] = "Vestibular salvo com sucesso!";
    header("Location: tela-adm-vest.php");
    exit;


} catch (Exception $e) {

    $mysqli->rollback();
    $_SESSION['msg_vest'] = "Erro ao salvar o vestibular!";
    header("Location: tela-adm-vest.php");
    exit;
}
?>
