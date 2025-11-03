<?php
session_start();
include_once('../../assets/php/conexao.php');

if(isset($_POST['submit'])){
    $usuario = $_POST['func_name'];
    $senha   = $_POST['func_senha'];

    // Verifica se existe o admin
    $stmt = $conexao->prepare("SELECT * FROM funcionarios WHERE usuario=? AND senha=? AND cargo='funcionario'");
    $stmt->bind_param("ss", $usuario, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows === 1){
        $func = $result->fetch_assoc();
        // cria variáveis de sessão para o admin logado
        $_SESSION['func_id'] = $func['id'];
        $_SESSION['func_nome'] = $func['nome'];
        $_SESSION['func_email'] = $func['email'];
        header("Location: tela-func.php"); // redireciona para a tela administrativa
        exit;
    } else {
        echo "<script>alert('Usuário ou senha incorretos');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/estilos/style-login-adm.css">
    <link rel="stylesheet" href="../../assets/estilos/style-modal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Graduate&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
    <title>Login Funcionário</title>
</head>
<body>
    
    <div class="container-principal">
        <!-- inicio cabeçalho -->
        <header>
            <div class="logo">
                <a href="#" class="logo">
                <img src="../../assets/imagens/logo.png" alt="Ícone de formatura">
                <h1>Bem Formandos</h1>
                </a>
            </div>

            <div class="titulo">
                <h1>Área de login</h1>
            </div>
        </header>
        <!-- fim cabeçalho -->

    <main>
        
    <!--MODAL CADASTRO-->
       
        <!--Aqui escurece o fundo-->
        <div id="modal-cadastro" class="modal-overlay" 
        style="display: flex; position: fixed; top: 0; left: 0; 
        width: 100%; height: 100%; background: hsla(0, 0.00%, 0.00%, 0.60); justify-content: center; align-items: center; z-index: 1000;">
        <!--Aqui escurece o fundo-->

        <!--Configuração das cores do funco da parte de cadastro-->
        <form action="" method="post" style=" padding-top: 20px;
            justify-content: center;
            justify-items: center;
            width: 600px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(90deg, #003366 0%, #0073E6 100%);;">
        <!--Configuração das cores do funco da parte de cadastro-->

        
        <div class="modal-header">
            <a href="../adm.html" class="close-modal">
                <i class="bi bi-arrow-left-circle"></i>
            </a>

            <h1 class="modal-title" style="margin-left: 11%;">FUNCIONÁRIO</h1>

            <span class="regua"></span>

        </div><!--Fim header modal-->

        <div class="modal-body">
            <div class="input-group">
                <div class="input">
                    <i class="bi bi-person"></i>
                    <input type="text" name="func_name" id="func_name" placeholder="Nome de usuário" required>
                </div>

                <div class="input">
                    <i class="bi bi-lock"></i>
                    <input type="password" name="func_senha" id="func_senha" placeholder="Senha" required>
                </div>
            </div>

            <div class="content-button">
                <input class="btn-cadastrar" name="submit" type="submit" value="Entrar">
            </div>
        </div>

        <div class="modal-footer">
            <span class="regua"></span>
            <div class="entrar">

            </div>
        </div>

        </form>
    </div>

    <!--FIM MODAL CADASTRO-->
    
    </main>

        <!--Inicio footer-->
        <footer class="rodape">
            <div class="text">
                <span>© 2025 Bem Formandos</span>
            </div>
        </footer>
    </div>
        <!--FIm footer-->
</body>
</html>