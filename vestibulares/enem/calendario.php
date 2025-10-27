<?php
// calendario.php
$host = 'localhost';
$db   = 'formandos';
$user = 'root'; // ajuste se o seu XAMPP tiver outro usuário
$pass = '';     // ajuste se você configurou senha no XAMPP
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}

// ID do ENEM (ajuste se for diferente)
$vestibular_id = 2;

try {
    $stmt = $pdo->prepare("SELECT titulo, data_inicio, data_fim FROM calendario WHERE vestibular_id = ?");
    $stmt->execute([$vestibular_id]);
    $eventos = $stmt->fetchAll();
} catch (\PDOException $e) {
    die("Erro na consulta: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário Enem | Bem Formandos</title>
    <link rel="stylesheet" href="../../assets/estilos/style.css">
    <link rel="stylesheet" href="../../assets/estilos/style-vestibulares.css">
    <link rel="stylesheet" href="../../assets/estilos/sidebars.css">
    <link rel="stylesheet" href="../../assets/estilos/style-enem.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<style>
    .area-card {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

.titulo-bloco {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 12px;
}

.titulo-bloco h3 {
    font-size: 1.3rem;
    font-weight: 700;
    color: #333;
    margin-left: 8px;
}

.titulo-bloco i {
    font-size: 1.5rem;
    color: #008037;
}

.titulo-bloco .mes {
    background-color: #25d366;
    color: white;
    padding: 3px 10px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 0.9rem;
}

.itens-bloco p {
    margin: 6px 0;
    color: #333;
    font-size: 0.95rem;
}
</style>
<body>
<div class="container-principal">
    <!-- Cabeçalho -->
    <header>
        <div class="logo">
            <a href="../../index.php" class="logo">
                <img src="../../assets/imagens/logo.png" alt="Ícone de formatura">
                <h1>BEM FORMANDOS</h1>
            </a>
        </div>
        <a href="#"><button class="btn-cadastro">Cadastre-se</button></a>
    </header>

    <!-- Conteúdo principal -->
    <main class="main-vestibulares">
        <?php include __DIR__ . '/sidebar-enem.php'; ?>

        <div class="conteudo">
            <section id="introducao">
                <h1 class="titulo titulo--enem"><i class="bi bi-calendar-fill"></i> CALENDÁRIO</h1>
                <hr>
                <p>Fique por dentro de todas as datas importantes do ENEM 2025. Aqui você encontra o cronograma completo com prazos de inscrição, bloqueio e aplicação das provas.</p>
            </section>

            <section id="cronograma">
    <h2>Cronograma Completo Enem 2025</h2>

    <!-- INSCRIÇÕES -->
    <div class="area-card">
        <div class="titulo-bloco">
            <i class="bi bi-pencil-square"></i>
            <h3>Inscrições</h3>
            
        </div>
        <div class="itens-bloco">
            <?php
            foreach ($eventos as $e) {
                if (stripos($e['titulo'], 'inscrição') !== false || stripos($e['titulo'], 'isenção') !== false || stripos($e['titulo'], 'atendimento especializado') !== false) {
                    echo "<p><strong>{$e['titulo']}:</strong> " . date('d/m/Y', strtotime($e['data_inicio']));
                    if (!empty($e['data_fim'])) echo " - " . date('d/m/Y', strtotime($e['data_fim']));
                    echo "</p>";
                }
            }
            ?>
        </div>
    </div>

    <!-- PAGAMENTO -->
    <div class="area-card">
        <div class="titulo-bloco">
            <i class="bi bi-cash-stack"></i>
            <h3>Pagamento</h3>
            
        </div>
        <div class="itens-bloco">
            <?php
            foreach ($eventos as $e) {
                if (stripos($e['titulo'], 'pagamento') !== false || stripos($e['titulo'], 'recurso') !== false || stripos($e['titulo'], 'resultado da solicitação') !== false) {
                    echo "<p><strong>{$e['titulo']}:</strong> " . date('d/m/Y', strtotime($e['data_inicio']));
                    if (!empty($e['data_fim'])) echo " - " . date('d/m/Y', strtotime($e['data_fim']));
                    echo "</p>";
                }
            }
            ?>
        </div>
    </div>

    <!-- CARTÃO DE CONFIRMAÇÃO -->
    <div class="area-card">
        <div class="titulo-bloco">
            <i class="bi bi-credit-card-2-front-fill"></i>
            <h3>Cartão de Confirmação</h3>
            
        </div>
        <div class="itens-bloco">
            <?php
            foreach ($eventos as $e) {
                if (stripos($e['titulo'], 'cartão') !== false || stripos($e['titulo'], 'local de prova') !== false) {
                    echo "<p><strong>{$e['titulo']}:</strong> " . date('d/m/Y', strtotime($e['data_inicio']));
                    if (!empty($e['data_fim'])) echo " - " . date('d/m/Y', strtotime($e['data_fim']));
                    echo "</p>";
                }
            }
            ?>
        </div>
    </div>

    <!-- APLICAÇÃO DAS PROVAS -->
    <div class="area-card">
        <div class="titulo-bloco">
            <i class="bi bi-journal-check"></i>
            <h3>Aplicação das Provas</h3>
            
        </div>
        <div class="itens-bloco">
            <?php
            foreach ($eventos as $e) {
                if (stripos($e['titulo'], 'prova') !== false) {
                    echo "<p><strong>{$e['titulo']}:</strong> " . date('d/m/Y', strtotime($e['data_inicio']));
                    if (!empty($e['data_fim'])) echo " - " . date('d/m/Y', strtotime($e['data_fim']));
                    echo "</p>";
                }
            }
            ?>
        </div>
    </div>

</section>
        </div>

        <!-- Painel lateral -->
        <aside class="painel-lateral">
            <div class="card">
                <div class="titulo-card">
                    <i class="bi bi-list-ul"></i>
                    <h3>Índice</h3>
                </div>
                <hr>
                <ul>
                    <li><a href="#introducao">Cronograma Enem 2025</a></li>
                    <li><a href="#">Informações Importantes</a></li>
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
                <h4>Redação Enem</h4>
                <p>Tudo sobre a redação do Enem</p>
                <div class="ler-mais ler-mais--enem"><a href="redacao.php">Ler mais</a></div>
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
