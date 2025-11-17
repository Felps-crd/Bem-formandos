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

    <title>Vestibular Fatec | Bem Formandos</title>
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
                        <i class="bi bi-file-text-fill"></i>
                        COMO FUNCIONA O VESTIBULAR
                    </h1>
                    <hr>
                    <p>O Vestibular da Fatec é o principal meio de ingresso para os cursos de graduação tecnológica oferecidos pela instituição O processo seletivo é composto por uma prova objetiva, com questões de múltipla escolha que abrangem diversas áreas do conhecimento, e por uma redação, que avalia a capacidade de argumentação e expressão escrita do candidato.</p><br>
                    <p>Conheça as etapas e áreas cobradas para se preparar melhor.</p>
                </section>
                <section id="formato-prova">
                    <h2>Formato da Prova</h2>
                    <div class="cards-prova">
                        <div class="card-prova">
                            <div class="conteudo-cards-prova">
                                <h3 class="titulo-prova titulo-prova--fatec">Fase Única</h3>
                                <h4 class="subtitulo-prova">Questões Objetivas:</h4>
                                <p class="texto-prova">60 questões de múltipla escolha, abrangendo diversas áreas do conhecimento.</p>
                                <ul class="lista-infos-prova">
                                    <li class="item-lista-infos-prova">Linguaguens e Códigos</li>
                                    <li class="item-lista-infos-prova">Ciências Humanas</li>
                                    <li class="item-lista-infos-prova">Ciências da Natureza</li>
                                    <li class="item-lista-infos-prova">Matemática</li>
                                    <li class="item-lista-infos-prova">Raciocínio Lógico</li>
                                </ul>
                                <h4 class="subtitulo-prova">Redação:</h4>
                                <p class="texto-prova">Uma proposta de redação para avaliar a capacidade de argumentação e expressão escrita.</p>
                            </div>
                        </div>
                        <p>É fundamental que o candidato se prepare bem para todas as áreas, pois o desempenho em cada uma delas contribui para a nota final. A redação também tem peso significativo e pode ser um diferencial na classificação.</p>
                    </div>
                </section>
                <section id="pontuacao">
                    <h2>Pontuação Acrescida</h2>
                    <p>O Sistema de Pontuação Acrescida é uma política de inclusão implementada pelo Centro Paula Souza (CPS) que concede bônus de pontos à nota final do exame do vestibular das Fatecs.</p>
                    <p>Este sistema beneficia mais de 80% dos aprovados no vestibular, reconhecendo e valorizando a trajetória educacional e características sociais dos candidatos.</p>
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
                            <li><a href="#pontuacao">Pontuação Acrescida</a></li>
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
                    <h4>Calendário Fatec</h4>
                        <p>Todas as datas importantes do processo</p>
                        <div class="ler-mais ler-mais--fatec"><a href="vestibular.php">Ler mais</a></div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>