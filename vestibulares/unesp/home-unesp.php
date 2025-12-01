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
        <?php include_once("../../includes/header.php"); ?>
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
                    <p>A UNESP (Universidade Estadual Paulista “Júlio de Mesquita Filho”) é uma das principais universidades públicas do Brasil. Criada em 1976, ela oferece ensino superior gratuito e de qualidade em diversas áreas do conhecimento.</p>
                    <p>A universidade é reconhecida pela excelência acadêmica e pela contribuição para o desenvolvimento científico e tecnológico do país, formando profissionais qualificados e promovendo pesquisa e extensão em todo o estado de São Paulo.</p>
                </section>

                <section id="destaques">
                    <div class="destaques destaques--unesp">
                        <h2 class="destaques-titulo">Destaques da Unesp</h2>
                        <div class="destaque-card">
                            <i class="bi bi-book-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Ensino Público e Gratuito</h3>
                                <p class="destaque-texto">Acesso a uma formação superior de qualidade sem custos de mensalidade.</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-search"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Pesquisa e Inovação</h3>
                                <p class="destaque-texto">Reconhecida pela forte atuação em pesquisas científicas  e tecnológicas que geram impacto social.</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-mortarboard-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Diversidade de Cursos</h3>
                                <p class="destaque-texto">Oferece graduações, pós-graduações e programas de extensão em diversas áreas do conhecimento.</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-award-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Reconhecimento Internacional</h3>
                                <p class="destaque-texto">Destaca-se entre as melhores universidades da América Latina, com parcerias acadêmicas em vários países.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="como-funciona">
                    <h2 class="como-funciona-titulo">Como Funciona a Unesp</h2>
                    <p class="como-funciona-texto">A UNESP possui campi em mais de 20 cidades do Estado de São Paulo, o que permite uma ampla oferta de cursos e oportunidades. O ingresso ocorre por meio do Vestibular UNESP, organizado anualmente pela Vunesp, composto por duas fases com provas objetivas e discursivas. <br> Além do ensino gratuito, a universidade oferece programas de bolsas, moradia estudantil e assistência socioeconômica, garantindo a permanência e o sucesso de seus estudantes.
                    </p>
                </section>
                <section id="modalidades-ingresso">
                    <h2>Formas de Ingresso na Unesp</h2>
                    <div class="box-cards-ingresso">
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">Vestibular Unesp</p>
                            <p class="texto-ingresso">Vestibular principal da Unesp, aberto a todos os candidatos</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">Enem Unesp</p>
                            <p class="texto-ingresso">Ingresso usando a nota do Enem em seleção própria da Unesp</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">Provão Paulista</p>
                            <p class="texto-ingresso">Acesso pela nota acumulada nas provas seriadas do Estado de São Paulo</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">Olimpíadas</p>
                            <p class="texto-ingresso">Vagas para medalhistas em olimpíadas científicas reconhecidas</p>
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
                            <li><a href="#introducao">O que é</a></li>
                            <li><a href="#destaques">Destaques</a></li>
                            <li><a href="#como-funciona">Como Funciona</a></li>
                            <li><a href="#modalidades-ingresso">Formas de Ingresso</a></li>
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

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>