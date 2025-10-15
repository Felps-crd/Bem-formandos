<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclui PHPMailer
require __DIR__ . '/../../PHPMailer/src/PHPMailer.php';
require __DIR__ . '/../../PHPMailer/src/SMTP.php';
require __DIR__ . '/../../PHPMailer/src/Exception.php';

// Conexão com o banco
include_once('conexao.php');

// Força o retorno em JSON
header('Content-Type: application/json; charset=UTF-8');

// Captura dados do POST
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$retorna = ['status' => false, 'msg' => ''];

// ======= 1️⃣ Validação básica =======
if (empty($dados['user_name'])) {
    $retorna = ['status' => false, 'msg' => "Erro: Preencha o seu nome de usuário."];
    echo json_encode($retorna);
    exit;
}

if (empty($dados['user_email'])) {
    $retorna = ['status' => false, 'msg' => "Erro: Preencha o seu e-mail."];
    echo json_encode($retorna);
    exit;
}

// ======= 2️⃣ Verifica se já existe =======
try {
    $check = $conexao->prepare("SELECT id FROM usuarios WHERE usuario = ? OR email = ?");
    $check->bind_param("ss", $dados['user_name'], $dados['user_email']);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $retorna = ['status' => false, 'msg' => "Este usuário ou e-mail já está cadastrado!"];
        echo json_encode($retorna);
        exit;
    }

    // ======= 3️⃣ Insere no banco =======
    $stmt = $conexao->prepare("INSERT INTO usuarios (usuario, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $dados['user_name'], $dados['user_email']);

    if (!$stmt->execute()) {
        $retorna = ['status' => false, 'msg' => "Erro ao salvar no banco de dados."];
        echo json_encode($retorna);
        exit;
    }

    // ======= 4️⃣ Envia o e-mail =======
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'bem.formandos2025@gmail.com';
        $mail->Password   = 'kdrm pane xnoi unxj'; // senha de app
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'Base64';

        $mail->setFrom('bem.formandos@gmail.com', 'Bem Formandos');
        $mail->addAddress($dados['user_email'], $dados['user_name']);

        $mail->isHTML(true);
        $mail->Subject = 'Cadastro realizado com sucesso!';
        $mail->Body = "
    <h3>Olá, {$dados['user_name']}!</h3>
  <p>Seja muito bem-vindo(a) ao <strong>Bem Formandos</strong> — sua nova plataforma de apoio para quem busca se preparar para o futuro!</p>

    <p>A partir de agora, você receberá <strong>atualizações exclusivas sobre os vestibulares</strong> públicos de São Paulo, incluindo:</p>

    <ul>
        <li>📅 Datas de inscrição e provas</li>
        <li>📚 Conteúdos de Vestibulares</li>
        <li>📰 Notícias e mudanças nos processos seletivos</li>
    </ul>

    <p>Estamos muito felizes em ter você conosco! Esperamos que aproveite cada recurso da nossa plataforma e alcance seus objetivos acadêmicos.</p>

    <hr>
    <p style='font-size: 13px; color: #555;'>
        Com carinho,<br>
        Equipe <strong>Bem Formandos</strong> 🎓
    </p>
";

        $mail->send();

        $retorna = [
            'status' => true,
            'msg' => "Cadastro concluído! Um e-mail de confirmação foi enviado para você."
        ];
    } catch (Exception $e) {
        // Apenas registra o erro, mas mantém o cadastro
        error_log("Erro PHPMailer: " . $mail->ErrorInfo);
        $retorna = [
            'status' => true,
            'msg' => "Cadastro feito com sucesso, mas ocorreu um erro ao enviar o e-mail: " . $mail->ErrorInfo
        ];
    }

    // Fecha os statements
    $stmt->close();
    $check->close();

} catch (Exception $e) {
    $retorna = ['status' => false, 'msg' => "Erro inesperado: " . $e->getMessage()];
}

header('Content-Type: application/json; charset=UTF-8');
echo json_encode($retorna, JSON_PRETTY_PRINT);
exit;

?>
