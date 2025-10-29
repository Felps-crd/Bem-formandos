<?php
session_start();
include_once('../../assets/php/conexao.php');

if (!isset($_SESSION['adm_id'])) {
    header("Location: ../login-adm.php");
    exit;
}

$id = $_GET['id'] ?? '';

if ($id == '') {
    echo "<script>alert('ID inválido.'); history.back();</script>";
    exit;
}

$sql = "DELETE FROM funcionarios WHERE id=?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "<script>alert('Funcionário excluído com sucesso!'); window.location.href='tela-adm-func.php';</script>";
} else {
    echo "<script>alert('Erro ao excluir: {$stmt->error}'); history.back();</script>";
}

$stmt->close();
$conexao->close();
?>
