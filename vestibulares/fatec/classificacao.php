<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/estilos/style.css">
    <link rel="stylesheet" href="../../assets/estilos/style-vestibulares.css">
    <link rel="stylesheet" href="../../assets/estilos/sidebars.css">
    <link rel="stylesheet" href="../../assets/estilos/style-fatec.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Classificação Fatec | Bem Formandos</title>
</head>
<body>
    <div class="container-principal">
        <!-- inicio cabeçalho -->
        <?php include_once("../../includes/header.php"); ?>
        <!-- fim cabeçalho -->
        <main class="main-vestibulares">
            <?php include __DIR__ . '/sidebar-fatec.php';?>

            <div class="conteudo">
                <section id="introducao">
                    <h1 class="titulo titulo--fatec">
                        <i class="bi bi-award-fill"></i>
                        SISTEMA DE CLASSIFICAÇÃO
                    </h1>
                    <hr>
                    <p>O sistema de classificação é baseado na pontuação total obtida pelo candidato na prova objetiva e na redação. A nota de corte varia a cada semestre e curso, dependendo da demanda e do desempenho geral dos candidatos.</p>
               </section>
               <section id="pontuacao">
                    <h2>Pontuação Acrescida</h2>
                    <p>A Fatec oferece um sistema de pontuação acrescida para candidatos que se enquadram em determinados critérios de inclusão social.</p>
                     <div class="box-cards-ingresso">
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">3%</p>
                            <p class="texto-ingresso">Para candidatos que se autodeclaram como afrodescendentes (pretos, pardos ou indígenas).</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">10%</p>
                            <p class="texto-ingresso">Para quem cursou integralmente o Ensino Médio em escola pública.</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">13%</p>
                            <p class="texto-ingresso">Para candidatos que atendem aos dois critérios simultaneamente.</p>
                        </div>
                    </div>
                </section>
                <section id="calculo">
                    <h2>Cálculo da Nota Final</h2>
                    <div class="formulas">
                                <div class="formula">
                                    <p class="titulo-calculo">Nota Final</p>
                                    <div class="calculo">
                                        NF = [ (8 &times ((4 &times (100 &times NPC &divide 60)) + ENEM) &divide 5 ) + (2 &times R) ] &divide 10
                                    </div>
                                </div>
                                <div class="formula">
                                    <p class="titulo-calculo">Nota Final do Candidato</p>
                                    <div class="calculo">
                                        NFC = NF &times multiplicador
                                    </div>
                                </div>
                            </div>
                            <div class="legenda">
                                <p class="legenda-formulas"><strong>NF:</strong> Nota Final</p>
                                <p class="legenda-formulas"><strong>NPC:</strong> Número de acertos na prova objetiva</p>
                                <p class="legenda-formulas"><strong>ENEM:</strong> Nota do Enem, para os candidatos que optaram por usá-la</p>
                                <p class="legenda-formulas"><strong>R:</strong> Nota da Redação</p>
                                <p class="legenda-formulas"><strong>NFC:</strong> Nota Final do Candidato</p>
                                <p class="legenda-formulas"><strong>multiplicador:</strong> Pontuação acrescida</p>
                            </div>
                            <hr class="linha-classificacao">
                            <div class="desempate">
                                <p>Critérios de Desempate</p>
                                <ol class="lista-criterios lista-criterios--fatec">
                                    <li class="criterio">Maior nota em Matemática</li>
                                    <li class="criterio">Maior nota em Português</li>
                                    <li class="criterio">Maior nota em Física</li>
                                    <li class="criterio">Maior nota em Biologia</li>
                                    <li class="criterio">Maior nota em Química</li>
                                    <li class="criterio">Maior nota em História</li>
                                    <li class="criterio">Maior nota em Geografia</li>
                                    <li class="criterio">Maior nota em Inglês</li>
                                    <li class="criterio">Maior nota na Redação</li>
                                    <li class="criterio">Maior idade</li>
                                    <li class="criterio">Sorteio</li>
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
                            <li><a href="#pontuacao">Pontuação Acrescida</a></li>
                            <li><a href="#calculo">Cálculo da Nota Final</a></li>
                        </ul>
                </div>
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-bookmark-fill"></i>
                        <h3>Conteúdo Relacionado</h3>
                    </div>
                    <hr>
                    <h4>Como se inscrever na Fatec</h4>
                        <p>Passo a passo para fazer sua inscrição</p>
                        <div class="ler-mais ler-mais--fatec"><a href="inscricao.php">Ler mais</a></div>
                        <hr>
                    <h4>Vestibular Fatec</h4>
                        <p>Tudo sobre o vestibular da Fatec</p>
                        <div class="ler-mais ler-mais--fatec"><a href="vestibular.php">Ler mais</a></div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>