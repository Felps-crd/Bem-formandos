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

    <title>Vestibular Fuvest | Bem Formandos</title>
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
                        <i class="bi bi-file-text-fill"></i>
                        COMO FUNCIONA O VESTIBULAR
                    </h1>
                    <hr>
                    <p>O Vestibular da FUVEST é o principal meio de ingresso para os cursos de graduação da USP, uma das mais prestigiadas universidades da América Latina. O processo seletivo é composto por duas fases que avaliam conhecimentos gerais e capacidade de argumentação dos candidatos. <br></p>
                    <p>Conheça as etapas e áreas cobradas para se preparar melhor.</p>
                </section>
                <section id="formato-prova">
                    <h2>Formato da Prova</h2>
                    <div class="cards-prova">
                        <div class="card-prova">
                            <div class="conteudo-cards-prova">
                                <h3 class="titulo-prova titulo-prova--fuvest">Primeira Fase</h3>
                                <h4 class="subtitulo-prova">Questões Objetivas:</h4>
                                <p class="texto-prova">90 questões de múltipla escolha, abrangendo todas as disciplinas do Ensino Médio.</p>
                                <ul class="lista-infos-prova">
                                    <li class="item-lista-infos-prova">Duração: até 5 horas</li>
                                    <li class="item-lista-infos-prova">Nota mínima para 2ª fase: 27 acertos (30%)</li>
                                    <li class="item-lista-infos-prova">Cada questão vale 1 ponto</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-prova">
                            <div class="conteudo-cards-prova">
                                <h3 class="titulo-prova titulo-prova--fuvest">Segunda Fase</h3>
                                <h4 class="subtitulo-prova">Primeiro Dia</h4>
                                <ul class="lista-infos-prova">
                                    <li class="item-lista-infos-prova">10 questões discursivas de Português</li>
                                    <li class="item-lista-infos-prova">1 Redação (obrigatória escolher proposta)</li>
                                    <li class="item-lista-infos-prova">Duração: até 4 horas</li>
                                    <li class="item-lista-infos-prova">Total: 150 pontos</li>
                                </ul>
                                <h4 class="subtitulo-prova">Segundo Dia</h4>
                                <ul class="lista-infos-prova">
                                    <li class="item-lista-infos-prova">12 questões discursivas</li>
                                    <li class="item-lista-infos-prova">De 2 a 4 disciplinas específicas do curso escolhido</li>
                                    <li class="item-lista-infos-prova">Duração: até 4 horas</li>
                                    <li class="item-lista-infos-prova">Total: 100 pontos</li>
                                </ul>
                            </div>
                        </div>
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
                            <p class="titulo-ingresso">Escola Pública (EP)</p>
                            <p class="texto-ingresso">Vagas reservadas para estudantes de escola pública</p>
                        </div>
                        <div class="card-ingresso">
                            <p class="titulo-ingresso">PPI</p>
                            <p class="texto-ingresso">Pessoas Pretas, Pardas e Indígenas de escola pública</p>
                        </div>
                    </div>
                </section>
                <section id="simulado">
                    <h2>Simulado Fuvest</h2>
                    <p>O Simulado da Fuvest é uma prova preparatória oficial que reproduz fielmente o formato e o nível de dificuldade da primeira fase do vestibular. E uma oportunidade única para os candidatos testarem seus conhecimentos e se familiarizarem com o estilo das questões.</p>
                    <div class="como-funciona">
                        <p class="titulo-como-funciona">Como Funciona?</p>
                        <ul class="lista-como-funciona">
                            <li class="item-lista-como-funciona">90 questões objetivas idênticas ao formato da 1ª fase</li>
                            <li class="item-lista-como-funciona">5 horas de duração</li>
                            <li class="item-lista-como-funciona">Todas as disciplinas do Ensino Média são abordadas</li>
                            <li class="item-lista-como-funciona">Correção detalhada com gabarito comentado</li>
                            <li class="item-lista-como-funciona">Relatório de desempenho individual por área</li>
                        </ul>
                    </div>
                </section>
                <section id="obras-literarias">
                    <h2>Obras Literárias</h2>
                    <p>A Fuvest define anualmente uma lista de obras literárias obrigatórias que são cobradas nas provas de Português e Literatura. Essas obras são fundamentais para a preparação e representam diferentes períodos e estilos da literatura brasileira e portuguesa.</p>
                    <div class="como-funciona">
                        <p class="titulo-como-funciona">Como são Cobradas?</p>
                        <ul class="lista-como-funciona">
                            <li class="item-lista-como-funciona">1ª Fase: Questões objetivas sobre enredo, personagens e contexto </li>
                            <li class="item-lista-como-funciona">2ª Fase: Questões discursivas aprofundadas </li>
                            <li class="item-lista-como-funciona">Análise literária: Estilo, linguagem e características</li>
                            <li class="item-lista-como-funciona">Contexto histórico: Época e movimento literário</li>
                        </ul>
                    </div>
                    <div class="card-obras">
                        <div class="header-card-obras">
                            <span class="icone-info icone-info--fuvest"><i class="bi bi-book-fill"></i></span>
                            <h3 class="titulo-prova">Lista de obras Fuvest 2026</h3>
                        </div>
                        <div class="lista-obras">
                            <p class="obra"><span class="titulo-obra">Opúsculo Humanitário (1853)</span>  – Nísia Floresta</p>
                            <p class="obra"><span class="titulo-obra">Nebulosas (1872)</span> – Narcisa Amália</p>
                            <p class="obra"><span class="titulo-obra">Memórias de Martha (1899)</span> – Julia Lopes de Almeida</p>
                            <p class="obra"><span class="titulo-obra">Caminho de pedras (1937)</span> – Rachel de Queiroz</p>
                            <p class="obra"><span class="titulo-obra">O Cristo Cigano (1961)</span> – Sophia de Mello Breyner Andresen</p>
                            <p class="obra"><span class="titulo-obra">As meninas (1973)</span> – Lygia Fagundes Telles</p>
                            <p class="obra"><span class="titulo-obra">Balada de amor ao vento (1990)</span> – Paulina Chiziane</p>
                            <p class="obra"><span class="titulo-obra">Canção para ninar menino grande (2018)</span> – Conceição Evaristo</p>
                            <p class="obra"><span class="titulo-obra">A visão das plantas (2019)</span>– Djaimilia Pereira de Almeida</p>
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
                            <li><a href="#formato-prova">Formato de Prova</a></li>
                            <li><a href="#modalidades-ingresso">Modalidades de Ingresso</a></li>
                            <li><a href="#simulado">Simulado</a></li>
                            <li><a href="#obras-literarias">Obras Literárias</a></li>
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
                    <h4>Calendário Fuvest</h4>
                        <p>Todas as datas importantes do processo</p>
                        <div class="ler-mais ler-mais--fuvest"><a href="vestibular.php">Ler mais</a></div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>