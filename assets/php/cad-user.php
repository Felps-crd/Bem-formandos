<?php

include_once('conexao.php');

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($dados['user_name'])){
    $retorna = ['status' => false, 'msg' => "Erro: Preencha o seu usuário"];
}
elseif(empty($dados['user_email'])){
    $retorna = ['status' => false, 'msg' => "Erro: Preencha o seu e-mail"];
}
else{
    // Verifica se o usuário já existe
    $check = $conexao->prepare("SELECT usuario FROM usuarios WHERE usuario = ?");
    $check->bind_param("s", $dados['user_name']);
    $check->execute();
    $check->store_result(); // importante para mysqli_stmt

    if($check->num_rows > 0){
        // Usuário já cadastrado
<<<<<<< HEAD
        $retorna = ['status' => false, 'msg' => "Este usuário já está cadastrado!"];
=======
        $retorna = ['status' => false, 'msg' => "Esse usuário já está cadastrado!"];
>>>>>>> dfbd8abfc7d1f7777f86c662a4d50501ea22ee8f
    } else{
        //insere no banco
        $stmt = $conexao->prepare("INSERT INTO usuarios(usuario, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $dados['user_name'], $dados['user_email']);
        
        if($stmt->execute()){
<<<<<<< HEAD
            $retorna = ['status' => true, 'msg' => "Agora quando houver atualização dos vestibulares, você receberá via e-mail"];
=======
            $retorna = ['status' => true, 'msg' => "Agora quando houver atualização dos vestibulares, você recebera via e-mail"];
>>>>>>> dfbd8abfc7d1f7777f86c662a4d50501ea22ee8f
        }else{
            $retorna = ['status' => false, 'msg' => "Erro ao cadastrar usuário!"];
        }
    }

    $check->close();
    if (isset($stmt)) {
    $stmt->close();
}
}

echo json_encode($retorna);


/*
if (isset($_POST['submit'])) {
    include_once('conexao.php');

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];

    // Verifica se o usuário já existe
    $check = mysqli_query($conexao, "SELECT * FROM usuarios WHERE usuario = '$user_name'");

    if (mysqli_num_rows($check) > 0) {
        // Já existe esse usuário
        echo "<script>alert('Esse usuário já está cadastrado!');</script>";
    } else {
        // Insere no banco
        $result = mysqli_query($conexao, "INSERT INTO usuarios(usuario, email) VALUES ('$user_name', '$user_email')");

        if ($result) {
            
        } else {
            echo "<script>alert('Erro ao cadastrar usuário!');</script>";
        }
    }
}
//===============Fim da função para cadastrar email do usuario no banco de dados=============//

*/
?>
