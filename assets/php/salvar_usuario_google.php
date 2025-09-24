<?php
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
