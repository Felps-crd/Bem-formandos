<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/estilos/style.css">
    <link rel="stylesheet" href="../../assets/estilos/style-vestibulares.css">
    <link rel="stylesheet" href="../../assets/estilos/sidebars.css">
    <link rel="stylesheet" href="../../assets/estilos/style-provao.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Classificação Provão Paulista | Bem Formandos</title>
</head>
<body>
    <div class="container-principal">
        <!-- inicio cabeçalho -->
        <?php include_once("../../includes/header.php"); ?>
        <!-- fim cabeçalho -->
        <main class="main-vestibulares">
            <?php include __DIR__ . '/sidebar-provao.php';?>

            <div class="conteudo">
                <section id="introducao">
                    <h1 class="titulo titulo--provao">
                        <i class="bi bi-award-fill"></i>
                        SISTEMA DE CLASSIFICAÇÃO
                    </h1>
                    <hr>
                    <p>O sistema de classificação do Provão Paulista Seriado é baseado em grupos de candidatos e distribuição de vagas por cotas. Cada instituição de ensino superior participante segue as mesmas diretrizes gerais.</p>
                </section>
                <section>
                    <h2>Grupos de Candidatos</h2>
                    <p>Os candidatos são divididos em grupos conforme sua origem educacional, e as vagas são distribuídas de forma a garantir oportunidades equitativas para diferentes contextos.</p>
                    <div class="container-tabs">
                        <div class="tabs">
                            <div class="tabs-principal">
                                <div class="active-tab"></div>
                                <div class="tabs-tab">Grupo A</div>
                                <div class="tabs-tab">Grupo B</div>
                                <div class="tabs-tab">Grupo C</div>
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
                            <li><a href="#">#</a></li>
                            <li><a href="#">#</a></li>
                            <li><a href="#">#</a></li>
                        </ul>
                </div>
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-bookmark-fill"></i>
                        <h3>Conteúdo Relacionado</h3>
                    </div>
                    <hr>
                    <h4>Como se inscrever no Provão Paulista</h4>
                        <p>Passo a passo para fazer sua inscrição</p>
                        <div class="ler-mais ler-mais--provao"><a href="inscricao.php">Ler mais</a></div>
                        <hr>
                    <h4>Vestibular Provão Paulista</h4>
                        <p>Tudo sobre o vestibular do Provão Paulista</p>
                        <div class="ler-mais ler-mais--provao"><a href="vestibular.php">Ler mais</a></div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>