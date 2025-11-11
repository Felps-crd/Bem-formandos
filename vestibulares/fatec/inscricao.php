<?php
include_once("../../assets/php/conexao.php");

$vestibular_id = 1; // ENEM --- TROCAR POR FATEC!!

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
    <link rel="stylesheet" href="../../assets/estilos/style-fatec.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Inscrição Fatec | Bem Formandos</title>
</head>
<body>
    <div class="container-principal">
        <!-- inicio cabeçalho -->
        <?php include_once("../../includes/header.php"); ?>
        <!-- fim cabeçalho -->
        <main class="main-vestibulares">
            <?php include __DIR__ . '/sidebar-fatec.php';?>

            <div class="conteudo">
                <section id="introducao">
                    <h1 class="titulo titulo--fatec">
                        <i class="bi bi-person-check-fill"></i>
                        COMO SE INSCREVER
                    </h1>
                    <hr>
                    <p>O processo de inscrição para o Vestibular FATEC é totalmente online e requer atenção aos detalhes para garantir que sua candidatura seja bem-sucedida. Siga o passo a passo abaixo para realizar sua inscrição.</p>
                </section>
                <div class="infos-importantes infos-importantes--fatec">
                    <div class="conteudo-infos-importantes">
                        <div class="header-infos-importantes header-infos-importantes--fatec">
                            <i class="bi bi-info-circle-fill"></i>
                            <strong class="titulo-infos-importantes titulo-infos-importantes--fatec">Informações Importantes</strong>
                        </div>

                        <p class="texto-infos-importantes texto-infos-importantes--fatec">
                            <strong class="destaque-texto-infos-importantes destaque-texto-infos-importantes--fatec">Período de inscrições:</strong>
                            <?= htmlspecialchars($periodo_inscricoes ?? 'A definir'); ?>
                        </p>

                        <p class="texto-infos-importantes texto-infos-importantes--fatec">
                            <strong class="destaque-texto-infos-importantes destaque-texto-infos-importantes--fatec">Taxa de inscrição:</strong>
                            R$ <?= htmlspecialchars($taxa ?? '0,00'); ?>
                        </p>

                        <p class="texto-infos-importantes texto-infos-importantes--fatec">
                            <strong class="destaque-texto-infos-importantes destaque-texto-infos-importantes--fatec">Site oficial:</strong>
                            <a href="https://vestibular.fatec.sp.gov.br/home" target="_blank" rel="noopener">vestibular.fatec.sp.gov.br</a>
                        </p>
                    </div>
                </div>
                <section id="requisitos">
                    <h2>Requisitos para Inscrição</h2>
                    <div class="area-cards area-cards--requisitos">
                        <div class="cards card--requisito">
                            <div class="conteudo-card">
                                <span class="icone-info icone-info--fatec"><i class="bi bi-person-vcard-fill"></i></span>
                                <h3 class="titulo-info">Documento de Identidade</h3>
                                <p class="texto-info">CPF válido e documento oficial com foto.</p>
                            </div>
                        </div>
                        <div class="cards card--requisito">
                            <div class="conteudo-card">
                                <span class="icone-info icone-info--fatec"><i class="bi bi-mortarboard-fill"></i></span>
                                <h3 class="titulo-info">Escolaridade</h3>
                                <p class="texto-info">Ter concluído ou estar cursando o 3º ano do Ensino Médio ou equivalente. A comprovação da conclusão será exigida.</p>
                            </div>
                        </div>
                        <div class="cards card--requisito">
                            <div class="conteudo-card">
                                <span class="icone-info icone-info--fatec"><i class="bi bi-telephone-fill"></i></span>
                                <h3 class="titulo-info">E-mail e Telefone</h3>
                                <p class="texto-info">Ter um e-mail ativo para receber comunicados e telefone para contato.</p>
                            </div>
                        </div>
                        <div class="cards card--requisito">
                            <div class="conteudo-card">
                                <span class="icone-info icone-info--fatec"><i class="bi bi-credit-card-fill"></i></span>
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
                                <span class="dot dot--fatec">1</span>
                                <h3 class="titulo-card-passo">Acesse o Site Oficial</h3>
                            </div>
                            <p class="texto-card-passo">Entre no site oficial do vestibular da Fatec: <strong><a class="link-fatec" href="https://vestibular.fatec.sp.gov.br/home">vestibular.fatec.sp.gov.br</a></strong></p>
                            <p class="texto-card-passo">Acesse a página de Inscrição</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--fatec">2</span>
                                <h3 class="titulo-card-passo">Cadastro de Candidato</h3>
                            </div>
                            <p class="texto-card-passo">Se for o primeiro acesso, crie seu cadastro informando CPF, e-mail e senha.</p>
                            <p class="texto-card-passo">Se já possui cadastro, apenas faça login.</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--fatec">3</span>
                                <h3 class="titulo-card-passo">Unidade e Curso</h3>
                            </div>
                            <p class="texto-card-passo">Selecione a Fatec desejada, o curso e o período (manhã, tarde ou noite). </p>
                            <p class="texto-card-passo">Se quiser, indique uma 2ª opção de curso.</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--fatec">4</span>
                                <h3 class="titulo-card-passo">Preencha os Dados Pessoais</h3>
                            </div>
                            <p class="texto-card-passo">Informe seus dados pessoais com atenção</p>
                            <p class="texto-card-passo"><strong>Dados obrigatórios:</strong></p>
                            <ul class="lista-dados">
                                <li class="item-dados">Nome completo (conforme documento)</li>
                                <li class="item-dados">CPF</li>
                                <li class="item-dados">Data de nascimento</li>
                                <li class="item-dados">Informações escolares</li>
                                <li class="item-dados">Estado civil</li>
                                <li class="item-dados">Cor/raça</li>
                            </ul>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--fatec">5</span>
                                <h3 class="titulo-card-passo">Solicite Pontuação Acrescida</h3>
                            </div>
                            <p class="texto-card-passo">Caso seja elegível, marque a opção para receber bônus (afrodescendência ou escola pública). </p>
                            <p class="texto-card-passo">Será necessário comprovar depois.</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--fatec">6</span>
                                <h3 class="titulo-card-passo">Revise e Confirme os Dados</h3>
                            </div>
                            <p class="texto-card-passo">Confira todas as informações antes de prosseguir.</p>
                            <p class="texto-card-passo">Corrija se necessário e confirme para continuar.</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--fatec">7</span>
                                <h3 class="titulo-card-passo">Questionário Socioeconômico</h3>
                            </div>
                            <p class="texto-card-passo">Responda as questões sobre sua situação socioeconômica</p>
                            <ul class="lista-dados">
                                <li class="item-dados">Informações sobre renda familiar</li>
                                <li class="item-dados">Escolaridade dos pais</li>
                                <li class="item-dados">Condições de moradia</li>
                                <li class="item-dados">Acesso a bens e serviços</li>
                            </ul>
                            <p class="texto-card-passo">Essa etapa é necessária para validar a inscrição.</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--fatec">8</span>
                                <h3 class="titulo-card-passo">Pagamento da Taxa</h3>
                            </div>
                            <p class="texto-card-passo">Efetue o pagamento da taxa de inscrição</p>
                            <p class="texto-card-passo"><strong>Formas de pagamento:</strong></p>
                            <ul class="lista-dados">
                                <li class="item-dados">Boleto bancário</li>
                                <li class="item-dados">Cartão de crédito</li>
                            </ul>
                            <p class="texto-card-passo"> A inscrição será confirmada somente após a compensação do pagamento.</p>
                            <div class="card-info card-info--fatec">
                                <div class="conteudo-card-info">
                                    <i class="bi bi-lightbulb-fill"></i>
                                    <p class="texto-card-info texto-card-info--fatec">Guarde o comprovante de pagamento</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="isencao">
                    <h2>Isenção ou Redução da Taxa de Inscrição</h2>
                    <div class="solicita">
                        <h3 class="titulo-isencao">Quem tem Direito à Isenção?</h3>
                        <ul class="lista-isencao">
                            <li class="item-lista-isencao">Candidatos com renda familiar per capita de até 1,5 salário mínimo</li>
                            <li class="item-lista-isencao">Estudantes de escola pública que concluíram o ensino médio em anos anteriores</li>
                            <li class="item-lista-isencao">Pessoas em situação de vulnerabilidade socioeconômica</li>
                        </ul>
                    </div>
                    <hr class="linha-isencao">
                    <div class="solicita">
                        <h3 class="titulo-isencao">Quem tem direito à redução de 50%?</h3>
                        <ul class="lista-isencao">
                            <li class="item-lista-isencao">Estudantes regularmente matriculados no ensino médio, pré-vestibular ou curso superior</li>
                            <li class="item-lista-isencao">Candidatos que recebem remuneração mensal inferior a dois salários mínimos ou estejam desempregados</li>
                        </ul>
                    </div>
                    <hr class="linha-isencao">

                    <div class="solicita">
                        <h3 class="titulo-isencao">Como Solicitar?</h3>
                        <ol class="lista-isencao">
                            <li class="item-lista-isencao">Acesse o site oficial da Fatec no período específico</li>
                            <li class="item-lista-isencao">Clique em “Solicitar Isenção/Redução”</li>
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
                    <h4>Calendário Fatec</h4>
                        <p>Todas as datas importantes do processo</p>
                        <div class="ler-mais ler-mais--fatec"><a href="calendario.php">Ler mais</a></div>
                        <hr>
                    <h4>Vestibular Fatec</h4>
                        <p>Tudo sobre o vestibular da Fatec</p>
                        <div class="ler-mais ler-mais--fatec"><a href="vestibular.php">Ler mais</a></div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>