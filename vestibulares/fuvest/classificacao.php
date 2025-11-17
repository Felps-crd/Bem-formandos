<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/estilos/style.css">
    <link rel="stylesheet" href="../../assets/estilos/style-vestibulares.css">
    <link rel="stylesheet" href="../../assets/estilos/sidebars.css">
    <link rel="stylesheet" href="../../assets/estilos/style-fuvest.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Classificação Fuvest | Bem Formandos</title>
</head>
<body>
    <div class="container-principal">
        <!-- inicio cabeçalho -->
        <?php include_once("../../includes/header.php"); ?>
        <!-- fim cabeçalho -->
        <main class="main-vestibulares">
            <?php include __DIR__ . '/sidebar-fuvest.php';?>

            <div class="conteudo">
                <section id="introducao">
                    <h1 class="titulo titulo--fuvest">
                        <i class="bi bi-award-fill"></i>
                        SISTEMA DE CLASSIFICAÇÃO
                    </h1>
                    <hr>
                    <p>O sistema de classificação do Vestibular Fuvest é baseado no desempenho dos candidatos nas duas fases do processo seletivo.</p> 
                    <p>A nota final é calculada através de uma média ponderada e os candidatos são classificados em ordem decrescente por modalidade.</p>
                </section>
                <section id="modalidades-ingresso">
                    <h2>Tipos de Vagas</h2>
                    <div class="box-cards-ingresso">
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">Ampla Concorrência (AC)</p>
                            <p class="texto-ingresso">Todas as pessoas candidatas concorrem às vagas gerais</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">Escola Pública (EP)</p>
                            <p class="texto-ingresso">Vagas reservadas para estudantes de escola pública</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">PPI</p>
                            <p class="texto-ingresso">Pessoas Pretas, Pardas e Indígenas de escola pública</p>
                        </div>
                    </div>
                </section>
                <section id="etapas">
                    <h2>Etapas da Classificação</h2>
                    <div class="cards-etapas">
                        <div class="etapa">
                            <div class="header-etapa">
                                <span class="dot dot--fuvest">1</span>
                                <h3 class="titulo-card-passo">Primeira Fase</h3>
                            </div>
                            <h4 class="subtitulo-card-etapa">Classificação inicial baseada na prova objetiva</h4>
                            <p class="texto-card-etapa">90 questões objetivas (1 ponto cada)</p>
                            <p class="texto-card-etapa">Nota mínima: 27 acertos (30%)</p>
                            <p class="texto-card-etapa">Convocação: 4x o número de vagas por modalidade</p>
                            <p class="texto-card-etapa">Critério: maior número de acertos</p>
                        </div>
                        <div class="etapa">
                            <div class="header-etapa">
                                <span class="dot dot--fuvest">2</span>
                                <h3 class="titulo-card-passo">Segunda Fase</h3>
                            </div>
                            <h4 class="subtitulo-card-etapa">Avaliação discursiva e redação</h4>
                            <p class="texto-card-etapa">Dia 1: Português (10 questões) + Redação (150 pontos) </p>
                            <p class="texto-card-etapa">Dia 2: Disciplinas específicas (12 questões - 100 pontos)</p>
                            <p class="texto-card-etapa">Eliminação: nota zero na redação ou errar todas as questões</p>
                        </div>
                        <div class="etapa">
                            <div class="header-etapa">
                                <span class="dot dot--fuvest">3</span>
                                <h3 class="titulo-card-passo">Classificação Final</h3>
                            </div>
                            <h4 class="subtitulo-card-etapa">Cálculo da nota final ponderada</h4>
                            <div class="formulas">
                                <div class="formula">
                                    <p class="titulo-calculo"> Sem prova de Competências Específicas</p>
                                    <div class="calculo">
                                        NF = (F1 + D1 + D2) &divide 3
                                    </div>
                                </div>
                                <div class="formula">
                                    <p class="titulo-calculo">Com prova de Competências Específicas</p>
                                    <div class="calculo">
                                        NF = (F1 + D1 + D2 ) + (2 &times CE) &divide 5
                                    </div>
                                </div>
                            </div>
                            <div class="legenda">
                                <p class="legenda-formulas"><strong>NF:</strong> Nota Final</p>
                                <p class="legenda-formulas"><strong>F1:</strong> Nota da 1ª Fase</p>
                                <p class="legenda-formulas"><strong>D1:</strong> Nota do 1º dia da 2ª fase</p>
                                <p class="legenda-formulas"><strong>D2:</strong> Nota do 2º dia da 2ª fase</p>
                                <p class="legenda-formulas"><strong>CE:</strong> Nota das Competências Específicas</p>
                            </div>
                            <hr class="linha-classificacao">
                            <div class="desempate">
                                <p>Critérios de Desempate</p>
                                <ol class="lista-criterios">
                                    <li class="criterio">Maior nota na 2ª fase</li>
                                    <li class="criterio">Maior nota na redação</li>
                                    <li class="criterio">Maior nota nas questões discursivas de português</li>
                                    <li class="criterio">Maior nota nas questões específicas do curso</li>
                                    <li class="criterio">Maior nota na 1ª fase</li>
                                    <li class="criterio">Maior idade</li>
                                </ol>
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
                            <li><a href="#modalidades-ingresso">Tipos de Vagas</a></li>
                            <li><a href="#etapas">Etapas da Classificação</a></li>
                        </ul>
                </div>
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-bookmark-fill"></i>
                        <h3>Conteúdo Relacionado</h3>
                    </div>
                    <hr>
                    <h4>Como se inscrever na Fuvest</h4>
                        <p>Passo a passo para fazer sua inscrição</p>
                        <div class="ler-mais ler-mais--fuvest"><a href="inscricao.php">Ler mais</a></div>
                        <hr>
                    <h4>Vestibular Fuvest</h4>
                        <p>Tudo sobre o vestibular da Fuvest</p>
                        <div class="ler-mais ler-mais--fuvest"><a href="vestibular.php">Ler mais</a></div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>