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

    <title>Fies | Bem Formandos</title>
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
                        <i class="bi bi-credit-card-fill"></i>
                        FIES
                    </h1>
                    <hr>
                    <p>O FIES é o programa de financiamento estudantil que permite o acesso ao ensino superior em universidades privadas. Entenda como funciona, os tipos de financiamento e como se inscrever.</p>
                </section>
                <section id="explicacao-fies">
                    <h2>O que é Fies</h2>
                    <p>O Fundo de Financiamento Estudantil (FIES) é um programa do Ministério da Educação destinado a financiar a graduação na educação superior de estudantes matriculados em cursos superiores não gratuitos na forma da Lei 10.260/2001.</p>
                    <div class="destaques destaques--enem">
                        <div class="destaque-card">
                            <i class="bi bi-percent"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Financiamento até 100%</h3>
                                <p class="destaque-texto">Possibilidade de financiar até 100% do valor da mensalidade do curso</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-pause-circle-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Carência de 18 meses</h3>
                                <p class="destaque-texto">Periodo de carência após a conclusão do curso para começar a pagar</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-arrow-down-circle-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Juros Baixos</h3>
                                <p class="destaque-texto">Taxa de juros zero para renda até 3 salários mínimos per capita</p>
                            </div>
                        </div>
                        <div class="destaque-card">
                            <i class="bi bi-calendar-plus-fill"></i>
                            <div class="destaque-conteudo">
                                <h3 class="destaque-titulo">Prazo Estendido</h3>
                                <p class="destaque-texto">Até 3 vezes o período de duração do curso para quitar o financiamento</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="modalidades">
                    <h2>Modalidades do Fies</h2>
                    <div class="area-cards--bolsas">
                        <div class="card-tipo card--bolsa">
                            <div class="header-card header-card--bolsa">0% a.a.</div>
                           <div class="titulo-card-tipo">FIES Social</div>
                            <p class="texto-card-tipo texto-card-bolsa"><strong>Quem pode participar</strong></p>
                            <p class="texto-card-tipo texto-card-fies">Quem possui renda familiar per capita de até 3 salários mínimos.</p>
                            <p class="texto-card-tipo texto-card-fies">Estudantes que tenham feito o ENEM a partir de 2010, com:</p>
                            <ul class="lista-card">
                                <li>Nota mínima de 450 pontos na média das provas.</li>
                                <li>Nota maior que zero na redação.</li>
                            </ul>
                        </div>
                        <div class="card-tipo card--bolsa">
                            <div class="header-card header-card--bolsa">Variável</div>
                           <div class="titulo-card-tipo">P-FIES</div>
                            <p class="texto-card-tipo texto-card-bolsa"><strong>Critérios de participação</strong></p>
                            <p class="texto-card-tipo texto-card-fies">Quem possui renda familiar per capita de até 5 salários mínimos.</p>
                            <p class="texto-card-tipo texto-card-fies">Estudantes que tenham feito o ENEM a partir de 2010, com:</p>
                            <ul class="lista-card">
                                <li>Nota mínima de 450 pontos na média das provas.</li>
                                <li>Nota maior que zero na redação.</li>
                            </ul>
                            <p class="texto-card-tipo texto-card-fies">Financiamento com bancos privados</p>
                        </div>
                        <div class="card-aviso card-aviso--prouni">
                            <h4>Importante:</h4>
                            <p>Bolsistas parciais do PROUNI podem solicitar financiamento do restante da mensalidade atraves do FIES.</p>
                        </div>
                    </div>
                </section>
                <section id="como-funciona">
                    <h2>Como Funciona o Fies</h2>
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
                                <h3 class="titulo-card-passo">Inscrição no Fies</h3>
                            </div>
                            <p class="texto-card-passo">Faça sua inscrição no site oficial do FIES durante o período de inscrições, que acontece semestralmente.</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">3</span>
                                <h3 class="titulo-card-passo">Pré-seleção</h3>
                            </div>
                            <p class="texto-card-passo">Aguarde o resultado da pré-seleção. Se aprovado, você terá um prazo para complementar as informaçōes.</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">4</span>
                                <h3 class="titulo-card-passo">Complementação de Informações</h3>
                            </div>
                            <p class="texto-card-passo">Complete as informações no SisFIES e envie a documentação necessária.</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">5</span>
                                <h3 class="titulo-card-passo">Validaçāo das Informaçōes</h3>
                            </div>
                            <p class="texto-card-passo">A instituição de ensino valida suas informações e documentos.</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">6</span>
                                <h3 class="titulo-card-passo">Contratação do Financiamento</h3>
                            </div>
                            <p class="texto-card-passo">Compareça ao banco para assinar o contrato de financiamento.</p>
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
                    </div>
                </section>
                <section id="pagamento">
                    <h2>Como Funciona o Pagamento</h2>
                        <div class="area-cards area-cards--pagamento">
                            <div class="card-tipo">
                                <div class="header-card">
                                    <i class="bi bi-mortarboard-fill"></i>
                                    <h5 class="titulo-pagamento">Fase de Utilização</h5>
                                    <h6 class="subtitulo-pagamento">Durante o curso</h6>
                                </div>
                                <p class="texto-card-tipo texto-card-tipo--pagamento"><strong>O que pagar:</strong> Apenas os juros trimestrais (se houver)</p>
                                <p class="texto-card-tipo texto-card-tipo--pagamento"><strong>FIES Social:</strong> Não há pagamento durante o curso</p>
                                <p class="texto-card-tipo texto-card-tipo--pagamento"><strong>P-FIES:</strong> Pagamento conforme acordo com o banco</p>
                            </div>
                            <div class="card-tipo">
                                <div class="header-card">
                                    <i class="bi bi-pause-fill"></i>
                                    <h5 class="titulo-pagamento">Fase de Carência</h5>
                                    <h6 class="subtitulo-pagamento">18 meses após formatura</h6>
                                </div>
                                <p class="texto-card-tipo texto-card-tipo--pagamento"><strong>O que pagar:</strong> Valor máximo de R$ 150,00 por mês</p>
                                <p class="texto-card-tipo texto-card-tipo--pagamento"><strong>Objetivo:</strong> Tempo para se estabelecer no mercado de trabalho</p>
                                <p class="texto-card-tipo texto-card-tipo--pagamento"><strong>Flexibilidade:</strong> Pode antecipar o pagamento se desejar</p>
                            </div>
                            <div class="card-tipo">
                                <div class="header-card">
                                    <i class="bi bi-cash"></i>
                                    <h5 class="titulo-pagamento">Fase de Amortização</h5>
                                    <h6 class="subtitulo-pagamento">Até 3x o período do curso</h6>
                                </div>
                                <p class="texto-card-tipo texto-card-tipo--pagamento"><strong>O que pagar:</strong> Parcelas do saldo devedor + juros</p>
                                <p class="texto-card-tipo texto-card-tipo--pagamento"><strong>Prazo:</strong> Até 3 vezes a duração do curso financiado</p>
                                <p class="texto-card-tipo texto-card-tipo--pagamento"><strong>Valor mínimo:</strong> R$ 150,00 por mês</p>
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
                            <li><a href="#introducao">O que é o Fies</a></li>
                            <li><a href="#modalidades">Modalidades</a></li>
                            <li><a href="#como-funciona">Como funciona</a></li>
                            <li><a href="#documentos">Documentos necessários</a></li>
                            <li><a href="#pagamento">Como funciona o pagamento</a></li>
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
                        <p class="item-lista-dicas"><i class="bi bi-check"></i>Organize um Fiador</p>
                        <p class="item-lista-dicas"><i class="bi bi-check"></i>Melhore sua Nota do Enem</p>
                        <p class="item-lista-dicas"><i class="bi bi-check"></i>Planeje o Pagamento</p>
                    </div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>