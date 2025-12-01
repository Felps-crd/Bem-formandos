<?php
include_once("../../assets/php/conexao.php");

$vestibular_id = 6; // PROVAO


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
    <link rel="stylesheet" href="../../assets/estilos/style-provao.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Inscrição Provão Paulista | Bem Formandos</title>
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
                        <i class="bi bi-person-check-fill"></i>
                        COMO SE INSCREVER
                    </h1>
                    <hr>
                    <p>Guia completo sobre o processo de inscrição automática e manual.</p>
                </section>
                <div class="infos-importantes infos-importantes--provao">
                    <div class="conteudo-infos-importantes">
                        <div class="header-infos-importantes header-infos-importantes--provao">
                            <i class="bi bi-info-circle-fill"></i>
                            <strong class="titulo-infos-importantes titulo-infos-importantes--provao">Informações Importantes</strong>
                        </div>

                        <p class="texto-infos-importantes texto-infos-importantes--provao">
                            <strong class="destaque-texto-infos-importantes destaque-texto-infos-importantes--provao">Período de inscrições:</strong>
                            <?= htmlspecialchars($periodo_inscricoes ?? 'A definir'); ?>
                        </p>

                        <p class="texto-infos-importantes texto-infos-importantes--provao">
                            <strong class="destaque-texto-infos-importantes destaque-texto-infos-importantes--provao">Site oficial:</strong>
                            <a href="https://www.vunesp.com.br/SEED2503" target="_blank" rel="noopener">www.vunesp.com.br</a>
                        </p>
                    </div>
                </div>
                <section id="tipo-inscricao">
                    <h2>Modalidades de Inscrição</h2>
                        <p>O processo de inscrição no Provão Paulista Seriado é dividido em duas modalidades: inscrição automática para estudantes de determinadas redes de ensino e inscrição manual para outros grupos.</p>
                        <p>Todos os candidatos, independentemente do tipo de inscrição, precisarão escolher seus cursos no portal da Vunesp.</p>
                        <div class="area-cards-inscricao">
                            <div class="card-inscricao">
                                <div class="header-inscricao">
                                    <p class="tipo-inscricao">Automática</p>
                                </div>
                                <p class="texto-inscricao">Inscrição realizada automaticamente pela Secretaria da Educação</p>
                                <ul class="lista-inscricao">
                                    <li class="item-lista-inscricao">Estudantes da rede estadual de São Paulo</li>
                                    <li class="item-lista-inscricao">Escolas Técnicas</li>
                                    <li class="item-lista-inscricao">Escolas conveniadas com USP, Unicamp e Unesp</li>
                                </ul>
                            </div>
                            <div class="card-inscricao">
                                <div class="header-inscricao">
                                    <p class="tipo-inscricao">Manual</p>
                                </div>
                                <p class="texto-inscricao">Necessário se inscrever manualmente no site da Vunesp no período específico</p>
                                <ul class="lista-inscricao">
                                    <li class="item-lista-inscricao">Estudantes da modalidade EJA - Ensino Médio</li>
                                    <li class="item-lista-inscricao">Estudantes de redes municipais do estado de São Paulo</li>
                                    <li class="item-lista-inscricao">Redes estaduais e municipais de outros estados do Brasil</li>
                                    <li class="item-lista-inscricao">Estudantes de instituições federais de ensino</li>
                                    <li class="item-lista-inscricao">Candidatos que perderam alguma edição da prova anterior</li>
                                </ul>
                            </div>
                        </div>
                </section>
                <section id="passo-a-passo">
                    <h2>Passo a Passo da Inscrição</h2>
                    <div class="area-cards">
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--provao">1</span>
                                <h3 class="titulo-card-passo">Acesso ao Portal</h3>
                            </div>
                            <p class="texto-card-passo">Acesse: <strong><a class="link-provao" href="https://www.vunesp.com.br/SEED2503">www.vunesp.com.br</a></strong></p>
                            <p class="texto-card-passo">Clique em "Inscrição"</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--provao">2</span>
                                <h3 class="titulo-card-passo">Preencha os Dados Pessoais</h3>
                            </div>
                            <p class="texto-card-passo">Informe seus dados pessoais com atenção</p>
                            <p class="texto-card-passo"><strong>Dados obrigatórios:</strong></p>
                            <ul class="lista-dados">
                                <li class="item-dados">Nome completo (conforme documento)</li>
                                <li class="item-dados">CPF</li>
                                <li class="item-dados">Data de nascimento</li>
                                <li class="item-dados">E-mail</li>
                                <li class="item-dados">Telefone</li>
                            </ul>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--provao">3</span>
                                <h3 class="titulo-card-passo">Informações Educacionais</h3>
                            </div>
                            <p class="texto-card-passo">Dados de escolaridade</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--provao">4</span>
                                <h3 class="titulo-card-passo">Escolha do Polo</h3>
                            </div>
                            <p class="texto-card-passo">Selecione local da prova</p>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--provao">5</span>
                                <h3 class="titulo-card-passo">Solicite Participação Específica</h3>
                            </div>
                            <p class="texto-card-passo">Se necessário, solicite recursos de atendimento especial</p>
                            <ul class="lista-dados">
                                <li class="item-dados">Acessibilidade</li>
                                <li class="item-dados">Nome Social</li>
                                <li class="item-dados">Lactantes</li>
                            </ul>
                            <div class="card-info card-info--provao">
                                <div class="conteudo-card-info">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <p class="texto-card-info texto-card-info--provao">Você precisará enviar a documentação comprobatória</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-passo">
                            <div class="header-passo">
                                <span class="dot dot--provao">6</span>
                                <h3 class="titulo-card-passo">Revise e Confirme os Dados</h3>
                            </div>
                            <p class="texto-card-passo">Confira todas as informações antes de prosseguir.</p>
                            <p class="texto-card-passo">Anote seu número de inscrição</p>
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
                            <li><a href="#tipo-inscricao">Modalidades de Inscrição</a></li>
                            <li><a href="#passo-a-passo">Passo a Passo</a></li>
                        </ul>
                </div>
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-bookmark-fill"></i>
                        <h3>Conteúdo Relacionado</h3>
                    </div>
                    <hr>
                    <h4>Calendário Provão Paulista</h4>
                        <p>Todas as datas importantes do processo</p>
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