<?php // vestibulares/enem/home-enem.php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/estilos/style.css">
    <link rel="stylesheet" href="../../assets/estilos/style-vestibulares.css">
    <link rel="stylesheet" href="../../assets/estilos/sidebars.css">
    <link rel="stylesheet" href="../../assets/estilos/style-enem.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Prouni | Bem Formandos</title>
</head>
<body>
    <div class="container-principal">
        <!-- inicio cabeçalho -->
        <?php include_once("../../includes/header.php"); ?>
        <!-- fim cabeçalho -->
        <main class="main-vestibulares">
            <?php include __DIR__ . '/sidebar-enem.php';?>

            <div class="conteudo">
                <section id="introducao">
                    <h1 class="titulo titulo--enem">
                        <i class="bi bi-clipboard-fill"></i>
                        PROUNI
                    </h1>
                    <hr>
                    <p>O PROUNI oferece bolsas de estudo integrais e parciais em universidades privadas para estudantes de baixa renda. Descubra como conseguir sua bolsa e realizar o sonho do ensino superior.</p>
                </section>
                <section id="oque-e-prouni">
                    <h2>Oque é o Prouni?</h2>
                    <p>O Programa Universidade para Todos (PROUNI) é um programa do Ministério da Educação que oferece bolsas de estudo integrais e parciais (50%) em instituições privadas de educação superior, em cursos de graduação e sequenciais de formação especifica.</p>
                </section>
                <section id="como-funciona">
                    <h2>Como Funciona o Prouni?</h2>
                    <div class="area-cards">
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">1</span>
                                <h3 class="titulo-card-passo">Faça o Enem</h3>
                            </div>
                            <p class="texto-card-passo">Participe do ENEM e obtenha a nota mínima de 450 pontos na média das provas e não zere a redação.</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">2</span>
                                <h3 class="titulo-card-passo">Aguarde a Abertura</h3>
                            </div>
                            <p class="texto-card-passo">As inscrições do PROUNI acontecem duas vezes por ano: no primeiro semestre (janeiro/fevereiro) e no segundo semestre (junho/julho).</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">3</span>
                                <h3 class="titulo-card-passo">Inscreva-se no Site</h3>
                            </div>
                            <p class="texto-card-passo">Acesse o site oficial do PROUNI e faça sua inscrição escolhendo até 2 opções de curso.</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">4</span>
                                <h3 class="titulo-card-passo">Acompanhe o Resultado</h3>
                            </div>
                            <p class="texto-card-passo">Aguarde a divulgação do resultado e, se pré-selecionado, comprove as informações declaradas.</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">5</span>
                                <h3 class="titulo-card-passo">Comprove as Informaçoes</h3>
                            </div>
                            <p class="texto-card-passo">Apresente os documentos necessários na instituição de ensino para comprovar as informações.</p>
                        </div>
                </section>
                <section id="bolsas">
                    <h2>Tipos de Bolsas Prouni</h2>
                    <div class="area-cards--bolsas">
                        <div class="card-tipo card--bolsa">
                            <div class="header-card header-card--bolsa">100%</div>
                           <div class="titulo-card-tipo">Bolsa Integral</div>
                            <p class="texto-card-tipo texto-card-bolsa">Quem pode participar</p>
                            <ul class="lista-card">
                                <li>Estudantes com renda familiar per capita de até 1,5 salário mínimo.</li>
                                <li>Quem concluiu o ensino médio em escola pública.</li>
                                <li>Quem concluiu o ensino médio em escola particular com bolsa integral.</li>
                                <li>Pessoas com deficiência.</li>
                                <li>Professores da rede pública de ensino básico (para cursos de licenciatura).</li>
                            </ul>
                        </div>
                        <div class="card-tipo card--bolsa">
                            <div class="header-card header-card--bolsa">50%</div>
                           <div class="titulo-card-tipo">Bolsa Parcial</div>
                            <p class="texto-card-tipo texto-card-bolsa">Quem pode participar</p>
                            <ul class="lista-card">
                                <li>Estudantes com renda familiar per capita de até 3 salários mínimos.</li>
                                <li>Quem concluiu o ensino médio em escola pública.</li>
                                <li>Quem concluiu o ensino médio em escola particular com bolsa integral.</li>
                                <li>Pessoas com deficiência.</li>
                                <li>Professores da rede pública de ensino básico (para cursos de licenciatura).</li>
                            </ul>
                        </div>
                        <div class="card-aviso card-aviso--prouni">
                            <h4>Importante:</h4>
                            <p>Bolsistas parciais do PROUNI podem solicitar financiamento do restante da mensalidade atraves do FIES.</p>
                        </div>
                    </div>
                </section>
                <section id="documentos">
                    <h2>Documentos Necessários</h2>
                    <div class="requisitos">
                        <div class="requisito">
                            <div class="titulo-requisito">
                                <i class="bi bi-check-circle-fill"></i>
                                <h3>Identificação do Candidato e da Família</h3>
                            </div>
                            <p class="texto-requisito">Carteira de Identidade; ou <br>Carteira Nacional de Habilitação, novo modelo, no prazo de validade; ou <br> Carteira do Trabalho e Previdência Social (páginas com foto e dados pessoais).</p>
                        </div>
                        <div class="requisito">
                            <div class="titulo-requisito">
                                <i class="bi bi-check-circle-fill"></i>
                                <h3>Comprovante de Residência</h3>
                            </div>
                            <p class="texto-requisito">Contas de água, gás, energia elétrica ou telefone (fixo ou móvel).</p>
                        </div>
                        <div class="requisito">
                            <div class="titulo-requisito">
                                <i class="bi bi-check-circle-fill"></i>
                                <h3>Comprovantes de Rendimentos</h3>
                            </div>
                            <p class="texto-requisito">Holerites ou Contracheques.</p>
                        </div>
                        <div class="requisito">
                            <div class="titulo-requisito">
                                <i class="bi bi-check-circle-fill"></i>
                                <h3>Histórico Escolar do Ensino Médio</h3>
                            </div>
                            <p class="texto-requisito">Caso você tenha sido bolsista em escola particular no ensino médio, inclua declaração da escola atestando que estudou na condição de bolsista.</p>
                        </div>
                        <div class="requisito">
                            <div class="titulo-requisito">
                                <i class="bi bi-check-circle-fill"></i>
                                <h3>Boletim de Desempenho do ENEM</h3>
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
                            <li><a href="#introducao">O que é o Prouni</a></li>
                            <li><a href="#como-funciona">Como funciona</a></li>
                            <li><a href="#bolsas">Tipos de bolsas</a></li>
                            <li><a href="#documentos">Documentos necessários</a></li>
                        </ul>
                </div>
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-bookmark-fill"></i>
                        <h3>Conteúdo Relacionado</h3>
                    </div>
                    <hr>
                    <h4>Como se inscrever no Enem</h4>
                        <p>Passo a passo para fazer sua inscrição</p>
                        <div class="ler-mais ler-mais--enem"><a href="inscricao.php">Ler mais</a></div>
                        <hr>
                    <h4>FIES</h4>
                        <p>Tudo sobre o financimento estudantil</p>
                        <div class="ler-mais ler-mais--enem"><a href="fies.php">Ler mais</a></div>
                </div>
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-lightbulb-fill"></i>
                        <h3>Dicas Importantes</h3>
                    </div>
                    <hr>
                    <div class="lista-dicas">
                        <p class="item-lista-dicas"><i class="bi bi-check"></i>Pesquise as Instituições</p>
                        <p class="item-lista-dicas"><i class="bi bi-check"></i>Melhore sua Nota do Enem</p>
                        <p class="item-lista-dicas"><i class="bi bi-check"></i>Prepare-se para a Lista de Espera</p>
                    </div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>