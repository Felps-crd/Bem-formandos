<?php
include_once('../../assets/php/conexao.php');

$id = $_GET['id'];

if($id){
    $stmt = $conexao->prepare("DELETE FROM vestibulares WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

header("Location: tela-adm-vest.php");
?>
