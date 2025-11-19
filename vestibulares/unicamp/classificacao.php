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

    <title>Classificação Unicamp | Bem Formandos</title>
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
                        <i class="bi bi-award-fill"></i>
                        SISTEMA DE CLASSIFICAÇÃO
                    </h1>
                    <hr>
                    <p>O Sistema de Classificação da Unicamp organiza os critérios usados para selecionar candidatos de forma justa e transparente. Aqui, você encontra um resumo de como essa avaliação funciona.</p>
                </section>
                <section id="modalidades-ingresso">
                    <h2>PAAIS</h2>
                    <p>O Programa de Ação Afirmativa e Inclusão Social (PAAIS) é um programa que oferece bonificação de pontos para candidatos que atendem a critérios específicos de inclusão social. A bonificação é aplicada à nota final de classificação do candidato.</p>
                    <div class="box-cards-ingresso">
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">20%</p>
                            <p class="texto-ingresso">Bonificação de 20% para candidatos que atendem a um critério de inclusão.</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">40%</p>
                            <p class="texto-ingresso">Bonificação de 40% para candidatos que atendem a dois critérios de inclusão.</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">60%</p>
                            <p class="texto-ingresso">Bonificação de 60% para candidatos que atendem a três ou mais critérios.</p>
                        </div>
                    </div>
                    <div class="card-info card-info--unicamp">
                                <div class="conteudo-card-info">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <p class="texto-card-info texto-card-info--unicamp"><strong>Critérios do PAAIS:</strong> A bonificação é concedida a candidatos que atendem a critérios de renda familiar, raça/etnia, deficiência, e outras condições de vulnerabilidade social.<br><strong>Documentação Obrigatória</strong></p>
                                </div>
                            </div>
                </section>
                <section id="etapas">
                    <h2>Etapas da Classificação</h2>
                    <div class="cards-etapas">
                        <div class="etapa">
                            <div class="header-etapa">
                                <span class="dot dot--unicamp">1</span>
                                <h3 class="titulo-card-passo">Primeira Fase</h3>
                            </div>
                            <h4 class="subtitulo-card-etapa">Classificação inicial baseada na prova objetiva</h4>
                            <p class="texto-card-etapa">72 questões objetivas (1 ponto cada)</p>
                            <p class="texto-card-etapa">Nota mínima: 550 pontos</p>
                            <p class="texto-card-etapa">Convocação: a partir de 4x o número de vagas</p>
                        </div>
                        <div class="etapa">
                            <div class="header-etapa">
                                <span class="dot dot--unicamp">2</span>
                                <h3 class="titulo-card-passo">Segunda Fase</h3>
                            </div>
                            <h4 class="subtitulo-card-etapa">Avaliação dissertativa e redação</h4>
                            <p class="texto-card-etapa">Dia 1: Português (6 questões) + Redação + Prova interdisciplinar</p>
                            <p class="texto-card-etapa">Dia 2: Disciplinas específicas + Prova de Matemática + Prova interdisciplinar</p>
                            <p class="texto-card-etapa">Eliminação: nota zero</p>
                        </div>
                        <div class="etapa">
                            <div class="header-etapa">
                                <span class="dot dot--unicamp">3</span>
                                <h3 class="titulo-card-passo">Classificação Final</h3>
                            </div>
                            <h4 class="subtitulo-card-etapa">Cálculo da nota final</h4>
                            <div class="formulas">
                                <div class="formula">
                                    <p class="titulo-calculo">Nota Padronizada</p>
                                    <div class="calculo">
                                        NP = 500 + (N - M) &times 100 &divide DP
                                    </div>
                                </div>
                                <div class="formula">
                                    <p class="titulo-calculo">Nota Padronizada de Opção</p>
                                    <div class="calculo">
                                        NPO = O,15 &times NF1 + 0,20 &times NR + 0,65 &times NF2
                                    </div>
                                </div>
                            </div>
                            <div class="legenda">
                                <p class="legenda-formulas"><strong>NP:</strong> Nota padronizada</p>
                                <p class="legenda-formulas"><strong>N:</strong> Nota bruta do candidato</p>
                                <p class="legenda-formulas"><strong>M:</strong> Média de todos os candidatos</p>
                                <p class="legenda-formulas"><strong>DP:</strong> Desvio padrão das notas</p>
                                <p class="legenda-formulas"><strong>NPO:</strong> Nota padronizada de opção</p>
                                <p class="legenda-formulas"><strong>NF1:</strong> Nota Padronizada da 1ª Fase</p>
                                <p class="legenda-formulas"><strong>NR:</strong> Nota Padronizada da Redação</p>
                                <p class="legenda-formulas"><strong>NF2:</strong> Nota Final da 2ª Fase (média ponderada das provas)</p>
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
                            <li><a href="#modalidades-ingresso">PAAIS</a></li>
                            <li><a href="#etapas">Etapas da Classificação</a></li>
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