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

    <title>Vestibular Unicamp | Bem Formandos</title>
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
                        <i class="bi bi-file-text-fill"></i>
                        COMO FUNCIONA O VESTIBULAR
                    </h1>
                    <hr>
                    <p>O Vestibular da Unicamp é o principal meio de ingresso para os cursos de graduação da Universidade Estadual de Campinas, uma das mais prestigiadas instituições de ensino superior do Brasil. O processo seletivo é composto por duas fases que avaliam conhecimentos gerais e capacidade de argumentação dos candidatos.</p>
                    <p>Conheça as etapas e áreas cobradas para se preparar melhor.</p>
                </section>
                <section id="formato-prova">
                    <h2>Formato da Prova</h2>
                    <div class="cards-prova">
                        <div class="card-prova">
                            <div class="conteudo-cards-prova">
                                <h3 class="titulo-prova titulo-prova--unicamp">Primeira Fase</h3>
                                <h4 class="subtitulo-prova">Prova de Conhecimentos Gerais:</h4>
                                <p class="texto-prova">72 questões de múltipla escolha, abrangendo todas as disciplinas do Ensino Médio.</p>
                                <ul class="lista-infos-prova">
                                    <li class="item-lista-infos-prova">Duração: até 5 horas</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-prova">
                            <div class="conteudo-cards-prova">
                                <h3 class="titulo-prova titulo-prova--unicamp">Segunda Fase</h3>
                                <h4 class="subtitulo-prova">Primeiro Dia</h4>
                                <ul class="lista-infos-prova">
                                    <li class="item-lista-infos-prova">10 questões de Português, Inglês e Ciências da Natureza</li>
                                    <li class="item-lista-infos-prova">1 Redação (obrigatória escolher proposta)</li>
                                    <li class="item-lista-infos-prova">Duração: até 5 horas</li>
                                </ul>
                                <h4 class="subtitulo-prova">Segundo Dia</h4>
                                <ul class="lista-infos-prova">
                                    <li class="item-lista-infos-prova">12 questões discursivas</li>
                                    <li class="item-lista-infos-prova">De 2 a 4 disciplinas específicas do curso escolhido</li>
                                    <li class="item-lista-infos-prova">Duração: até 5 horas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="habilidades-especificas">
                    <h2>Provas de Habilidades Específicas</h2>
                    <p>As Provas de Habilidades Específicas são exames práticos ou teórico-práticos que testam as competências artísticas, criativas ou técnicas do candidato. Elas acontecem após a primeira fase do vestibular e sua nota compõe a média final do candidato junto com as notas da primeira e segunda fase.</p>
                    <h3 class="subtitulo-secao">Cursos que exigem:</h3>
                    <div class="cursos-habilidades">
                        <div class="curso">
                            <i class="bi bi-palette-fill"></i>
                            <p class="nome-curso">Artes Visuais</p>
                        </div>
                        <div class="curso">
                            <i class="bi bi-person-walking"></i>
                            <p class="nome-curso">Artes Cênicas</p>
                        </div>
                        <div class="curso">
                            <i class="bi bi-person-standing"></i>
                            <p class="nome-curso">Dança</p>
                        </div>
                        <div class="curso">
                            <i class="bi bi-music-note"></i>
                            <p class="nome-curso">Música</p>
                        </div>
                    </div>
                    <h3 class="subtitulo-secao">Como funciona a avaliação</h3>
                    <p>Cada curso tem um formato específico de prova, mas todas valem de 0 a 48 pontos. Existe uma pontuação mínima que o candidato precisa atingir para não ser desclassificado.</p>
                    <div class="aviso-provas">
                        <p class="titulo-aviso-provas">Importante</p>
                        <p class="texto-aviso-provas">Se você pretende prestar um desses cursos, consulte o Manual do Candidato para saber exatamente o que será cobrado, quais materiais levar e como se preparar adequadamente para a prova de habilidades.</p>
                    </div>
                </section>
                <section id="modalidades-ingresso">
                    <h2>Modalidades de Ingresso</h2>
                    <div class="box-cards-ingresso">
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">Ampla Concorrência (AC)</p>
                            <p class="texto-ingresso">Todas as pessoas candidatas concorrem às vagas gerais</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">PAAIS</p>
                            <p class="texto-ingresso">Bônus em notas para estudantes que cursaram o ensino médio em escola pública</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">Cotas</p>
                            <p class="texto-ingresso">Pessoas Pretas e Pardas </p>
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
                            <li><a href="#habilidades-especificas">Habilidades Específicas</a></li>
                            <li><a href="#modalidades-ingresso">Modalidades de Ingresso</a></li>
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
                    <h4>Calendário Unicamp</h4>
                        <p>Todas as datas importantes do processo</p>
                        <div class="ler-mais ler-mais--unicamp"><a href="vestibular.php">Ler mais</a></div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>