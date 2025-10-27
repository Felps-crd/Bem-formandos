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

    <title>Fuvest | Bem Formandos</title>
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
            <?php include __DIR__ . '/sidebar-fuvest.php';?>

            <div class="conteudo">
                 <!-- Introdução -->
                <section id="introducao">
                    <h1 class="titulo titulo--fuvest">
                        <i class="bi bi-info-circle-fill"></i>
                        O QUE É FUVEST
                    </h1>
                    <hr>
                    <p>A Fundação Universitária para o Vestibular (Fuvest) é uma instituição de direito privado, sem fins lucrativos, criada pela Universidade de São Paulo (USP) em 20 de abril de 1976. A Fuvest tem como missão selecionar os candidatos mais qualificados para as vagas oferecidas pela USP, garantindo um processo seletivo justo e transparente.</p>
                    <p>O vestibular da Fuvest é conhecido por sua alta concorrência e pelo rigor de suas provas, que exigem dos candidatos um sólido conhecimento em diversas áreas do saber. Anualmente, milhares de estudantes de todo o Brasil e do exterior buscam uma vaga nos cursos de graduação da USP através deste processo seletivo.</p>
                </section>

                <section id="destaques">
                    <div class="destaques destaques--fuvest">
                        <h2 class="destaques-titulo">Destaques da Fuvest</h2>
                        <div class="destaque-card">
                            <i class="bi bi-graph-up"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Vestibular de Alto Nível</h3>
                                <p class="destaque-texto">Processo seletivo rigoroso e tradicional para ingresso na USP.</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-mortarboard-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Acesso à USP</h3>
                                <p class="destaque-texto">Principal porta de entrada para uma das melhores universidades do Brasil e da América Latina.</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-people-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Inclusão e Equidade</h3>
                                <p class="destaque-texto">Compromisso com políticas de inclusão e ações afirmativas para diversificar o corpo discente.</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-award-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Reconhecimento Nacional</h3>
                                <p class="destaque-texto">Considerado um dos vetibulares mais importantes e concorridos do país.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="como-funciona">
                    <h2 class="como-funciona-titulo">Como Funciona a USP</h2>
                    <p class="como-funciona-texto">A Universidade de São Paulo (USP) é pública e gratuita, sendo uma das mais importantes da América Latina. Criada em 1934, é mantida pelo Governo do Estado de São Paulo e se destaca pela qualidade de ensino, pesquisa e extensão.
                        <ul class="lista-caracteristicas">
                            <li>Ensino: oferece diversos cursos de graduação e pós-graduação gratuitos.</li>
                            <li>Pesquisa: responsável por mais de 20% da produção científica do Brasil.</li>
                            <li>Extensão: promove cursos, eventos e serviços que aproximam a universidade da sociedade.</li>
                        </ul>
                    </p>
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
                            <li><a href="#introducao">O que é Fuvest</a></li>
                            <li><a href="#destaques">Destaques da Fuvest</a></li>
                            <li><a href="#como-funciona">Como Funciona a USP</a></li>
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
                    <h4>Vestibular Fuvest</h4>
                        <p>Tudo sobre o vestibular da Fuvest</p>
                        <div class="ler-mais ler-mais--fuvest"><a href="vestibular.php">Ler mais</a></div>
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