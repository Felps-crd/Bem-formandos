<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/estilos/style.css">
    <link rel="stylesheet" href="../../assets/estilos/style-vestibulares.css">
    <link rel="stylesheet" href="../../assets/estilos/sidebars.css">
    <link rel="stylesheet" href="../../assets/estilos/style-unesp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Unesp | Bem Formandos</title>
</head>
<body>
    <div class="container-principal">
        <!-- inicio cabeçalho -->
        <header>
            <div class="logo">
                <a href="../../index.php" class="logo">
                <img src="../../assets/imagens/logo.png" alt="Ícone de formatura">
                <h1>BEM FORMANDOS</h1>
                </a>
            </div>

            <a href="#">
            <button class="btn-cadastro">Cadastre-se</button>
            </a>
        </header>
        <!-- fim cabeçalho -->
        <main class="main-vestibulares">
            <?php include __DIR__ . '/sidebar-unesp.php';?>

            <div class="conteudo">
                <section id="introducao">
                    <h1 class="titulo titulo--unesp">
                        <i class="bi bi-info-circle-fill"></i>
                        O QUE É UNESP
                    </h1>
                    <hr>

            </div>
            <aside class="painel-lateral">
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-list-ul"></i>
                        <h3>Índice</h3>
                    </div>
                    <hr>
                        <ul>
                            <li><a href="#">#</a></li>
                            <li><a href="#">#</a></li>
                            <li><a href="#">#</a></li>
                        </ul>
                </div>
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-bookmark-fill"></i>
                        <h3>Conteúdo Relacionado</h3>
                    </div>
                    <hr>
                    <h4>Como se inscrever na Unesp</h4>
                        <p>Passo a passo para fazer sua inscrição</p>
                        <div class="ler-mais ler-mais--unesp"><a href="inscricao.php">Ler mais</a></div>
                        <hr>
                    <h4>Vestibular Unesp</h4>
                        <p>Tudo sobre o vestibular da Unesp</p>
                        <div class="ler-mais ler-mais--unesp"><a href="vestibular.php">Ler mais</a></div>
                </div>
            </aside>
        </main>

        <footer class="rodape">
            <div class="text">
                <span>© 2025 Bem Formandos</span>
            </div>
        </footer>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>