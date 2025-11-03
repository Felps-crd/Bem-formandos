<?php
session_start();
include_once('../../assets/php/conexao.php');

// Verifica se está logado
if(!isset($_SESSION['adm_id'])){
    header("Location: login-adm.php");
    exit;
}

// Total de funcionários (todos os cargos)
$total_funcionarios = $conexao->query("SELECT COUNT(*) as total FROM funcionarios")->fetch_assoc()['total'];

// Total de vestibulares (mantém mesmo card de resumo)
$total_vestibulares = $conexao->query("SELECT COUNT(*) as total FROM vestibulares")->fetch_assoc()['total'];

// Buscar todos os funcionários
$sql = "SELECT id, nome, usuario, email, cargo FROM funcionarios ORDER BY nome";
$result = $conexao->query($sql);

$cards = [];
while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $cards[$id] = [
        'id' => $id,
        'nome' => $row['nome'],
        'usuario' => $row['usuario'],
        'email' => $row['email'],
        'cargo' => $row['cargo']
    ];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../assets/estilos/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Graduate&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="../../assets/imagens/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined">
<link rel="stylesheet" href="../../assets/estilos/style-home-user.css">
<link rel="stylesheet" href="../../assets/estilos/style-card-adm.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="../../assets/estilos/style-modal-vest.css">
<title>Funcionários | ADM</title>
</head>
<style>
    main{
        margin-left: 90px;
        margin-right: 90px;
        margin-bottom: 30px;
       }
    
</style>
<body>
<div class="container-principal">
    <!-- Cabeçalho -->
    <header>
        <div class="logo">
            <img src="../../assets/imagens/logo.png" alt="Ícone de formatura">
            <h1>Bem Formandos</h1>
        </div>
        <div class="icones-cabecalho">
            <a href="../adm.html"><span class="material-symbols-outlined">home</span></a>
            <div class="perfil-dropdown">
                <span class="material-symbols-outlined" id="abre-perfil">person</span>
                <div id="perfil">
                    <h1 id="nome-perfil"><?php echo $_SESSION['adm_nome']; ?></h1>
                    <p id="email-perfil"><?php echo $_SESSION['adm_email']; ?></p>
                    <button type="button" id="btn-alterar-senha">Alterar senha</button>
                    <div id="form-senha" style="display:none; text-align:center; margin-top:20px;">
                        <input type="password" id="nova-senha" style="border: none; outline: none; font-size: 15px;" placeholder="Nova senha" required>
                        <button type="button" id="salvar-senha">Salvar</button>
                    </div>
                    <button type="button" class="btn-sair" onclick="window.location.href='logout.php'">Sair</button>
                </div>
            </div>
        </div>
    </header>

    <!-- Conteúdo -->
    <main>
        <h2 class="page-title">PAINEL ADMINISTRATIVO</h2>

        <!-- Cards resumo -->
        <section class="cards-rows">
            <div class="card-cont">
                <h3>Total de funcionários</h3>
                <p class="number"><?= $total_funcionarios ?></p>
                <i class="bi bi-people card-icon"></i>
            </div>
            <div class="card-cont">
                <h3>Total de Vestibulares</h3>
                <p class="number"><?= $total_vestibulares ?></p>
                <i class="bi bi-star card-icon"></i>
            </div>
        </section>
        <!--Fim Cards rows de vestibulares e funcionarios-->

        <!-- ABAS -->
        <div class="tab-container">
            <a href="tela-adm-func.php" class="tab active">
              <i class="bi bi-people"></i> Funcionários
            </a>
            <a href="tela-adm-vest.php" class="tab">
              <i class="bi bi-star"></i> Vestibulares
            </a>
        </div>
        <!-- FIM ABAS -->

        <!-- Conteúdo principal -->
        <div class="content-box">
        <div class="header">
              <div>
                <h2>Gerenciar Funcionários</h2>
                <p>Cadastre, edite ou remova informações dos funcionários</p>
              </div>
              <button class="btn-new abrir-modal" data-id=""><i class="fa-solid fa-plus"></i> Novo Funcionário</button>
        </div>

        <!-- Lista de Funcionários -->
        <div class="cards-container">
            <?php foreach ($cards as $id => $dados): ?>
            <div class="card">
                <div class="card-left">
                    <div class="icon"><i class="fa-solid fa-user"></i></div>
                    <div class="info">
                        <h3><?= htmlspecialchars($dados['nome']) ?></h3>
                        <p>
                            Usuário: <?= htmlspecialchars($dados['usuario']) ?><br>
                            Email: <?= htmlspecialchars($dados['email']) ?><br>
                            Cargo: <?= htmlspecialchars($dados['cargo']) ?>
                        </p>
                    </div>
                </div>
                <div class="card-right">
                    <button class="btn-icon edit abrir-modal"
                        data-id="<?= $dados['id'] ?>"
                        data-nome="<?= htmlspecialchars($dados['nome']) ?>"
                        data-usuario="<?= htmlspecialchars($dados['usuario']) ?>"
                        data-email="<?= htmlspecialchars($dados['email']) ?>"
                        data-cargo="<?= $dados['cargo'] ?>">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </button>

                    <button class="btn-icon delete" 
                        onclick="if(confirm('Excluir?')) location.href='excluir_func.php?id=<?= $dados['id'] ?>'">
                        <i class="fa-regular fa-trash-can"></i>
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    </main>

    <!--Footer-->
    <footer class="rodape">
        <div class="text">
            <span>© 2025 Bem Formandos</span>
        </div>
    </footer>
