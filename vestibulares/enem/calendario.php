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
    <title>Calendário ENEM | Bem Formandos</title>
    <link rel="stylesheet" href="../../assets/estilos/style.css">
    <link rel="stylesheet" href="../../assets/estilos/style-vestibulares.css">
    <link rel="stylesheet" href="../../assets/estilos/sidebars.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
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
                <h2>Cronograma Completo ENEM 2025</h2>
                <div class="areas-provas">
                    <?php if (!empty($eventos)): ?>
                        <?php foreach ($eventos as $evento): ?>
                            <div class="area-card">
                                <i class="bi bi-calendar-event-fill"></i>
                                <div>
                                    <h3><?php echo htmlspecialchars($evento['titulo']); ?></h3>
                                    <p><strong>Início:</strong> <?php echo date('d/m/Y', strtotime($evento['data_inicio'])); ?></p>
                                    <?php if ($evento['data_fim']): ?>
                                        <p><strong>Fim:</strong> <?php echo date('d/m/Y', strtotime($evento['data_fim'])); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Nenhum evento cadastrado ainda.</p>
                    <?php endif; ?>
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
                    <li><a href="#introducao">Cronograma ENEM 2025</a></li>
                    <li><a href="#">Informações Importantes</a></li>
                </ul>
            </div>
            <div class="card">
                <div class="titulo-card">
                    <i class="bi bi-bookmark-fill"></i>
                    <h3>Conteúdo Relacionado</h3>
                </div>
                <hr>
                <h4>Como se inscrever no ENEM</h4>
                <p>Passo a passo para fazer sua inscrição</p>
                <div class="ler-mais ler-mais--enem"><a href="inscricao.php">Ler mais</a></div>
                <hr>
                <h4>Redação ENEM</h4>
                <p>Tudo sobre a redação do ENEM</p>
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
