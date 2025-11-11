<?php
include_once("../../assets/php/conexao.php");

$vestibular_id = 1; // ENEM

// Busca taxa
$taxa = null;
if ($stmt = $conexao->prepare("SELECT taxa FROM vestibulares WHERE id = ?")) {
    $stmt->bind_param("i", $vestibular_id);
    $stmt->execute();
    $res = $stmt->get_result();
    if ($row = $res->fetch_assoc()) {
        $taxa = number_format((float)$row['taxa'], 2, ',', '.');
    }
    $stmt->close();
}

// Busca período de inscrições no calendário (titulo contendo "inscr" / "inscrição")
$periodo_inscricoes = null;
if ($stmt = $conexao->prepare("SELECT data_inicio, data_fim FROM calendario WHERE vestibular_id = ? AND (titulo LIKE ? OR titulo LIKE ?) ORDER BY data_inicio ASC LIMIT 1")) {
    $like1 = '%inscr%';
    $like2 = '%inscrição%';
    $stmt->bind_param("iss", $vestibular_id, $like1, $like2);
    $stmt->execute();
    $res = $stmt->get_result();
    if ($row = $res->fetch_assoc()) {
        $inicio = $row['data_inicio'];
        $fim = $row['data_fim'];
        $format = function($d){ return $d ? date('d/m/Y', strtotime($d)) : ''; };
        if ($inicio && $fim) {
            $periodo_inscricoes = $format($inicio) .' - ' .$format($fim);
        } elseif ($inicio) {
            $periodo_inscricoes = $format($inicio);
        }
    }
    $stmt->close();
}
?>
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

    <title>Inscrição Enem | Bem Formandos</title>
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
                        <i class="bi bi-person-check-fill"></i>
                        COMO SE INSCREVER NO ENEM
                    </h1>
                    <hr>
                    <p>Aprenda como fazer sua inscrição no Enem de forma rápida e segura. Siga nosso guia passo a passo e não perca nenhum detalhe importante do processo.</p>
                </section>
                <div class="infos-importantes infos-importantes--enem">
                    <div class="conteudo-infos-importantes">
                        <div class="header-infos-importantes header-infos-importantes--enem">
                            <i class="bi bi-info-circle-fill"></i>
                            <strong class="titulo-infos-importantes titulo-infos-importantes--enem">Informações Importantes</strong>
                        </div>

                        <p class="texto-infos-importantes texto-infos-importantes--enem">
                            <strong class="destaque-texto-infos-importantes destaque-texto-infos-importantes--enem">Período de inscrições:</strong>
                            <?= htmlspecialchars($periodo_inscricoes ?? 'A definir'); ?>
                        </p>

                        <p class="texto-infos-importantes texto-infos-importantes--enem">
                            <strong class="destaque-texto-infos-importantes destaque-texto-infos-importantes--enem">Taxa de inscrição:</strong>
                            R$ <?= htmlspecialchars($taxa ?? '0,00'); ?>
                        </p>

                        <p class="texto-infos-importantes texto-infos-importantes--enem">
                            <strong class="destaque-texto-infos-importantes destaque-texto-infos-importantes--enem">Site oficial:</strong>
                            <a href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem" target="_blank" rel="noopener">enem.inep.gov.br</a>
                        </p>
                    </div>
                </div>
                <section id="requisitos">
                    <h2>Requisitos para Inscrição</h2>
                    <div class="area-cards area-cards--requisitos">
                        <div class="cards card--requisito">
                            <div class="conteudo-card">
                                <span class="icone-info icone-info--enem"><i class="bi bi-person-vcard-fill"></i></span>
                                <h3 class="titulo-info">Documento de Identidade</h3>
                                <p class="texto-info">CPF válido e documento oficial com foto.</p>
                            </div>
                        </div>
                        <div class="cards card--requisito">
                            <div class="conteudo-card">
                                <span class="icone-info icone-info--enem"><i class="bi bi-envelope-fill"></i></span>
                                <h3 class="titulo-info">E-mail Válido</h3>
                                <p class="texto-info">E-mail ativo para receber confirmações e comunicados importantes.</p>
                            </div>
                        </div>
                        <div class="cards card--requisito">
                            <div class="conteudo-card">
                                <span class="icone-info icone-info--enem"><i class="bi bi-telephone-fill"></i></span>
                                <h3 class="titulo-info">Telefone</h3>
                                <p class="texto-info">Número de telefone para contato em caso de necessidade</p>
                            </div>
                        </div>
                        <div class="cards card--requisito">
                            <div class="conteudo-card">
                                <span class="icone-info icone-info--enem"><i class="bi bi-credit-card-fill"></i></span>
                                <h3 class="titulo-info">Forma de Pagamento</h3>
                                <p class="texto-info">Cartão de crédito/débito ou boleto bancário para pagamento da taxa</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="passo-a-passo">
                    <h2>Passo a Passo da Inscrição</h2>
                    <div class="area-cards">
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">1</span>
                                <h3 class="titulo-card-passo">Acesse o Site Oficial</h3>
                            </div>
                            <p class="texto-card-passo">Entre no site oficial do Enem: <strong><a class="link-enem" href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem">enem.inep.gov.br</a></strong></p>
                            <p class="texto-card-passo">Acesse a Página do Participante e faça login com sua conta gov.br.</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">2</span>
                                <h3 class="titulo-card-passo">Inicie a Inscrição</h3>
                            </div>
                            <p class="texto-card-passo">Localize e clique no botão de Inscrição na Página do Participante</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">3</span>
                                <h3 class="titulo-card-passo">Preencha os Dados Pessoais</h3>
                            </div>
                            <p class="texto-card-passo">Informe seus dados pessoais com atenção</p>
                            <p class="texto-card-passo"><strong>Dados obrigatórios:</strong></p>
                            <ul class="lista-dados">
                                <li class="item-dados">Nome completo (conforme documento)</li>
                                <li class="item-dados">CPF</li>
                                <li class="item-dados">Data de nascimento</li>
                                <li class="item-dados">Sexo</li>
                                <li class="item-dados">Estado civil</li>
                                <li class="item-dados">Cor/raça</li>
                            </ul>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">4</span>
                                <h3 class="titulo-card-passo">Informe os Dados de Contato</h3>
                            </div>
                            <p class="texto-card-passo">Preencha suas informações de contato e endereço</p>
                            <ul class="lista-dados">
                                <li class="item-dados">E-mail: Use um e-mail que você acessa regularmente</li>
                                <li class="item-dados">Telefone: Celular com DDD</li>
                                <li class="item-dados">Endereço completo: CEP, rua, número, bairro, cidade e estado</li>
                            </ul>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">5</span>
                                <h3 class="titulo-card-passo">Dados Escolares</h3>
                            </div>
                            <p class="texto-card-passo">Informe sua situação escolar atual</p>
                            <ul class="lista-dados">
                                <li class="item-dados">Tipo de escola: Pública ou privada</li>
                                <li class="item-dados">Situação: Já concluiu, está cursando ou vai concluir em 2025</li>
                            </ul>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">6</span>
                                <h3 class="titulo-card-passo">Atendimento Especializado</h3>
                            </div>
                            <p class="texto-card-passo">Solicite atendimento especial se necessário</p>
                            <p class="texto-card-passo"><strong>Tipos de atendimentos disponíveis:</strong></p>
                            <ul class="lista-dados">
                                <li class="item-dados">Prova em Braille</li>
                                <li class="item-dados">Prova com letra ampliada</li>
                                <li class="item-dados">Intérprete de Libras</li>
                                <li class="item-dados">Ledor</li>
                                <li class="item-dados">Transcritor</li>
                                <li class="item-dados">Tempo adicional</li>
                                <li class="item-dados">Sala de fácil acesso</li>
                            </ul>
                            <div class="card-info card-info--enem">
                                <div class="conteudo-card-info">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <p class="texto-card-info texto-card-info--enem">Você precisará enviar a documentação comprobatória</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">7</span>
                                <h3 class="titulo-card-passo">Tratamento pelo nome social</h3>
                            </div>
                            <p class="texto-card-passo">Solicite o uso do nome social se desejar ser identificado dessa forma no exame.</p>
                            <ul class="lista-dados">
                                <li class="item-dados">Destinado a pessoas transgênero e travestis.</li>
                                <li class="item-dados">É necessário anexar documento que comprove o uso do nome social</li>
                                <li class="item-dados">O nome social será usado no Cartão de Confirmação e no dia da aplicação da prova.</li>
                            </ul>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">8</span>
                                <h3 class="titulo-card-passo">Língua Estrangeira</h3>
                            </div>
                            <p class="texto-card-passo">Escolha entre Inglês ou Espanhol</p>
                            <ul class="lista-dados">
                                <li class="item-dados">A escolha não pode ser alterada após a inscrição</li>
                                <li class="item-dados">Considere sua afinidade com cada idioma</li>
                            </ul>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">9</span>
                                <h3 class="titulo-card-passo">Questionário Socioeconômico</h3>
                            </div>
                            <p class="texto-card-passo">Responda as questões sobre sua situação socioeconômica</p>
                            <ul class="lista-dados">
                                <li class="item-dados">Informações sobre renda familiar</li>
                                <li class="item-dados">Escolaridade dos pais</li>
                                <li class="item-dados">Condições de moradia</li>
                                <li class="item-dados">Acesso a bens e serviços</li>
                            </ul>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">10</span>
                                <h3 class="titulo-card-passo">Revisão e Confirmação</h3>
                            </div>
                            <p class="texto-card-passo">Revise todos os dados antes de finalizar</p>
                            <ul class="lista-dados">
                                <li class="item-dados">Confira todos os dados pessoais</li>
                                <li class="item-dados">Verifique o e-mail e telefone</li>
                                <li class="item-dados">Confirme a língua estrangeira escolhida</li>
                                <li class="item-dados">Revise as solicitações de atendimento especial e nome social</li>
                            </ul>
                            <div class="card-info card-info--enem">
                                <div class="conteudo-card-info">
                                    <i class="bi bi-exclamation-triangle-fill"></i>
                                    <p class="texto-card-info texto-card-info--enem">Após confirmar, alguns dados não poderão ser alterados</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--enem">11</span>
                                <h3 class="titulo-card-passo">Pagamento da Taxa</h3>
                            </div>
                            <p class="texto-card-passo">Efetue o pagamento da taxa de inscrição</p>
                            <p class="texto-card-passo"><strong>Formas de pagamento:</strong></p>
                            <ul class="lista-dados">
                                <li class="item-dados">Boleto bancário</li>
                                <li class="item-dados">Cartão de crédito</li>
                                <li class="item-dados">Pix</li>
                            </ul>
                            <div class="card-info card-info--enem">
                                <div class="conteudo-card-info">
                                    <i class="bi bi-lightbulb-fill"></i>
                                    <p class="texto-card-info texto-card-info--enem">Guarde o comprovante de pagamento</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="isencao">
                    <h2>Isenção da Taxa de Inscrição</h2>
                    <div class="solicita">
                        <h3 class="titulo-isencao">Quem tem Direito à Isenção?</h3>
                        <ul class="lista-isencao">
                            <li class="item-lista-isencao">Estudantes de escola pública cursando o 3° ano do ensino médio</li>
                            <li class="item-lista-isencao">Estudantes de escola pública que concluíram o ensino médio em anos anteriores</li>
                            <li class="item-lista-isencao">Pessoas em situação de vulnerabilidade socioeconômica</li>
                            <li class="item-lista-isencao">Membros de família de baixa renda inscritos no CadÚnico</li>
                        </ul>
                    </div>
                    <hr class="linha-isencao">
                    <div class="solicita">
                        <h3 class="titulo-isencao">Como Solicitar a Isenção?</h3>
                        <ol class="lista-isencao">
                            <li class="item-lista-isencao">Acesso o site do Enem no período específico</li>
                            <li class="item-lista-isencao">Clique em “Solicitar Isenção”</li>
                            <li class="item-lista-isencao">Preencha os dados solicitados</li>
                            <li class="item-lista-isencao">Envie a documentação necessária</li>
                            <li class="item-lista-isencao">Aguarde o resultado da análise</li>
                        </ol>
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
                            <li><a href="#requisitos">Requisitos</a></li>
                            <li><a href="#passo-a-passo">Passo a Passo</a></li>
                            <li><a href="#isencao">Isenção de Taxa</a></li>
                        </ul>
                </div>
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-bookmark-fill"></i>
                        <h3>Conteúdo Relacionado</h3>
                    </div>
                    <hr>
                    <h4>Calendário Enem</h4>
                        <p>Todas as datas importantes do processo</p>
                        <div class="ler-mais ler-mais--enem"><a href="calendario.php">Ler mais</a></div>
                        <hr>
                    <h4>Redação Enem</h4>
                        <p>Tudo sobre a redação do Enem</p>
                        <div class="ler-mais ler-mais--enem"><a href="redacao.php">Ler mais</a></div>
                </div>
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-lightbulb-fill"></i>
                        <h3>Dicas Importantes</h3>
                    </div>
                    <hr>
                    <div class="lista-dicas">
                        <p class="item-lista-dicas"><i class="bi bi-check"></i>Faça a inscrição nos primeiros dias, com calma e atenção</p>
                        <p class="item-lista-dicas"><i class="bi bi-check"></i>Use conexão estável de internet</p>
                        <p class="item-lista-dicas"><i class="bi bi-check"></i>Confira todos os dados antes de enviar</p>
                        <p class="item-lista-dicas"><i class="bi bi-check"></i>Guarde o comprovante de pagamento e o número de inscrição</p>
                    </div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>