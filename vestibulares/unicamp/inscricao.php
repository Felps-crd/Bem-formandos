<?php
include_once("../../assets/php/conexao.php");

$vestibular_id = 1; // ENEM --- TROCAR POR UNICAMP!!

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
    <link rel="stylesheet" href="../../assets/estilos/style-unicamp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Inscrição Unicamp | Bem Formandos</title>
</head>
<body>
    <div class="container-principal">
        <!-- inicio cabeçalho -->
        <?php include_once("../../includes/header.php"); ?>
        <!-- fim cabeçalho -->
        <main class="main-vestibulares">
            <?php include __DIR__ . '/sidebar-unicamp.php';?>

            <div class="conteudo">
                <section id="introducao">
                    <h1 class="titulo titulo--unicamp">
                        <i class="bi bi-person-check-fill"></i>
                        COMO SE INSCREVER
                    </h1>
                    <hr>
                    <p>O processo de inscrição para o vestibular Unicamp e totalmente online e deve ser realizado através do site da Comissão Permanente para os Vestibulares (Comvest). Siga o passo a passo abaixo para realizar sua inscrição.</p>
                </section>
                <div class="infos-importantes infos-importantes--unicamp">
                    <div class="conteudo-infos-importantes">
                        <div class="header-infos-importantes header-infos-importantes--unicamp">
                            <i class="bi bi-info-circle-fill"></i>
                            <strong class="titulo-infos-importantes titulo-infos-importantes--unicamp">Informações Importantes</strong>
                        </div>

                        <p class="texto-infos-importantes texto-infos-importantes--unicamp">
                            <strong class="destaque-texto-infos-importantes destaque-texto-infos-importantes--unicamp">Período de inscrições:</strong>
                            <?= htmlspecialchars($periodo_inscricoes ?? 'A definir'); ?>
                        </p>

                        <p class="texto-infos-importantes texto-infos-importantes--unicamp">
                            <strong class="destaque-texto-infos-importantes destaque-texto-infos-importantes--unicamp">Taxa de inscrição:</strong>
                            R$ <?= htmlspecialchars($taxa ?? '0,00'); ?>
                        </p>

                        <p class="texto-infos-importantes texto-infos-importantes--unicamp">
                            <strong class="destaque-texto-infos-importantes destaque-texto-infos-importantes--unicamp">Site oficial:</strong>
                            <a href="https://www.comvest.unicamp.br/ingresso-2026/vestibular-2026" target="_blank" rel="noopener">www.comvest.unicamp.br</a>
                        </p>
                    </div>
                </div>
                <section id="requisitos">
                    <h2>Requisitos para Inscrição</h2>
                    <div class="area-cards area-cards--requisitos">
                        <div class="cards card--requisito">
                            <div class="conteudo-card">
                                <span class="icone-info icone-info--unicamp"><i class="bi bi-person-vcard-fill"></i></span>
                                <h3 class="titulo-info">Documento de Identidade</h3>
                                <p class="texto-info">CPF válido e documento oficial com foto.</p>
                            </div>
                        </div>
                        <div class="cards card--requisito">
                            <div class="conteudo-card">
                                <span class="icone-info icone-info--unicamp"><i class="bi bi-mortarboard-fill"></i></span>
                                <h3 class="titulo-info">Escolaridade</h3>
                                <p class="texto-info">Ter concluído ou estar cursando o 3º ano do Ensino Médio ou equivalente. A comprovação da conclusão será exigida.</p>
                            </div>
                        </div>
                        <div class="cards card--requisito">
                            <div class="conteudo-card">
                                <span class="icone-info icone-info--unicamp"><i class="bi bi-telephone-fill"></i></span>
                                <h3 class="titulo-info">E-mail e Telefone</h3>
                                <p class="texto-info">Ter um e-mail ativo para receber comunicados e telefone para contato.</p>
                            </div>
                        </div>
                        <div class="cards card--requisito">
                            <div class="conteudo-card">
                                <span class="icone-info icone-info--unicamp"><i class="bi bi-credit-card-fill"></i></span>
                                <h3 class="titulo-info">Forma de Pagamento</h3>
                                <p class="texto-info">Cartão de crédito/débito ou boleto bancário para pagamento da taxa</p>
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
                    <h4>Como se inscrever na unicamp</h4>
                        <p>Passo a passo para fazer sua inscrição</p>
                        <div class="ler-mais ler-mais--unicamp"><a href="inscricao.php">Ler mais</a></div>
                        <hr>
                    <h4>Vestibular unicamp</h4>
                        <p>Tudo sobre o vestibular da unicamp</p>
                        <div class="ler-mais ler-mais--unicamp"><a href="vestibular.php">Ler mais</a></div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>