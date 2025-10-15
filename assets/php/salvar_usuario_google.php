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

// Força retorno JSON
header('Content-Type: application/json; charset=UTF-8');

$retorna = ['status' => false, 'msg' => ''];

// ======= 1️⃣ Captura dados =======
$user_name  = $_POST['user_name'] ?? '';
$user_email = $_POST['user_email'] ?? '';

if (empty($user_name) || empty($user_email)) {
    $retorna['msg'] = 'Erro: nome ou e-mail ausente.';
    echo json_encode($retorna);
    exit;
}

// ======= 2️⃣ Verifica se já existe =======
$check = $conexao->prepare("SELECT id FROM usuarios WHERE email = ?");
$check->bind_param("s", $user_email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    $retorna['status'] = true;
    $retorna['msg'] = 'Usuário já cadastrado (login Google).';
    echo json_encode($retorna);
    exit;
}

// ======= 3️⃣ Insere no banco =======
$stmt = $conexao->prepare("INSERT INTO usuarios (usuario, email) VALUES (?, ?)");
$stmt->bind_param("ss", $user_name, $user_email);

if (!$stmt->execute()) {
    $retorna['msg'] = 'Erro ao cadastrar usuário no banco.';
    echo json_encode($retorna);
    exit;
}

// ======= 4️⃣ Envia e-mail =======
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'bem.formandos2025@gmail.com'; // seu e-mail Gmail
    $mail->Password   = 'kdrm pane xnoi unxj';   // senha de app
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'Base64';

    $mail->setFrom('bem.formados@gmail.com', 'Bem Formandos');
    $mail->addAddress($user_email, $user_name);

    $mail->isHTML(true);
    $mail->Subject = 'Cadastro via Google realizado com sucesso!';
    $mail->Body = "
    <h3>Olá, $user_name!</h3>
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

    $retorna['status'] = true;
    $retorna['msg'] = 'Cadastro via Google realizado com sucesso! E-mail de boas-vindas enviado.';
} catch (Exception $e) {
    error_log("Erro PHPMailer (Google): " . $mail->ErrorInfo);
    $retorna['status'] = true;
    $retorna['msg'] = 'Cadastro realizado, mas ocorreu um erro ao enviar o e-mail.';
}

// Fecha conexões
$stmt->close();
$check->close();

echo json_encode($retorna, JSON_PRETTY_PRINT);
exit;

include_once('conexao.php'); // Conexão com o banco

if(isset($_POST['user_name']) && isset($_POST['user_email'])){
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];

    // Verifica se já existe um usuário com esse email
    $check = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email='$user_email'");
    if(mysqli_num_rows($check) > 0){
        echo "Usuário já cadastrado!";
        exit;
    }

    // Insere no banco
    $result = mysqli_query($conexao, "INSERT INTO usuarios(usuario, email) VALUES ('$user_name','$user_email')");
    if($result){
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário!";
    }
}

?>
