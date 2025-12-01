<?php
include_once('../../assets/php/conexao.php');

// ID do vestibular unesp
$vestibular_id = 5;

// Consulta dos eventos
$sql = "SELECT titulo, data_inicio, data_fim 
        FROM calendario 
        WHERE vestibular_id = ? 
        ORDER BY data_inicio ASC";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $vestibular_id);
$stmt->execute();
$result = $stmt->get_result();
$eventos = $result->fetch_all(MYSQLI_ASSOC);

// Função de formatação de datas
function formatar_datas($inicio, $fim) {
    $inicioFormatado = date('d/m/Y', strtotime($inicio));
    return $fim ? "$inicioFormatado - " . date('d/m/Y', strtotime($fim)) : $inicioFormatado;
}

// Estrutura fixa dos grupos
$grupos = [
    'Inscrições' => [
        'Solicitação de isenção de taxa' => null,
        'Período de inscrições' => null,
        'Solicitação de atendimento especializado' => null,
        'Tratamento pelo nome social' => null
    ],
    'Pagamento' => [
        'Resultado da solicitação de isenção de taxa' => null,
        'Recurso da isenção' => null,
        'Pagamento da taxa de inscrição' => null
    ],
    'Cartão de Confirmação' => [
        'Disponibilização do cartão' => null,
        'Consulta de locais de prova' => null,
        'Recurso de local de prova' => null
    ],
    'Aplicação das Provas' => [
        '1° dia de provas' => null,
        '2° dia de provas' => null
    ]
];

// Distribui os eventos do banco nos grupos correspondentes
foreach ($eventos as $e) {
    foreach ($grupos as $grupoNome => &$subitens) {
        foreach ($subitens as $titulo => &$valor) {
            if (mb_strtolower($titulo, 'UTF-8') === mb_strtolower($e['titulo'], 'UTF-8')) {
                $valor = $e;
            }
        }
    }
}
unset($subitens, $valor); // Boa prática
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/estilos/style.css">
    <link rel="stylesheet" href="../../assets/estilos/style-vestibulares.css">
    <link rel="stylesheet" href="../../assets/estilos/sidebars.css">
    <link rel="stylesheet" href="../../assets/estilos/style-unesp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Calendário Unesp | Bem Formandos</title>
    <style>
       /* === CARD DO GRUPO === */

.area-card {
    background: #fff;
    border: 1.8px solid rgb(232, 232, 204);
    border-left: 5px solid #E5B000;
    border-radius: 10px;
    padding: 20px 25px;
    margin-bottom: 25px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    flex-direction: column;
    display: flex;
    align-items: flex-start; /* alinha tudo à esquerda */
    text-align: left;
}

/* === CABEÇALHO DO BLOCO (ícone + título grande) === */
.titulo-bloco {
    display: flex;
    align-items: center;
    gap: 10px;    
    padding-bottom: 20px;
}

/* Linha abaixo do título, ocupando quase toda a largura do card */
.titulo-bloco-linha {
    height: 1.5px;
    background-color:rgba(140, 140, 140, 0.64); /* cinza mais escuro */
    width: calc(100% - 20px); /* largura total do card menos as margens */
    border-radius: 2px;
    margin-top: -15px; /* margem superior negativa para aproximar */
}

.titulo-bloco i {
    font-size: 1.5rem;
    color: #E5B000;
    background:rgb(245, 245, 233);
    border: 2px solid #E5B000;
    border-radius: 6px;
    padding: 5px;
}

.titulo-bloco h3 {
    font-size: 1.25rem;
    font-weight: 700;
    color: #E5B000;
    margin: 0;
}

