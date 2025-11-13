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

    <title>Vestibular Unesp | Bem Formandos</title>
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
                        <i class="bi bi-file-text-fill"></i>
                        COMO FUNCIONA O VESTIBULAR
                    </h1>
                    <hr>
                    <p>O Vestibular da UNESP é o principal meio de ingresso para os cursos de graduação da Universidade Estadual Paulista, uma das mais prestigiadas instituições de ensino superior do Brasil. O processo seletivo é composto por duas fases que avaliam conhecimentos gerais e capacidade de argumentação dos candidatos.</p><br>
                    <p>Conheça as etapas e áreas cobradas para se preparar melhor.</p>
                </section>
                <section id="formato-prova">
                    <h2>Formato da Prova</h2>
                    <div class="cards-prova">
                        <div class="card-prova">
                            <div class="conteudo-cards-prova">
                                <h3 class="titulo-prova titulo-prova--unesp">Primeira Fase</h3>
                                <h4 class="subtitulo-prova">Prova de Conhecimentos Gerais:</h4>
                                <p class="texto-prova">90 questões de múltipla escolha, abrangendo todas as disciplinas do Ensino Médio</p>
                                <ul class="lista-infos-prova">
                                    <li class="item-lista-infos-prova">Duração: até 5 horas</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-prova">
                            <div class="conteudo-cards-prova">
                                <h3 class="titulo-prova titulo-prova--unesp">Segunda Fase</h3>
                                <h4 class="subtitulo-prova">Primeiro Dia</h4>
                                <ul class="lista-infos-prova">
                                    <li class="item-lista-infos-prova">24 questões discursivas das áreas de Ciências Humanas e Sociais Aplicadas; Ciências da Natureza e suas tecnologias e Matemática e suas tecnologias</li>
                                    <li class="item-lista-infos-prova">Duração: até 5 horas</li>
                                </ul>
                                <h4 class="subtitulo-prova">Segundo Dia</h4>
                                <ul class="lista-infos-prova">
                                    <li class="item-lista-infos-prova">12 questões discursivas de Linguagens e suas tecnologias</li>
                                    <li class="item-lista-infos-prova">Redação</li>
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
                            <i class="bi bi-building-fill"></i>
                            <p class="nome-curso">Arquitetura e Urbanismo</p>
                        </div>
                        <div class="curso">
                            <i class="bi bi-palette-fill"></i>
                            <p class="nome-curso">Artes Visuais</p>
                        </div>
                        <div class="curso">
                            <i class="bi bi-stars"></i>
                            <p class="nome-curso">Arte Teatro</p>
                        </div>
                        <div class="curso">
                            <i class="bi bi-person-walking"></i>
                            <p class="nome-curso">Artes Cênicas</p>
                        </div>
                        <div class="curso">
                            <i class="bi bi-vector-pen"></i>
                            <p class="nome-curso">Design</p>
                        </div>
                        <div class="curso">
                            <i class="bi bi-music-note"></i>
                            <p class="nome-curso">Música</p>
                        </div>
                    </div>
                    <h3 class="subtitulo-secao">Como funciona a avaliação</h3>
                    <p>Cada curso tem um formato específico de prova, mas todas valem de 0 a 100 pontos. Existe uma pontuação mínima que o candidato precisa atingir para não ser desclassificado.</p>
                    <div class="aviso-provas">
                        <p class="titulo-aviso-provas">Importante</p>
                        <p class="texto-aviso-provas">Se você pretende prestar um desses cursos, consulte o Manual do Candidato para saber exatamente o que será cobrado, quais materiais levar e como se preparar adequadamente para a prova de habilidades.</p>
                    </div>
                </section>
                <section id="modalidades-ingresso">
                    <h2>Modalidades de Ingresso</h2>
                    <div class="box-cards-ingresso">
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">Sistema Universal (SU)</p>
                            <p class="texto-ingresso">Todas as pessoas candidatas concorrem às vagas gerais</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">Sistema de Reserva de Vagas para Educação Básica Pública (SRVEBP)</p>
                            <p class="texto-ingresso">Vagas reservadas para estudantes de escola pública</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">SRVEBP + PPI</p>
                            <p class="texto-ingresso">Pessoas Pretas, Pardas e Indígenas de escola pública</p>
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
                    <h4>Como se inscrever na Unesp</h4>
                        <p>Passo a passo para fazer sua inscrição</p>
                        <div class="ler-mais ler-mais--unesp"><a href="inscricao.php">Ler mais</a></div>
                        <hr>
                    <h4>Calendário Unesp</h4>
                        <p>Todas as datas importantes do processo</p>
                        <div class="ler-mais ler-mais--unesp"><a href="vestibular.php">Ler mais</a></div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>