</div>

<!-- Modal -->
<div id="modal-funcionario" class="modal-overlay">
  <div class="modal-box">
    <div class="modal-header">
      <h2 id="modal-title">Editar Funcionário</h2>
      <p class="subtitle">Edite as informações do funcionário</p>
      <button type="button" class="btn-close" onclick="fecharModal()">×</button>
    </div>
    <form id="form-func" method="post" action="salvar_func.php" class="modal-body">
      <label>Nome</label>
      <input type="text" name="nome" id="func-nome" placeholder="Ex: João Silva" required>

      <label>Usuário</label>
      <input type="text" name="usuario" id="func-usuario" placeholder="Ex: joaosilva" required>

      <label>Email</label>
      <input type="email" name="email" id="func-email" placeholder="Ex: joao@email.com" required>

      <label>Cargo</label>
      <select name="cargo" id="func-cargo" required>
          <option value="adm">Adm</option>
          <option value="funcionario">Funcionário</option>
      </select>

      <label>Senha</label>
      <input type="password" name="senha" id="func-senha" placeholder="Nova senha (apenas se quiser alterar)">

      <input type="hidden" name="id" id="func-id">

      <div class="modal-footer">
        <button type="button" class="btn cancel" onclick="fecharModal()">Cancelar</button>
        <button type="submit" class="btn save">Salvar</button>
      </div>
    </form>
  </div>
</div>

<script>
const overlay = document.getElementById('modal-funcionario');
const formFunc = document.getElementById('form-func');
const titleEl = document.getElementById('modal-title');

const inputId     = document.getElementById('func-id');
const inputNome   = document.getElementById('func-nome');
const inputUsuario= document.getElementById('func-usuario');
const inputEmail  = document.getElementById('func-email');
const inputCargo  = document.getElementById('func-cargo');
const inputSenha  = document.getElementById('func-senha');

function abrirModal(){ overlay.style.display = 'flex'; }
function fecharModal(){ overlay.style.display = 'none'; }
function limparForm() {
    formFunc.reset();
    inputId.value = '';
}

document.querySelectorAll('.btn-new').forEach(b => {
    b.addEventListener('click', () => {
        titleEl.textContent = 'Novo Funcionário';
        limparForm();
        abrirModal();
    });
});

document.querySelectorAll('.btn-icon.edit').forEach(btn => {
    btn.addEventListener('click', () => {
        titleEl.textContent = 'Editar Funcionário';
        inputId.value = btn.dataset.id || '';
        inputNome.value = btn.dataset.nome || '';
        inputUsuario.value = btn.dataset.usuario || '';
        inputEmail.value = btn.dataset.email || '';
        inputCargo.value = btn.dataset.cargo || 'funcionario';
        inputSenha.value = '';
        abrirModal();
    });
});

document.querySelectorAll('#modal-funcionario .btn.cancel').forEach(b => {
    b.addEventListener('click', fecharModal);
});
document.querySelector('#modal-funcionario .btn-close').addEventListener('click', fecharModal);
overlay.addEventListener('click', e => { if(e.target===overlay) fecharModal(); });
</script>
</body>
</html>
