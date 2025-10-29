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

    <title>Fatec | Bem Formandos</title>
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
            <?php include __DIR__ . '/sidebar-fatec.php';?>

            <div class="conteudo">
                <section id="introducao">
                    <h1 class="titulo titulo--fatec">
                        <i class="bi bi-info-circle-fill"></i>
                        O QUE É FATEC
                    </h1>
                    <hr>
                    <p>As Faculdades de Tecnologia do Estado de São Paulo (FATEC), vinculadas ao Centro Paula Souza (CPS) e ao Governo do Estado de São Paulo, são instituições públicas de ensino superior reconhecidas pela excelência na formação tecnológica.</p>
                    <p>Com cursos voltados para as demandas do mercado de trabalho, a Fatec prepara profissionais altamente qualificados, oferecendo educação gratuita e de qualidade.</p>
                </section>

                <section id="destaques">
                    <div class="destaques destaques--fatec"> 
                        <h2 class="destaques-titulo">Destaques da Fuvest</h2>
                        <div class="destaque-card">
                            <i class="bi bi-journal-bookmark-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Ensino Público e Gratuito</h3>
                                <p class="destaque-texto">Acesso à educação de qualidade sem mensalidades.</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-laptop-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Foco Tecnológico</h3>
                                <p class="destaque-texto">Cursos alinhados às demandas do mercado de trabalho.</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-briefcase-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Alta Empregabilidade</h3>
                                <p class="destaque-texto">Grande parte dos egressos da Fatec conseguem emprego na área em pouco tempo.</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-award-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Corpo Docente Qualificado</h3>
                                <p class="destaque-texto">Professores com experiência acadêmica e profissional.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="como-funciona">
                    <h2 class="como-funciona-titulo">Como Funciona a Fatec</h2>
                    <p class="como-funciona-texto">A Fatec oferece cursos de graduação tecnológica, com duração média de 2 a 3 anos, ideais para quem busca uma formação rápida e prática.
                        <ul class="lista-caracteristicas">
                            <li>Metodologia aplicada: aulas práticas, laboratórios modernos e integração com empresas.</li>
                            <li>Abrangência: unidades em diversas cidades do Estado de São Paulo.</li>
                            <li>Oportunidades: cursos em áreas como Tecnologia da Informação, Gestão, Produção Industrial, Logística, Saúde e Meio Ambiente.</li>
                        </ul>
                    <p>Graças à forte conexão com o setor produtivo, os alunos encontram excelentes oportunidades de inserção profissional logo após a graduação.</p>
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
                            <li><a href="#introducao">O que é Fatec</a></li>
                            <li><a href="#destaques">Destaques da Fatec</a></li>
                            <li><a href="#como-funciona">Como Funciona a Fatec</a></li>
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
                    <h4>Vestibular Fatec</h4>
                        <p>Tudo sobre o vestibular da Fatec</p>
                        <div class="ler-mais ler-mais--fatec"><a href="vestibular.php">Ler mais</a></div>
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