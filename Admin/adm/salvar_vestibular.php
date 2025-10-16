<?php


// salvar_vestibular.php (versão completa revisada)
session_start();
include_once('../../assets/php/conexao.php');

if (!isset($_SESSION['adm_id'])) {
    header("Location: login-adm.php");
    exit;
}

// Função para normalizar datas
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

    // Buscar eventos existentes no banco
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

    
    // Preparar UPDATE e INSERT para eventos
    $sqlUpdateEvent = "UPDATE calendario SET titulo = ?, data_inicio = ?, data_fim = ? WHERE id = ? AND vestibular_id = ?";
    $stmtUpdate = $mysqli->prepare($sqlUpdateEvent);
    if (!$stmtUpdate) throw new Exception("Prepare update evento falhou: " . $mysqli->error);

    $sqlInsertEvent = "INSERT INTO calendario (vestibular_id, titulo, data_inicio, data_fim) VALUES (?, ?, ?, ?)";
    $stmtInsert = $mysqli->prepare($sqlInsertEvent);
    if (!$stmtInsert) throw new Exception("Prepare insert evento falhou: " . $mysqli->error);

    $submitted_ids = [];

    foreach ($eventos_post as $ev) {
        if (!is_array($ev)) continue;

        $ev_id_raw = $ev['id'] ?? '';
        $ev_id = intval($ev_id_raw);
        $ev_titulo = trim($ev['titulo'] ?? '');
        $ev_inicio = !empty($ev['inicio']) ? $ev['inicio'] : null; // null se não preencher
        $ev_fim    = !empty($ev['fim']) ? $ev['fim'] : null;

        // Ignora eventos sem título ou sem data de início
        if ($ev_titulo === '' || $ev_inicio === null) continue;

        if ($ev_id > 0) {
            // Update existente
            $stmtUpdate->bind_param('ssssi', $ev_titulo, $ev_inicio, $ev_fim, $ev_id, $vest_id);
            if (!$stmtUpdate->execute()) throw new Exception("Update evento falhou para id {$ev_id}: " . $stmtUpdate->error);
            $submitted_ids[] = $ev_id;
        } else {
            // Insert novo
            $stmtInsert->bind_param('isss', $vest_id, $ev_titulo, $ev_inicio, $ev_fim);
            if (!$stmtInsert->execute()) throw new Exception("Insert evento falhou para '{$ev_titulo}': " . $stmtInsert->error);
            $submitted_ids[] = (int)$stmtInsert->insert_id;
        }
    }

    $stmtUpdate->close();
    $stmtInsert->close();

    // Deletar eventos que foram removidos no formulário
    $to_delete = array_diff($existing_ids, $submitted_ids);
    if (!empty($to_delete)) {
        $sqlDel = "DELETE FROM calendario WHERE id = ? AND vestibular_id = ?";
        $stmtDel = $mysqli->prepare($sqlDel);
        if (!$stmtDel) throw new Exception("Prepare delete evento falhou: " . $mysqli->error);

        foreach ($to_delete as $del_id) {
            $did = intval($del_id);
            $stmtDel->bind_param('ii', $did, $vest_id);
            if (!$stmtDel->execute()) {
                throw new Exception("Delete evento falhou para id {$did}: " . $stmtDel->error);
            }
        }
        $stmtDel->close();
    }


   

    $mysqli->commit();
    $_SESSION['flash_success'] = "Vestibular e eventos salvos com sucesso.";
    header("Location: tela-adm-vest.php");
    exit;

} catch (Exception $e) {
    $mysqli->rollback();

    // FORÇAR exibição do erro para debugging
    echo "Erro: " . htmlspecialchars($e->getMessage());
    exit;
}
?>
