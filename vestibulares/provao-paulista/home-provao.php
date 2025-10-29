<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/estilos/style.css">
    <link rel="stylesheet" href="../../assets/estilos/style-vestibulares.css">
    <link rel="stylesheet" href="../../assets/estilos/sidebars.css">
    <link rel="stylesheet" href="../../assets/estilos/style-provao.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Provão Paulista | Bem Formandos</title>
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
            <?php include __DIR__ . '/sidebar-provao.php';?>

            <div class="conteudo">
                <section id="introducao">
                    <h1 class="titulo titulo--provao">
                        <i class="bi bi-info-circle-fill"></i>
                        O QUE É PROVÃO PAULISTA
                    </h1>
                    <hr>
                    <p>O Provão Paulista Seriado é uma avaliação anual desenvolvida pela Secretaria de Educação do Estado de São Paulo (Seduc-SP) em parceria com as três principais universidades públicas estaduais: Universidade de São Paulo (USP), Universidade Estadual de Campinas (Unicamp) e Universidade Estadual Paulista (Unesp).</p>
                    <p>Criado em 2023, o programa oferece uma oportunidade adicional de ingresso no ensino superior para estudantes da rede pública estadual paulista.</p>
                </section>

                <section id="destaques">
                    <div class="destaques destaques--provao">
                        <h2 class="destaques-titulo">Destaques do Provão Paulista</h2>
                        <div class="destaque-card">
                            <i class="bi bi-people-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Acesso Democrático</h3>
                                <p class="destaque-texto">Amplia o acesso ao ensino superior, garantindo oportunidades a estudantes da rede pública em todo o estado de São Paulo.</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-award-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Ensino de Excelência</h3>
                                <p class="destaque-texto">Oferece vagas em instituições reconhecidas nacionalmente pela qualidade acadêmica.</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-graph-up"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo"> Valorização do Desempenho Contínuo</h3>
                                <p class="destaque-texto">O sistema seriado considera o esforço do estudante ao longo das três séries do Ensino Médio, tornando o processo mais justo e inclusivo.</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-mortarboard-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Milhares de Vagas Oferecidas</h3>
                                <p class="destaque-texto">Com quase 50 mil vagas diretas desde sua criação, o programa se consolida como uma alternativa estratégica aos vestibulares tradicionais.</p>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <aside class="painel-lateral">
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-list-ul"></i>
                        <h3>Índice</h3>
                    </div>
                    <hr>
                        <ul>
                            <li><a href="#introducao">O que é Provão Paulista</a></li>
                            <li><a href="#destaques">Destaques do Provão Paulista</a></li>
                        </ul>
                </div>
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-bookmark-fill"></i>
                        <h3>Conteúdo Relacionado</h3>
                    </div>
                    <hr>
                    <h4>Como se inscrever no Provão Paulista</h4>
                        <p>Passo a passo para fazer sua inscrição</p>
                        <div class="ler-mais ler-mais--provao"><a href="inscricao.php">Ler mais</a></div>
                        <hr>
                    <h4>Vestibular Provão Paulista</h4>
                        <p>Tudo sobre o vestibular do Provão Paulista</p>
                        <div class="ler-mais ler-mais--provao"><a href="vestibular.php">Ler mais</a></div>
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