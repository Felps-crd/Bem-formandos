<?php // vestibulares/enem/home-enem.php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/estilos/style.css">
    <link rel="stylesheet" href="../../assets/estilos/style-vestibulares.css">
    <link rel="stylesheet" href="../../assets/estilos/sidebars.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Bem Formandos</title>
</head>
<body>
    <div class="container-principal">
        <!-- inicio cabeçalho -->
        <header>
            <div class="logo">
                <a href="../../index.php" class="logo">
                <img src="../../assets/imagens/logo.png" alt="Ícone de formatura">
                <h1>BEM FORMANDOS</h1>
                </a>
            </div>

            <a href="#">
            <button class="btn-cadastro">Cadastre-se</button>
            </a>
        </header>
        <!-- fim cabeçalho -->
        <main class="main-vestibulares">
            <?php include __DIR__ . '/sidebar-enem.php';?>

            <div class="conteudo-enem">
                <section id="introducao">
                    <div class="titulo">
                        <i class="bi bi-pen-fill"></i>
                        <h1>REDAÇÃO</h1>
                    </div>
                    <hr>
                    <p>A redação do Enem é uma das partes mais importantes da prova e pode ser o diferencial para sua aprovação. Ela vale até 1000 pontos e é avaliada por meio de cinco competências específicas. <br>
                    Entender a estrutura e os critérios é fundamental para alcançar uma boa nota.</p>
                    </section>
                    <section id="estrutura-redacao">
                        <h2>Estrutura da Redação do ENEM</h2>
                        <p>A redação do Enem segue o modelo dissertativo-argumentativo em prosa. Isso significa que o candidato deve defender um ponto de vista sobre um tema de ordem social, científica, cultural ou política.</p><br>
                        <p>Ela deve conter:</p>
                            <div class="passos-redacao">
                            <div class="card-estrutura">
                                <div>
                                    <h3>Introdução</h3>
                                <p>Apresentação do tema e da tese que será defendida.</p>
                                </div>
                            </div>
                            <div class="card-estrutura">
                                <div>
                                    <h3>Desenvolvimento</h3>
                                    <p>Dois parágrafos com argumentos, dados ou exemplos que sustentem a tese.</p>
                                </div>
                            </div>
                            <div class="card-estrutura">
                                <div>
                                    <h3>Conclusão</h3>
                                <p>Retomada da tese e proposta de intervenção detalhada e viável.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                        
                
                <section id="criterios">
                    <h2>Critérios de Avaliação</h2>
                    <p>A redação do Enem é avaliada com base em cinco competências, cada uma valendo até 200 pontos:</p>
                    <div class="area-criterios">
                        <div class="card-criterio">
                            <h3>Domínio da Norma Culta</h3>
                            <p>Demonstrar domínio da modalidade escrita formal da língua portuguesa.</p>
                        </div>
                        <div class="card-criterio">
                            <h3>Compreensão do Tema</h3>
                            <p>Compreender a proposta de redação e aplicar conceitos das várias áreas de conhecimento.</p>
                        </div>
                        <div class="card-criterio">
                            <h3>Organização das Informações</h3>
                            <p>Selecionar, relacionar, organizar e interpretar informações em defesa da tese.</p>
                        </div>
                        <div class="card-criterio">
                            <h3>Mecanismos Linguísticos</h3>
                            <p>Uso de palavras e expressões que ligam as ideias, estabelecendo relações lógicas e garantindo a progressão do raciocínio para uma argumentação fluida e clara.</p>
                        </div>
                        <div class="card-criterio">
                            <h3>Proposta de Intervenção</h3>
                            <p>Elaborar proposta de intervenção para o problema abordado, respeitando os direitos humanos.</p>
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
                            <li><a href="#oque-e-enem">O que é o ENEM</a></li>
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
                    <h4>Como se inscrever no ENEM</h4>
                        <p>Passo a passo para fazer sua inscrição</p>
                        <div class="ler-mais"><a href="inscricao.php">Ler mais</a></div>
                        <hr>
                    <h4>Redação ENEM</h4>
                        <p>Tudo sobre a redação do ENEM</p>
                        <div class="ler-mais"><a href="redacao.php">Ler mais</a></div>
                </div>
            </aside>
        </main>

        <footer class="rodape">
            <div class="text">
                <span>© 2025 Bem Formandos</span>
            </div>
        </footer>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>