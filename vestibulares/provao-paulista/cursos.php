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

    <title>Universidades Provão Paulista | Bem Formandos</title>
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
                        <i class="bi bi-building-fill"></i>
                        INSTITUIÇÕES PARTICIPANTES
                    </h1>
                    <hr>
                    <p>Conheça as instituições que aceitam a nota do Provão Paulista.</p>
                </section>
                <section id="faculdades">
                    <article class="faculdade">
                        <div class="header-faculdade">
                            <i class="icone-faculdade icone-faculdade--usp bi bi-globe"></i>
                            <h3 class="titulo-faculdade">USP</h3>
                            <p class="subtitulo-faculdade">Universidade de São Paulo</p>
                            <span class="num-vagas num-vagas--usp">1.500 vagas</span>
                        </div>
                        <div class="conteudo-faculdade">
                            <p class="descricao-faculdade">A maior universidade de pesquisa do Brasil, consolidada como referência acadêmica e científica na América Latina e no mundo.</p>
                            <div class="nota-corte-faculdade">
                                <h4>Nota mínima de corte</h4>
                                <p>22 acertos</p>
                            </div>
                        </div>
                    </article>
                    <article class="faculdade">
                        <div class="header-faculdade">
                            <i class="icone-faculdade icone-faculdade--unicamp bi bi-lightbulb"></i>
                            <h3 class="titulo-faculdade">UNICAMP</h3>
                            <p class="subtitulo-faculdade">Universidade Estadual de Campinas</p>
                            <span class="num-vagas num-vagas--unicamp">327 vagas</span>
                        </div>
                        <div class="conteudo-faculdade">
                            <p class="descricao-faculdade">Universidade de excelência em pesquisa e ensino, responsável por 8% de toda a pesquisa acadêmica realizada no Brasil.</p>
                            <div class="nota-corte-faculdade">
                                <h4>Nota mínima de corte</h4>
                                <p>22 acertos</p>
                            </div>
                        </div>
                    </article>
                    <article class="faculdade">
                        <div class="header-faculdade">
                            <i class="icone-faculdade icone-faculdade--unesp bi bi-building"></i>
                            <h3 class="titulo-faculdade">UNESP</h3>
                            <p class="subtitulo-faculdade">Universidade Estadual Paulista</p>
                            <span class="num-vagas num-vagas--unesp">934 vagas</span>
                        </div>
                        <div class="conteudo-faculdade">
                            <p class="descricao-faculdade">Universidade multicampi com presença em diversas regiões de São Paulo, oferecendo ampla variedade de cursos de graduação.</p>
                            <div class="nota-corte-faculdade">
                                <h4>Nota mínima de corte</h4>
                                <p>22 acertos</p>
                            </div>
                        </div>
                    </article>
                    <article class="faculdade">
                        <div class="header-faculdade">
                            <i class="icone-faculdade icone-faculdade--univesp bi bi-laptop"></i>
                            <h3 class="titulo-faculdade">UNIVESP</h3>
                            <p class="subtitulo-faculdade">Universidade Virtual do Estado de São Paulo</p>
                            <span class="num-vagas num-vagas--univesp">2.956 vagas</span>
                        </div>
                        <div class="conteudo-faculdade">
                            <p class="descricao-faculdade">Universidade de educação a distância, oferecendo acesso ao ensino superior de qualidade para toda a população paulista.</p>
                            <div class="nota-corte-faculdade">
                                <h4>Nota mínima de corte</h4>
                                <p>Sem nota mínima (não zerar)</p>
                            </div>
                        </div>
                    </article>
                    <article class="faculdade">
                        <div class="header-faculdade">
                            <i class="icone-faculdade icone-faculdade--fatec bi bi-gear"></i>
                            <h3 class="titulo-faculdade">FATEC</h3>
                            <p class="subtitulo-faculdade">Faculdades de Tecnologia do Centro Paula Souza</p>
                            <span class="num-vagas num-vagas--fatec">10.000 vagas</span>
                        </div>
                        <div class="conteudo-faculdade">
                            <p class="descricao-faculdade">Rede de faculdades técnicas que oferece formação profissional de qualidade em tecnologia e gestão, com forte conexão com o mercado.</p>
                            <div class="nota-corte-faculdade">
                                <h4>Nota mínima de corte</h4>
                                <p>Sem nota mínima (não zerar)</p>
                            </div>
                        </div>
                    </article>
                </section>
                <section id="informacoes">
                    <h2>Informações Importantes</h2>
                    <div class="informacoes">
                        <div class="informacao">
                            <h3 class="titulo-infos">Distribuição de Vagas por Semestre</h3>
                            <p>No primeiro semestre, as vagas são destinadas apenas à USP, Unesp e Unicamp, além de parte delas para as Fatecs. As vagas da Univesp são distribuídas conforme calendário específico.</p>
                        </div>
                        <div class="informacao">
                            <h3 class="titulo-infos">Escolha de Cursos</h3>
                            <p>Cada candidato pode escolher até 4 cursos diferentes, em qualquer universidade participante. A escolha é feita através do portal da Vunesp.</p>
                        </div>
                        <div class="informacao">
                            <h3 class="titulo-infos">Processo de Seleção</h3>
                            <p>Os candidatos são classificados por nota final dentro de seu grupo (A, B ou C) e categoria de cota (ampla concorrência, social, racial ou combinada). As vagas são preenchidas conforme a distribuição estabelecida, com possibilidade de 3 chamadas principais.</p>
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
                            <li><a href="#faculdades">Instituições Participantes</a></li>
                            <li><a href="#informacoes">Informações Importantes</a></li>
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