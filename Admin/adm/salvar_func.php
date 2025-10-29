<?php
session_start();
include_once('../../assets/php/conexao.php'); // correto para sua estrutura

// Verifica se o admin está logado
if (!isset($_SESSION['adm_id'])) {
    header("Location: ../login-adm.php");
    exit;
}

// Recebe dados do formulário
$id       = $_POST['id'] ?? '';
$nome     = trim($_POST['nome'] ?? '');
$usuario  = trim($_POST['usuario'] ?? '');
$email    = trim($_POST['email'] ?? '');
$cargo    = trim($_POST['cargo'] ?? '');
$senha    = $_POST['senha'] ?? ''; // opcional no editar

// Validação simples
if ($nome == '' || $usuario == '' || $email == '' || $cargo == '') {
    echo "<script>alert('Preencha todos os campos obrigatórios!'); history.back();</script>";
    exit;
}

// Se for edição (tem id)
if ($id != '') {
    // Atualiza (com ou sem senha)
    if ($senha != '') {
        $sql = "UPDATE funcionarios SET nome=?, usuario=?, email=?, cargo=?, senha=? WHERE id=?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("sssssi", $nome, $usuario, $email, $cargo, $senha, $id);
    } else {
        $sql = "UPDATE funcionarios SET nome=?, usuario=?, email=?, cargo=? WHERE id=?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ssssi", $nome, $usuario, $email, $cargo, $id);
    }
} else {
    // Novo funcionário
    if ($senha == '') {
        echo "<script>alert('É necessário definir uma senha para novo funcionário.'); history.back();</script>";
        exit;
    }

    $sql = "INSERT INTO funcionarios (nome, usuario, email, cargo, senha) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sssss", $nome, $usuario, $email, $cargo, $senha);
}

if ($stmt->execute()) {
    echo "<script>alert('Funcionário salvo com sucesso!'); window.location.href='tela-adm-func.php';</script>";
} else {
    echo "<script>alert('Erro ao salvar: {$stmt->error}'); history.back();</script>";
}

$stmt->close();
$conexao->close();
?>
