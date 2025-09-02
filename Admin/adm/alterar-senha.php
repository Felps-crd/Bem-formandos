<?php
include_once('../../assets/php/conexao.php');

// Supondo que o admin logado é o primeiro na tabela (ajuste conforme seu login real)
$admin = $conexao->query("SELECT * FROM funcionarios WHERE cargo='adm' LIMIT 1")->fetch_assoc();

if(isset($_POST['nova_senha'])){
    $nova_senha = $_POST['nova_senha'];

    if(strlen($nova_senha) < 6){
        echo "<script>alert('A senha deve ter pelo menos 6 caracteres'); window.history.back();</script>";
        exit;
    }

    $stmt = $conexao->prepare("UPDATE funcionarios SET senha=? WHERE id=?");
    $stmt->bind_param("si", $nova_senha, $admin['id']);
    $stmt->execute();

    echo "<script>alert('Senha alterada com sucesso'); window.location.href='tela-adm-vest.php';</script>";
}
?>
