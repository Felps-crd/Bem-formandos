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
    <title>Enem | Bem Formandos</title>
</head>
<body>
    <div class="container-principal">

        <!-- Cabeçalho -->
        <header>
            <div class="logo">
                <a href="../../index.php" class="logo">
                    <img src="../../assets/imagens/logo.png" alt="Ícone de formatura">
                    <h1>BEM FORMANDOS</h1>
                </a>
            </div>
            <a href="#"><button class="btn-cadastro">Cadastre-se</button></a>
        </header>

        <!-- Conteúdo principal -->
        <main class="main-vestibulares">
            <?php include __DIR__ . '/sidebar-enem.php'; ?>

            <div class="conteudo">

                <!-- Introdução -->
                <section id="introducao">
                    <h1 class="titulo titulo--enem"><i class="bi bi-info-circle-fill"></i> O QUE É ENEM</h1>
                    <hr>
                    <p>O Enem (Exame Nacional do Ensino Médio) foi criado em 1998 para avaliar como os estudantes estão saindo do ensino médio. Mas desde 2009, ele ganhou um papel super importante: virou a principal forma de entrar em faculdades públicas e conseguir bolsas ou financiamentos.</p>
                </section>

                <div class="dica-importante">
                    <i class="bi bi-lightbulb-fill"></i>
                    <div>
                        <strong>Dica Importante</strong><br>
                        <p>Com a nota do Enem, dá pra se inscrever no Sisu, no ProUni e no Fies. Além disso, algumas universidades de Portugal aceitam a nota do exame!</p>
                    </div>
                </div>

                <p>Qualquer pessoa que já terminou ou está terminando o ensino médio pode fazer o Enem. Quem ainda está estudando pode participar como "treineiro", só pra testar seus conhecimentos.</p>
                <br>

                <!-- Áreas de conhecimento -->
                <section id="areas-conhecimento">
                    <p>A prova acontece em dois dias e tem 180 questões divididas em quatro áreas:</p>
                    <div class="areas-provas">
                        <div class="area-card">
                            <i class="bi bi-journal-bookmark-fill"></i>
                            <div>
                                <h3>Linguaguens e Códigos</h3>
                                <p>Português, Literatura, Língua Estrangeira, Artes, Educação Física e Tecnologias</p>
                            </div>
                        </div>
                        <div class="area-card">
                            <i class="bi bi-people-fill"></i>
                            <div>
                                <h3>Ciências Humanas</h3>
                                <p>História, Geografia, Sociologia e Filosofia</p>
                            </div>
                        </div>
                        <div class="area-card">
                            <i class="bi bi-flask-fill"></i>
                            <div>
                                <h3>Ciências da Natureza</h3>
                                <p>Biologia, Física e Química</p>
                            </div>
                        </div>
                        <div class="area-card">
                            <i class="bi bi-calculator-fill"></i>
                            <div>
                                <h3>Matemática</h3>
                                <p>Matemática e suas Tecnologias</p>
                            </div>
                        </div> 
                    </div>
                </section>

                <!-- Acessibilidade -->
                <section id="acessibilidade">
                    <h2>Acessibilidade e Inclusão</h2>
                    <p>O Enem também garante recursos de acessibilidade, atendimento especializado e até explicação para pessoas privadas de liberdade. É um exame que busca ser inclusivo e dar mais chances para todo mundo.</p>
                </section>

            </div>

            <!-- Painel lateral -->
            <aside class="painel-lateral">
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-list-ul"></i>
                        <h3>Índice</h3>
                    </div>
                    <hr>
                    <ul>
                        <li><a href="#introducao">O que é Enem</a></li>
                        <li><a href="#areas-conhecimento">Áreas de conhecimento</a></li>
                        <li><a href="#acessibilidade">Acessibilidade</a></li>
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
                    <h4>Redação Enem</h4>
                    <p>Tudo sobre a redação do Enem</p>
                    <div class="ler-mais ler-mais--enem"><a href="redacao.php">Ler mais</a></div>
                </div>
            </aside>

        </main>

        <!-- Rodapé -->
        <footer class="rodape">
            <div class="text">
                <span>© 2025 Bem Formandos</span>
            </div>
        </footer>
    </div>

    <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>