/* === ITENS DE DATAS (abaixo do título principal) === */
.itens-bloco {
    display: flex;
    flex-direction: column;
    gap: 5px;
    align-items: flex-start; /* alinha tudo à esquerda */
    text-align: left;
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.itens-bloco p {
    margin: 6px 0;
    font-size: 0.95rem;
    color: #333;
    padding-bottom: 6px;
    border-bottom: 1px solid #e0e0e0; /* linha clara */
}

.itens-bloco p:last-child {
    border-bottom: none;
}

.itens-bloco strong {
    font-weight: 600;
    color: #000;
}

    </style>
</head>
<body>
    <div class="container-principal">
        <!-- inicio cabeçalho -->
        <?php include_once("../../includes/header.php"); ?>
        <!-- fim cabeçalho -->
        <main class="main-vestibulares">
            <?php include __DIR__ . '/sidebar-unesp.php';?>

            <div class="conteudo">
                <section id="introducao">
                    <h1 class="titulo titulo--unesp">
                        <i class="bi bi-calendar-fill"></i>
                        CALENDÁRIO
                    </h1>
                    <hr>
                    <p>Fique por dentro de todas as datas importantes da Unesp 2026. Aqui você encontra o cronograma oficial completo com prazos de inscrição, datas das provas, simulado e divulgação dos resultados.</p>
                </section>

                <section id="cronograma">
                <h2>Cronograma Completo Unesp <?php echo date('Y');?></h2>

                <?php foreach ($grupos as $nome => $eventosGrupo): ?>
                    <div class="area-card">
                        <div class="titulo-bloco">
                            <?php if ($nome == 'Inscrições'): ?>
                                <i class="bi bi-pencil-square"></i>
                            <?php elseif ($nome == 'Pagamento'): ?>
                                <i class="bi bi-cash-stack"></i>
                            <?php elseif ($nome == 'Cartão de Confirmação'): ?>
                                <i class="bi bi-credit-card-2-front-fill"></i>
                            <?php elseif ($nome == 'Aplicação das Provas'): ?>
                                <i class="bi bi-journal-check"></i>
                            <?php endif; ?>
                            <h3><?= htmlspecialchars($nome) ?></h3>
                        </div>

                        <div class="titulo-bloco-linha"></div>

                        <div class="itens-bloco">
                            <?php foreach ($eventosGrupo as $titulo => $dados): ?>
                                <?php if ($dados): ?>
                                    <p>
                                        <strong><?= htmlspecialchars($titulo) ?>:</strong>
                                        <?= formatar_datas($dados['data_inicio'], $dados['data_fim']) ?>
                                    </p>
                                <?php else: ?>
                                    <p><strong><?= htmlspecialchars($titulo) ?>:</strong> <em>Data não cadastrada</em></p>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>

            <section id="infos-importantes">
                <h2>Informações Importantes</h2>
                <div class="area-cards area-cards--info">
                    <div class="cards card--info">
                        <div class="conteudo-card">
                            <span class="icone-info icone-info--unesp"><i class="bi bi-alarm-fill"></i></span>
                            <h3 class="titulo-info">Prazos e Horários</h3>
                            <ul class="lista-dados" style="color: #2f3847;">
                                <li>Inscrições encerram pontualmente às 23h59.</li>
                                <li>Não deixe para o último dia.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="cards card--info">
                         <div class="conteudo-card">
                            <span class="icone-info icone-info--unesp"><i class="bi bi-person-vcard-fill"></i></span>
                            <h3 class="titulo-info">Documentos</h3>
                            <p class="texto-info">Confira os documentos necessários para matrícula com antecedência.</p>
                         </div>    
                    </div>
                    <div class="cards card--info">
                         <div class="conteudo-card">
                            <span class="icone-info icone-info--unesp"><i class="bi bi-file-text-fill"></i></span>
                            <h3 class="titulo-info">Dia da prova</h3>
                            <ul class="lista-dados" style="color: #2f3847">
                                <li>Leve documento original com foto.</li>
                                <li>Caneta esferográfica preta.</li>
                                <li>Chegue com antecedência.</li>
                                <li>Aparelhos eletrônicos devem permanecer desligados durante a prova.</li>
                            </ul>
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
                        <li><a href="#introducao">Cronograma Unesp <?php echo date('Y');?></a></li>
                        <li><a href="#infos-importantes">Informações Importantes</a></li>
                        </ul>
                </div>
                <div class="card">
                    <div class="titulo-card">
                        <i class="bi bi-bookmark-fill"></i>
                        <h3>Conteúdo Relacionado</h3>
                    </div>
                    <hr>
                    <h4>Como se inscrever na Unesp</h4>
                        <p>Passo a passo para fazer sua inscrição</p>
                        <div class="ler-mais ler-mais--unesp"><a href="inscricao.php">Ler mais</a></div>
                        <hr>
                    <h4>Vestibular Unesp</h4>
                        <p>Tudo sobre o vestibular da Unesp</p>
                        <div class="ler-mais ler-mais--unesp"><a href="vestibular.php">Ler mais</a></div>
                </div>
            </aside>
        </main>

        <?php include_once("../../includes/footer.php"); ?>
    </div>
    
      <script src="../../assets/Javascript/sidebar.js"></script>
</body>
</html>