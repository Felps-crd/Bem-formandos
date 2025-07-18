<?php

if(isset($_POST['submit'])){
/*    print_r($_POST['user_name']);
    print_r($_POST['user_email']);
    print_r($_POST['user_senha']);
}
*/

include_once('conexao.php');

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_senha = $_POST['user_senha'];

$result = mysqli_query($conexao, "INSERT INTO usuario(user_name,user_email,user_senha) 
VALUES ('$user_name', '$user_email', '$user_senha')");

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/estilos/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Graduate&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/estilos/style-modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <title>Bem Formandos</title>
</head>
<body>
    <div class="container-principal">
        <!-- inicio cabeçalho -->
        <header>
            <div class="logo">
                <a href="#" class="logo">
                <img src="assets/imagens/logo-temp 1.png" alt="Ícone de formatura">
                <h1>Bem Formandos</h1>
                </a>
            </div>

            <button class="btn-cadastro" data-modal="modal-cadastro">
                Cadastre-se
            </button>
        </header>
        <!-- fim cabeçalho -->

        <!--MODAL CADASTRO-->

        <dialog id="modal-cadastro">
            
            <form action="index.php" method="post">

                <div class="modal-header">
                    <button type="button" class="close-modal" data-modal="modal-cadastro">
                        <i class="bi bi-arrow-left-circle"></i>
                    </button>
                    
                    <h1 class="modal-title">
                        CADASTRO
                    </h1>
                    <span class="regua"></span>
                </div><!--Fim header modal-->

                <div class="modal-body">
                    <div class="input-group">
                        <div class="input">
                            <i class="bi bi-person"></i>
                            <input type="text" name="user_name" id="user_name" placeholder="Nome de usuário">
                        </div>
                        <div class="input">
                            <i class="fa-regular fa-envelope"></i>
                            <input type="text" name="user_email" id="user_email" placeholder="E-mail">
                        </div>
                        <div class="input">
                            <i class="bi bi-lock"></i>
                            <input type="text" name="user_senha" id="user_senha" placeholder="Senha">
                        </div>
                    </div>

                    
                <div class="content-button">

                    <input class="btn-cadastrar" name="submit" type="submit" value="Criar conta">
                
                    <div class="modal-ou">
                        <span class="regua-2"></span><label>ou</label><span class="regua-2"></span>
                    </div>

                    <button class="btn-google">
                        <i class="bi bi-google"></i>
                        Entrar com google
                    </button>
                </div>
            </div>

            <div class="modal-footer">
                <span class="regua"></span>

                <div class="entrar">
                    <p>Já possui uma conta?</p>
                    <a href="#">Entrar</a>
                </div>
            </div>

            </form>
            
        </dialog>

        <!--FIM MODAL CADASTRO-->

        <!-- inicio principal -->
        <main>
            <section class="intro">
                <div class="text-box">
                  <h2>Quer saber tudo sobre os principais vestibulares de São Paulo?</h2>
                  <p>
                    Aqui você encontra informações atualizadas sobre provas, inscrições,
                    cronogramas e dicas essenciais para sua aprovação.
                  </p>
                </div>
                <img src="assets/imagens/img1.png" alt="Imagem representativa">
              </section>

            <section class="vestibulares">
                <p>Escolha o seu vestibular e comece sua jornada rumo à universidade!</p>
                <div class="botoes-vestibulares">
                    <a href="vestibulares/enem/home-enem.html" class="enem">Enem</a>
                    <a href="#" class="fuvest">Fuvest</a>
                    <a href="#" class="unicamp">Unicamp</a>
                    <a href="vestibulares/fatec/home-fatec.html" class="fatec">Fatec</a>
                    <a href="#" class="unesp">Unesp</a>
                    <a href="#" class="ufesp">Ufesp</a>
                    <a href="#" class="sisu">Sisu</a>
                    <a href="#" class="prouni">ProUni</a>
                    <a href="#" class="fies">Fies</a>
                    <a href="#" class="provao">Provão<br>Paulista</a>
                </div>
            </section>
        </main>
        <!-- fim principal -->

        <footer class="rodape">
            <div class="text">
                <span>© 2025 Bem Formandos</span>
            </div>
        </footer>
    </div>
    <script src="assets/Javascript/script.js"></script>
</body>
</html>