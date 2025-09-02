<?php
include_once('../../assets/php/conexao.php');

$id = $_POST['id'];
$nome = $_POST['nome'];

if(empty($nome)){
    echo "<script>alert('O nome do vestibular é obrigatório'); history.back();</script>";
    exit;
}

if($id){ // editar
    $stmt = $conexao->prepare("UPDATE vestibulares SET nome=? WHERE id=?");
    $stmt->bind_param("si", $nome, $id);
    $stmt->execute();
} else { // adicionar
    $stmt = $conexao->prepare("INSERT INTO vestibulares (nome) VALUES (?)");
    $stmt->bind_param("s", $nome);
    $stmt->execute();
}

header("Location: tela-adm-vest.php");
?>
