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

    <title>Calendário ENEM | Bem Formandos</title>
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

            <div class="conteudo">
                <section id="introducao">
                    <h1 class="titulo titulo--enem"><i class="bi bi-calendar-fill"></i>CALENDÁRIO</h1>
                    <hr>
                    <p>Fique por dentro de todas as datas importantes do ENEM 2025. Aqui você encontra o cronograma completo com prazos de inscrição, pagamento, aplicação das provas e divulgação dos resultados.</p>
                </section>
                 <section id="cronograma"> 
                    <h2>Cronograma Completo ENEM 2025</h2> <!-- alterar ano por variável que armazena o ano atualizado -->
                    <div class="calendario">
                        <div class="calendario-card" data-etapa="inscricoes">
                            <div class="calendario-card-header">
                                <span class="icone-card"><i class="bi bi-person-check-fill"></i></span>
                                <span class="calendario-card-titulo">Inscrições</span>
                                <span class="calendario-card-mes">Maio</span>
                            </div>
                            <hr class="calendario-divisor">
                            <div class="calendario-card-body">
                                <div class="calendario-item">
                                    <span class="calendario-item-label">Solicitação de isenção de taxa:</span>
                                    <span class="calendario-item-data">14/05/2025 - 25/05/2025</span>
                                </div>
                            <hr class="calendario-divisor">
                                <div class="calendario-item">
                                    <span class="calendario-item-label">Período de incrições:</span>
                                    <span class="calendario-item-data">26/05/2025 - 06/06/2025</span>
                                </div>
                            <hr class="calendario-divisor">
                                <div class="calendario-item">
                                    <span class="calendario-item-label">Solicitação de atendimento especializado:</span>
                                    <span class="calendario-item-data">26/05/2025 - 06/06/2025</span>
                                </div>
                            <hr class="calendario-divisor">
                                <div class="calendario-item">
                                    <span class="calendario-item-label">Tratamento pelo nome social:</span>
                                    <span class="calendario-item-data">26/05/2025 - 06/06/2025</span>
                                </div>
                            </div>
                        </div>

                        <div class="calendario-card" data-etapa="pagamento">
                            <div class="calendario-card-header">
                                <span class="icone-card"><i class="bi bi-credit-card-fill"></i></span>
                                <span class="calendario-card-titulo">Pagamento</span>
                                <span class="calendario-card-mes">Junho</span>
                            </div>
                            <hr class="calendario-divisor">
                            <div class="calendario-card-body">
                                <div class="calendario-item">
                                    <span class="calendario-item-label">Resultado da solicitação de isenção de taxa:</span>
                                    <span class="calendario-item-data">13/05/2025</span>
                                </div>
                            <hr class="calendario-divisor">
                                <div class="calendario-item">
                                    <span class="calendario-item-label">Recurso da isenção:</span>
                                    <span class="calendario-item-data">13/05/2025 - 17/05/2025</span>
                                </div>
                            <hr class="calendario-divisor">
                                <div class="calendario-item">
                                    <span class="calendario-item-label">Pagamento da taxa de inscrição:</span>
                                    <span class="calendario-item-data">26/05/2025 - 27/06/2025</span>
                                </div>
                            </div>
                        </div>

                        <div class="calendario-card" data-etapa="cartao-de-confirmacao">
                            <div class="calendario-card-header">
                                <span class="icone-card"><i class="bi bi--fill"></i></span>
                                <span class="calendario-card-titulo">Cartão de Confirmação</span>
                                <span class="calendario-card-mes">Outubro</span>
                            </div>
                            <hr class="calendario-divisor">
                            <div class="calendario-card-body">
                                <div class="calendario-item">
                                    <span class="calendario-item-label"> Disponibilização do cartão:</span>
                                    <span class="calendario-item-data">23/10/2025</span>
                                </div>
                            <hr class="calendario-divisor">
                                <div class="calendario-item">
                                    <span class="calendario-item-label">Consulta de locais de prova:</span>
                                    <span class="calendario-item-data">23/10/2025</span>
                                </div>
                            <hr class="calendario-divisor">
                                <div class="calendario-item">
                                    <span class="calendario-item-label">Recurso de local de prova:</span>
                                    <span class="calendario-item-data">23/10/2025 - 29/10/2025</span>
                                </div>
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
                            <li><a href="#introducao">Cronograma ENEM 2025</a></li>
                            <li><a href="#">Informações Importantes</a></li>
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
                        <div class="ler-mais ler-mais--enem"><a href="inscricao.php">Ler mais</a></div>
                        <hr>
                    <h4>Redação ENEM</h4>
                        <p>Tudo sobre a redação do ENEM</p>
                        <div class="ler-mais ler-mais--enem"><a href="redacao.php">Ler mais</a></div>
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