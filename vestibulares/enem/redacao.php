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

    <title>Redação Enem | Bem Formandos</title>
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
                    <h1 class="titulo titulo--enem"><i class="bi bi-pen-fill"></i>REDAÇÃO</h1>
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
                                    <span class="dot dot--enem">1</span>
                                        <h3>Introdução</h3>
                                    <p>Apresentação do tema e da tese que será defendida.</p>
                                </div>
                                <div class="card-estrutura">
                                    <span class="dot dot--enem">2</span>
                                        <h3>Desenvolvimento</h3>
                                        <p>Dois parágrafos com argumentos, dados ou exemplos que sustentem a tese.</p>
                                </div>
                                <div class="card-estrutura">
                                    <span class="dot dot--enem">3</span>
                                        <h3>Conclusão</h3>
                                    <p>Retomada da tese e proposta de intervenção detalhada e viável.</p>
                                </div>
                            </div>
                    </section>
                        
                
                <section id="criterios">
                    <h2>Critérios de Avaliação</h2>
                    <p>A redação do Enem é avaliada com base em cinco competências, cada uma valendo até 200 pontos:</p>
                    <div class="area-criterios">
                        <div class="card-criterio">
                            <span class="numero-criterio">C1</span>
                            <h3>Domínio da Norma Culta</h3>
                            <p>Demonstrar domínio da modalidade escrita formal da língua portuguesa.</p>
                        </div>
                        <div class="card-criterio">
                            <span class="numero-criterio">C2</span>
                            <h3>Compreensão do Tema</h3>
                            <p>Compreender a proposta de redação e aplicar conceitos das várias áreas de conhecimento.</p>
                        </div>
                        <div class="card-criterio">
                            <span class="numero-criterio">C3</span>
                            <h3>Organização das Informações</h3>
                            <p>Selecionar, relacionar, organizar e interpretar informações em defesa da tese.</p>
                        </div>
                        <div class="card-criterio">
                            <span class="numero-criterio">C4</span>
                            <h3>Mecanismos Linguísticos</h3>
                            <p>Uso de palavras e expressões que ligam as ideias, estabelecendo relações lógicas e progressão do raciocínio.</p>
                        </div>
                        <div class="card-criterio">
                            <span class="numero-criterio">C5</span>
                            <h3>Proposta de Intervenção</h3>
                            <p>Elaborar proposta de intervenção para o problema abordado, respeitando os direitos humanos.</p>
                        </div>
                    </div>
                </section>

                <section id="erros">
                    <h2>Erros mais Comuns</h2>
                    <p>Muitos candidatos perdem pontos preciosos por descuidos que poderiam ser evitados. Conheça os erros mais frequentes na redação do Enem e confira como não repetir essas falhas.</p>
                    <div class="cards-erros-dicas">
                        <div class="erros --erros-zeram">
                            <span class="titulo-erros">
                                <i class="bi bi-x-circle-fill"></i>
                                <h4 class="titulo-cards-coloridos">Que Zeram</h4>
                            </span>
                                <ul class="lista lista--erros">
                                    <li>Fuga total do tema</li>
                                    <li>Menos de 7 linhas</li>
                                    <li>Outro gênero textual</li>
                                    <li>Desrespeito aos direitos humanos</li>
                                    <li>Cópia dos textos motivadores</li>
                                </ul>
                        </div>
                        <div class="erros --erros-reduzem">
                            <span class="titulo-erros">
                                <i class="bi bi-exclamation-circle-fill"></i>
                                <h4 class="titulo-cards-coloridos">Que Reduzem Nota</h4>
                            </span>
                                <ul class="lista lista--erros">
                                    <li>Uso de linguagem coloquial ou gírias</li>
                                    <li>Problemas de coesão e coerência</li>
                                    <li>Argumentação fraca, sem repertório</li>
                                    <li>Conclusão sem proposta clara</li>
                                    <li>Erros gramaticais e ortográficos</li>
                                </ul>
                        </div>
                    </div>
                </section>
                <section id="dicas-redacao">
                    <h2>Dicas</h2>
                    <p>Além de evitar erros, é importante adotar estratégias de treino que ajudam a melhorar a escrita e ganhar segurança para o dia da prova. Confira algumas orientações práticas:</p>
                    <div class="cards-erros-dicas">
                        <div class="dicas dicas--treinar">
                            <span class="titulo-dicas">
                                <i class="bi bi-lightbulb-fill"></i>
                                <h4 class="titulo-cards-coloridos">Para Treinar</h4>
                            </span>
                                <ul class="lista lista--dicas">
                                    <li>Escreva uma redação por semana</li>
                                    <li>Leia redações nota 1000</li>
                                    <li>Estude atualidades para ampliar repertório</li>
                                    <li>Use cronômetro para simular a prova</li>
                                </ul>
                        </div>
                        <div class="dicas dicas--revisar">
                            <span class="titulo-dicas">
                                <i class="bi bi-check-circle-fill"></i>
                                <h4 class="titulo-cards-coloridos">Antes de Entregar</h4>
                            </span>
                                <ul class="lista lista--dicas">
                                    <li>Revisar ortografia e gramática</li>
                                    <li>Checar se o tema foi atendido</li>
                                    <li>Garantir coesão entre parágrafos</li>
                                    <li>Apresentar proposta de intervenção completa</li>
                                </ul>
                        </div>
                    </div>
                </section>
                <section id="temas-anteriores">
                    <h2>Temas já Cobrados no ENEM</h2>
                    <p>Analisar os temas das edições anteriores é uma ótima forma de se preparar. Assim, você entende como a banca propõe os assuntos e consegue treinar sua escrita de forma mais direcionada</p>
                    <div class="linha-do-tempo">
                        <div class="linha-do-tempo__item">
                            <div class="circulo"></div>
                            <div class="ano">2022</div>
                            <div class="tema">Valorização de comunidades e povos tradicionais.</div>
                        </div>  
                        <div class="linha-do-tempo__item">
                            <div class="circulo"></div>
                            <div class="ano">2023</div>
                            <div class="tema">Trabalho de cuidado realizado pela mulher.</div>
                        </div>    
                         <div class="linha-do-tempo__item">
                            <div class="circulo"></div>
                            <div class="ano">2024</div>
                            <div class="tema">Desafios para a valorização da herança africana no Brasil</div>
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
                            <li><a href="#estrutura-redacao">Estrutura da redação do ENEM</a></li>
                            <li><a href="#criterios">Critérios de avaliação</a></li>
                            <li><a href="#erros">Erros mais comuns</a></li>
                            <li><a href="#dicas-redacao">Dicas</a></li>
                            <li><a href="#temas-anteriores">Temas já cobrados no ENEM</a></li>
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
                    <h4>Calendário Enem</h4>
                        <p>Todas as datas importantes do processo</p>
                        <div class="ler-mais ler-mais--enem"><a href="redacao.php">Ler mais</a></div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>