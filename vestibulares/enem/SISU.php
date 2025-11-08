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

    <title>Sisu | Bem Formandos</title>
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
                        <i class="bi bi-award-fill"></i>
                        SISU
                    </h1>
                    <hr>
                    <p>O Sisu é o sistema que permite o acesso às universidades públicas brasileiras usando a nota do Enem. Entenda como funciona, quando se inscrevere como aumentar suas chances de aprovação.</p>
                </section>
                <section id="explicacao-sisu">
                    <h2>O que é Sisu?</h2>
                    <p>O Sistema de Seleção Unificada (SISU) é um sistema informatizado do Ministério da Educação (MEC) por meio do qual instituições públicas de ensino superior oferecem vagas para candidatos participantes do Enem.</p>
                    <div class="area-cards area-cards--requisitos">
                        <div class="cards">
                            <div class="conteudo-card">
                                <span class="icone-info"><i class="bi bi-mortarboard-fill"></i></span>
                                <h3 class="titulo-info">Universidades Públicas</h3>
                                <p class="texto-info">Acesso a mais de 120 instituições públicas de ensino superior em todo o Brasil</p>
                            </div>
                        </div>
                        <div class="cards">
                            <div class="conteudo-card">
                                <span class="icone-info"><i class="bi bi-sort-numeric-up-alt"></i></span>
                                <h3 class="titulo-info">Notas de Corte</h3>
                                <p class="texto-info">Sistema transparente baseado na nota do ENEM e concorrência em tempo real</p>
                            </div>
                        </div>
                        <div class="cards">
                            <div class="conteudo-card">
                                <span class="icone-info"><i class="bi bi-people-fill"></i></span>
                                <h3 class="titulo-info">Cotas Sociais</h3>
                                <p class="texto-info">Reserva de vagas para estudantes de escolas públicas, negros, pardos e indígenas</p>
                            </div>
                        </div>
                        <div class="cards">
                            <div class="conteudo-card">
                                <span class="icone-info"><i class="bi bi-phone-fill"></i></span>
                                <h3 class="titulo-info">Acesso Digital</h3>
                                <p class="texto-info">Inscrições e acompanhamento totalmente online, disponível 24 horas por dia</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="como-funciona">
                    <h2>Como Funciona o Sisu?</h2>
                    <div class="area-cards">
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">1</span>
                                <h3 class="titulo-card-passo">Faça o Enem</h3>
                            </div>
                            <p class="texto-card-passo">Participe do Enem e obtenha sua nota. Você precisa ter feito o exame no ano anterior ou no ano atual.</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">2</span>
                                <h3 class="titulo-card-passo">Aguarde a Abertura</h3>
                            </div>
                            <p class="texto-card-passo">O Sisu abre duas vezes por ano: no primeiro semestre (janeiro/fevereiro) e no segundo semestre (junho/julho).</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">3</span>
                                <h3 class="titulo-card-passo">Escolha os Cursos</h3>
                            </div>
                            <p class="texto-card-passo">Selecione até 2 opções de curso, em ordem de preferência. Você pode alterar suas escolhas durante o período de inscrição.</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">4</span>
                                <h3 class="titulo-card-passo">Acompanhe as Notas de Corte</h3>
                            </div>
                            <p class="texto-card-passo">As notas de corte são atualizadas diariamente. Monitore sua posição e ajuste suas escolhas se necessário</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">5</span>
                                <h3 class="titulo-card-passo">Resultado e Matrícula</h3>
                            </div>
                            <p class="texto-card-passo">Se aprovado, você deve fazer a matrícula na instituição dentro do prazo estabelecido.</p>
                        </div>
                </section>
                <section id="requisito">
                    <h2>Requisitos para Participar</h2>
                    <div class="requisitos">
                        <div class="requisito">
                            <div class="titulo-requisito">
                                <i class="bi bi-check-circle-fill"></i>
                                <h3>Ter participado do Enem</h3>
                            </div>
                            <p class="texto-requisito">É necessário ter feito edições anteriores do Enem (a partir de 2010).</p>
                        </div>
                        <div class="requisito">
                            <div class="titulo-requisito">
                                <i class="bi bi-check-circle-fill"></i>
                                <h3>Não ter zerado a redação</h3>
                            </div>
                            <p class="texto-requisito">Candidatos que zeraram a redação do Enem não podem participar do Sisu.</p>
                        </div>
                        <div class="requisito">
                            <div class="titulo-requisito">
                                <i class="bi bi-check-circle-fill"></i>
                                <h3>Ter concluído o ensino médio</h3>
                            </div>
                            <p class="texto-requisito">É necessário ter concluído ou estar concluindo o ensino médio.</p>
                        </div>
                    </div>
                </section>
                <section id="cotas">
                    <h2>Sistema de Cotas</h2>
                    <div class="card-lei">
                        <p>A Lei de Cotas (Lei nº 12.711/2012, atualizada pela Lei nº 14.723/2023) garante que 50% das vagas das universidades e institutos federais sejam reservadas para estudantes que cursaram integralmente o ensino médio em escolas públicas.</p>
                    </div>
                    <div class="area-cards-tipo area-cards--cotas">
                        <div class="card-tipo card-cota">
                            <div class="header-card header-card--cota">50%</div>
                            <div class="titulo-card-tipo">Ampla Concorrência</div>
                            <p class="texto-card-tipo texto-card--cota"> Vagas abertas para todos os candidatos, independente da origem escolar</p>
                        </div>
                        <div class="card-tipo card-cota">
                            <div class="header-card header-card--cota">50%</div>
                            <div class="titulo-card-tipo">Escola Pública</div>
                            <p class="texto-card-tipo texto-card-cota">Vagas destinadas a quem cursou todo o ensino médio em escola pública.</p>
                            <p class="texto-card-tipo texto-card-cota">Dentro desse grupo, há subdivisões:</p>
                            <ul class="lista-card">
                                <li>Baixa Renda: renda familiar per capita de até 1 salário mínimo.</li>
                                <li>Etnia: vagas específicas para Pretos, Pardos, Indígenas, Quilombolas.</li>
                                <li>Pessoas com Deficiência.</li>
                                <li>Sem critério adicional: apenas egressos de escola pública.</li>
                            </ul>
                            <p class="texto-card-tipo texto-card-cota">A proporção dessas vagas varia conforme os dados populacionais do IBGE do estado da instituição.</p>
                        </div>
                        <div class="card-aviso card-aviso--sisu">
                            <h4>Importante:</h4>
                            <p>Todos os candidatos participam primeiro da Ampla Concorrência. Se não forem aprovados, concorrem automaticamente dentro da sua categoria de cota.</p>
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
                            <li><a href="#introducao">O que é Sisu</a></li>
                            <li><a href="#como-funciona">Como funciona</a></li>
                            <li><a href="#requisito">Requisitos para participar</a></li>
                            <li><a href="#cotas">Sistema de cotas</a></li>
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
                    <h4>PROUNI</h4>
                        <p>Tudo sobre o Prouni</p>
                        <div class="ler-mais ler-mais--enem"><a href="prouni.php">Ler mais</a></div>
                </div>
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-lightbulb-fill"></i>
                        <h3>Dicas Importantes</h3>
                    </div>
                    <hr>
                    <div class="lista-dicas">
                        <p class="item-lista-dicas"><i class="bi bi-check"></i>Pesquise Bem os Cursos</p>
                        <p class="item-lista-dicas"><i class="bi bi-check"></i>Monitore as Notas de Corte</p>
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