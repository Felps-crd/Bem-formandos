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

    <title>Vestibular Provão Paulista | Bem Formandos</title>
</head>
<body>
    <div class="container-principal">
        <!-- inicio cabeçalho -->
        <?php include_once("../../includes/header.php"); ?>
        <!-- fim cabeçalho -->
        <main class="main-vestibulares">
            <?php include __DIR__ . '/sidebar-provao.php';?>

            <div class="conteudo">
                <section id="introducao">
                    <h1 class="titulo titulo--provao">
                        <i class="bi bi-file-text-fill"></i>
                        COMO FUNCIONA O VESTIBULAR
                    </h1>
                    <hr>
                    <p>A prova é seriada, ou seja, você realiza uma avaliação ao final de cada ano do Ensino Médio (1ª, 2ª e 3ª série). A nota final é composta pelo desempenho nas três etapas, com pesos crescentes que valorizam o aprendizado contínuo.</p>
                </section>
                <section id="formato-prova">
                    <h2>Formato da Prova</h2>
                    <div class="cards-prova">
                        <div class="card-prova">
                            <div class="conteudo-cards-prova">
                                <div class="dia">
                                    <h3 class="titulo-prova titulo-prova--provao">Primeiro Dia</h3>
                                <ul class="lista-infos-prova">
                                    <li class="item-lista-infos-prova">24 questões de Linguagens e suas Tecnologias</li>
                                    <li class="item-lista-infos-prova">24 questões de Ciências da Natureza</li>
                                    <li class="item-lista-infos-prova">1 Redação (apenas 3ª série)</li>
                                </ul>
                                </div>
                                <div class="dia">
                                    <h3 class="titulo-prova titulo-prova--provao">Segundo Dia</h3>
                                <ul class="lista-infos-prova">
                                    <li class="item-lista-infos-prova">18 questões de Matemática e suas Tecnologias</li>
                                    <li class="item-lista-infos-prova">24 questões de Ciências Humanas</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="peso-nota">
                    <h2>Peso da Nota por Série</h2>
                    <p>Por ser um processo seriado, as notas conquistadas ao longo dos anos têm pesos crescentes.</p>
                    <div class="cards-peso">
                        <div class="card-peso">
                            <div class="conteudo-cards-peso">
                                <p class="serie">1ª Série</p> <span class="peso">15%</span>
                            </div>
                        </div>
                        <div class="card-peso">
                            <div class="conteudo-cards-peso">
                                <p class="serie">2ª Série</p> <span class="peso">25%</span>
                            </div>
                        </div>
                        <div class="card-peso">
                            <div class="conteudo-cards-peso">
                                <p class="serie">3ª Série</p> <span class="peso">40%</span>
                            </div>
                        </div>
                        <div class="card-peso">
                            <div class="conteudo-cards-peso">
                                <p class="serie">Redação (Apenas 3ª Série)</p> <span class="peso">20%</span>
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
                            <li><a href="#formato-prova">Formato da Prova</a></li>
                            <li><a href="#peso-nota">Peso por Série</a></li>
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
                    <h4>Calendário Provão Paulista</h4>
                        <p>Todas as datas importantes do processo</p>
                        <div class="ler-mais ler-mais--provao"><a href="vestibular.php">Ler mais</a></div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>