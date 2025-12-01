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

    <title>Classificação Provão Paulista | Bem Formandos</title>
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
                        <i class="bi bi-award-fill"></i>
                        SISTEMA DE CLASSIFICAÇÃO
                    </h1>
                    <hr>
                    <p>O sistema de classificação do Provão Paulista Seriado é baseado em grupos de candidatos e distribuição de vagas por cotas. Cada instituição de ensino superior participante segue as mesmas diretrizes gerais.</p>
                </section>
                <section id="grupos-candidatos">
                    <h2>Grupos de Candidatos</h2>
                    <p>Os candidatos são divididos em grupos conforme sua origem educacional, e as vagas são distribuídas de forma a garantir oportunidades equitativas para diferentes contextos.</p>
                    <div class="container-tabs">
                        <div class="tabs-buttons">
                            <button class="tab-btn active" content-id="gA">Grupo A</button>
                            <button class="tab-btn" content-id="gB">Grupo B</button>
                            <button class="tab-btn" content-id="gC">Grupo C</button>
                        </div>
                        <div class="tabs-content">
                            <div class="content active" id="gA">
                                <h3 class="titulo-grupo">Grupo A</h3>
                                <p class="texto-grupo">Candidatos do Ensino Médio da rede de ensino pública do Estado de São Paulo</p>
                                <div class="requisitos-grupo">
                                    <h4 class="titulo-requisitos">Requisitos:</h4>
                                    <ul class="lista-requisitos">
                                        <li class="item-lista-requisitos">Cursou e concluiu integralmente o Ensino Médio em escola pública estadual</li>
                                        <li class="item-lista-requisitos">Não possui curso superior completo</li>
                                        <li class="item-lista-requisitos">Não possui matrícula vigente em instituição pública de ensino superior</li>
                                        <li class="item-lista-requisitos">Exclui-se escolas técnicas do Centro Paula Souza</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content" id="gB">
                                <h3 class="titulo-grupo">Grupo B</h3>
                                <p class="texto-grupo">Candidatos de redes públicas municipais, federais e de outros estados</p>
                                <p class="texto-grupo">Inclui estudantes da modalidade EJA (Educação de Jovens Adultos)</p>
                                <div class="requisitos-grupo">
                                    <h4 class="titulo-requisitos">Requisitos:</h4>
                                    <ul class="lista-requisitos">
                                        <li class="item-lista-requisitos">Cursou e concluiu integralmente o Ensino Médio em escola pública</li>
                                        <li class="item-lista-requisitos">Não possui curso superior completo</li>
                                        <li class="item-lista-requisitos">Não possui matrícula vigente em instituição pública de ensino superior</li>
                                        <li class="item-lista-requisitos">Exclui-se escolas técnicas do Centro Paula Souza</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content" id="gC">
                                <h3 class="titulo-grupo">Grupo C</h3>
                                <p class="texto-grupo">Candidatos das Escolas Técnicas do Centro Paula Souza</p>
                                <div class="requisitos-grupo">
                                    <h4 class="titulo-requisitos">Requisitos:</h4>
                                    <ul class="lista-requisitos">
                                        <li class="item-lista-requisitos">Cursou e concluiu integralmente o Ensino Médio em Etec</li>
                                        <li class="item-lista-requisitos">Não possui curso superior completo</li>
                                        <li class="item-lista-requisitos">Não possui matrícula vigente em instituição pública de ensino superior</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="modalidades-ingresso">
                    <h2>Sistema de Cotas</h2>
                    <p>Cada instituição implementa suas próprias políticas de cotas.</p>
                    <p>As vagas são distribuídas entre diferentes categorias para promover inclusão e diversidade.</p>
                    <div class="box-cards-ingresso">
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">L1</p>
                            <p class="texto-ingresso">Vagas para candidatos de baixa renda</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">L2</p>
                            <p class="texto-ingresso">Vagas para estudantes PPI que são de baixa renda</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">L3</p>
                            <p class="texto-ingresso">Ampla concorrência para candidatos que não se enquadram nas outras cotas</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">L4</p>
                            <p class="texto-ingresso">Vagas reservadas para estudantes PPI (pretos, pardos ou indígenas)</p>
                        </div>
                    </div>
                </section>
                <section id="calculo">
                    <h2>Cálculo da Nota Final</h2>
                    <div class="formulas">
                        <div class="formula">
                            <p class="titulo-calculo">Nota Final</p>
                            <div class="calculo">
                                NF = (N1ª &times 0,15) + (N2ª &times 0,25) + (N3ª &times 0,40) + (R &times 0,20)
                            </div>
                        </div>
                    </div>
                    <div class="legenda">
                        <p class="legenda-formulas"><strong>NF:</strong> Nota Final</p>
                        <p class="legenda-formulas"><strong>N1ª:</strong> Nota 1ª série</p>
                        <p class="legenda-formulas"><strong>N2ª:</strong> Nota 2ª série</p>
                        <p class="legenda-formulas"><strong>N3ª:</strong> Nota 3ª série</p>
                        <p class="legenda-formulas"><strong>R:</strong> Nota da Redação</p>
                    </div>
                    <hr class="linha-classificacao">
                    <div class="desempate">
                        <p>Critérios de Desempate</p>
                        <ol class="lista-criterios lista-criterios--fatec">
                            <li class="criterio">Maior nota na 3ª série</li>
                            <li class="criterio">Maior nota na 2ª série</li>
                            <li class="criterio">Maior nota na Redação</li>
                            <li class="criterio">Maior idade</li>
                        </ol>
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
                            <li><a href="#grupos-candidatos">Grupos de Candidatos</a></li>
                            <li><a href="#modalidades-ingresso">Sistema de Cotas</a></li>
                            <li><a href="#calculo">Cálculo da Nota Final</a></li>
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

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
      <script src="tabs.js"></script>
</body>
</html>