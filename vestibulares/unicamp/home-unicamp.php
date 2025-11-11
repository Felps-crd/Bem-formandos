<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/estilos/style.css">
    <link rel="stylesheet" href="../../assets/estilos/style-vestibulares.css">
    <link rel="stylesheet" href="../../assets/estilos/sidebars.css">
    <link rel="stylesheet" href="../../assets/estilos/style-unicamp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Unicamp | Bem Formandos</title>
</head>
<body>
    <div class="container-principal">
        <!-- inicio cabeçalho -->
        <?php include_once("../../includes/header.php"); ?>
        <!-- fim cabeçalho -->
        <main class="main-vestibulares">
            <?php include __DIR__ . '/sidebar-unicamp.php';?>

            <div class="conteudo">
                <section id="introducao">
                    <h1 class="titulo titulo--unicamp">
                        <i class="bi bi-info-circle-fill"></i>
                        O QUE É UNICAMP
                    </h1>
                    <hr>
                    <p>A Unicamp (Universidade Estadual de Campinas) é uma instituição de ensino superior pública estadual brasileira, sediada na cidade de Campinas, no estado de São Paulo, considerada uma das melhores universidades do país e da América Latina.</p>
                    <p>Fundada em 1962, a Unicamp foi projetada do zero como um sistema integrado de centros de pesquisa. Seu foco em pesquisa reflete que quase metade de seus estudantes são alunos de pós-graduação, a maior proporção entre todas as grandes universidades no Brasil.</p>
                </section>
                <section id="destaques">
                    <div class="destaques destaques--unicamp">
                        <h2 class="destaques-titulo">Destaques da Unicamp</h2>
                        <div class="destaque-card">
                            <i class="bi bi-book-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Pesquisa e Ensino</h3>
                                <p class="destaque-texto"> A 3ª melhor universidade da América Latina, com nota máxima em pesquisa e alta qualidade no ensino.</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-leaf-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Sustentabilidade</h3>
                                <p class="destaque-texto">É a 2ª do Brasil em impacto sustentável e destaque mundial no ODS 9 (inovação e infraestrutura).</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-search"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Iniciação Científica</h3>
                                <p class="destaque-texto">Recebeu prêmio nacional do CNPq por excelência na formação de jovens pesquisadores.</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-globe-americas-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Reconhecimento Internacional</h3>
                                <p class="destaque-texto">Está entre as melhores do mundo em áreas como Odontologia, Engenharia Elétrica e Linguística.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="como-funciona">
                    <h2 class="como-funciona-titulo">Como Funciona a Unicamp</h2>
                    <p class="como-funciona-texto">O principal campus ocupa 3,5 quilômetros quadrados e está localizado no distrito de Barão Geraldo, em Campinas. A universidade também tem campi em Limeira, Piracicaba e Paulínia. O ingresso ocorre por meio do Vestibular Unicamp, organizado pela COMVEST, composto por duas fases com provas objetivas e discursivas. Além do ensino gratuito, oferece programas de bolsas, moradia estudantil e assistência socioeconômica.</p>
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
                            <li><a href="#introducao">O que é</a></li>
                            <li><a href="#destaques">Destaques da Unicamp</a></li>
                            <li><a href="#como-funciona">Como Funciona a Unicamp</a></li>
                        </ul>
                </div>
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-bookmark-fill"></i>
                        <h3>Conteúdo Relacionado</h3>
                    </div>
                    <hr>
                    <h4>Como se inscrever na Unicamp</h4>
                        <p>Passo a passo para fazer sua inscrição</p>
                        <div class="ler-mais ler-mais--unicamp"><a href="inscricao.php">Ler mais</a></div>
                        <hr>
                    <h4>Vestibular Unicamp</h4>
                        <p>Tudo sobre o vestibular da Unicamp</p>
                        <div class="ler-mais ler-mais--unicamp"><a href="vestibular.php">Ler mais</a></div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>