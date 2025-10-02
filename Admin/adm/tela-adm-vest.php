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

// Total de vestibulares
$total_vestibulares = $conexao->query("SELECT COUNT(*) as total FROM vestibulares")->fetch_assoc()['total'];



// Buscar vestibulares com categorias e eventos
$sql = "
    SELECT 
        v.id AS vestibular_id,
        v.nome AS vestibular,
        v.taxa,
        c.id AS categoria_id,
        c.nome AS categoria,
        cal.titulo AS evento,
        cal.data_inicio,
        cal.data_fim,
        i.titulo AS info_titulo,
        i.conteudo AS info_conteudo
    FROM vestibulares v
    LEFT JOIN categorias c ON v.id = c.vestibular_id
    LEFT JOIN calendario cal ON v.id = cal.vestibular_id
    LEFT JOIN informacoes i ON c.id = i.categoria_id
    
    ORDER BY v.nome, c.nome, cal.data_inicio
";
$result = $conexao->query($sql);


// Estrutura de dados organizada: [vestibular_id][categoria_id] => infos

$cards = [];

while ($row = $result->fetch_assoc()) {
    $vest_id = $row['vestibular_id'];
    $cat_id  = $row['categoria_id'] ?? 0; //caso não tenha categoria

    if (!isset($cards[$vest_id][$cat_id])) {
        $cards[$vest_id][$cat_id] = [
            'vestibular_id' => $vest_id,
            'vestibular' => $row['vestibular'],
            'categoria_id' => $cat_id,
            'categoria'  => $row['categoria'] ?? 'Sem Categoria',
            'taxa'       => $row['taxa'],
            'eventos'    => [],
            'informacoes' => [],
            'links' => []
        ];
    }

    //Eventos

    if ($row['evento']) {
        $cards[$vest_id][$cat_id]['eventos'][] = [
            'titulo' => $row['evento'],
            'inicio' => $row['data_inicio'],
            'fim'    => $row['data_fim']
        ];
    }

    // Informações
    if ($row['info_titulo']) {
        $cards[$vest_id][$cat_id]['informacoes'][] = [
            'titulo' => $row['info_titulo'],
            'conteudo' => $row['info_conteudo']
        ];
    }

    // Links
    if (isset($row['link_titulo']) && $row['link_titulo'] !== '') {
      $cards[$vest_id][$cat_id]['links'][] = [
          'titulo' => $row['link_titulo'],
          'link'   => isset($row['link_url']) ? $row['link_url'] : ''
      ];
  }

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
    <title>Vestibular | ADM</title>
    <style>
        /* === MODAL OVERLAY NOVO === */
.modal-overlay{
  display:none;               /* inicia escondido */
  position:fixed;
  inset:0;                    /* top/right/bottom/left:0 */
  background:rgba(0,0,0,.5);
  z-index:1000;
  justify-content:center;     /* centraliza horizontal */
  align-items:center;         /* centraliza vertical */
  padding:24px;
  overflow-y:auto;            /* se ficar maior que a tela, rola */
}

.modal-box{
  background:#fff;
  width:min(680px, 95vw);
  max-height:90vh;            /* nunca passa da tela */
  border-radius:12px;
  box-shadow:0 15px 35px rgba(0,0,0,.25);
  display:flex;
  flex-direction:column;
}

/* Cabeçalho */
.modal-header{
  position:sticky; top:0;     /* fica preso ao topo enquanto rola */
  background:#fff;
  padding:20px 24px 8px;
  border-top-left-radius:12px;
  border-top-right-radius:12px;
}
.modal-header h2{ margin:0; font-size:20px; }
.modal-header .subtitle{ margin:6px 0 0; font-size:14px; color:#6b7280; }
.btn-close{
  position:absolute; right:12px; top:10px;
  border:none; background:transparent;
  font-size:24px; cursor:pointer; line-height:1;
}

/* Corpo do formulário */
.modal-body{
  padding:16px 24px 0;
  overflow:auto;              /* rolagem interna */
}
.modal-body label{ display:block; font-weight:600; margin-top:12px; }
.modal-body input{
  width:100%; margin-top:6px; padding:10px 12px;
  border:1px solid #d1d5db; border-radius:8px; font-size:14px;
}
.row-inputs{
  display:grid; grid-template-columns:1fr 1fr; gap:12px;
}

/* Rodapé */
.modal-footer{
  position:sticky; bottom:0; background:#fff;
  padding:16px 24px 20px; display:flex; justify-content:flex-end; gap:10px;
  border-bottom-left-radius:12px; border-bottom-right-radius:12px;
}
.modal-footer .btn{
  padding:10px 18px; border:none; border-radius:8px; cursor:pointer; font-weight:600;
}
.modal-footer .btn.cancel{ background:#e5e7eb; }
.modal-footer .btn.save{ background:#1d4ed8; color:#fff; }
.modal-footer .btn.cancel:hover{ filter:brightness(.95); }
.modal-footer .btn.save:hover{ filter:brightness(1.05); }

    </style>
</head>
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
                <a href="tela-adm-func.php" class="tab">
                  <i class="bi bi-people"></i> Funcionários
                </a>
                <a href="tela-adm-vest.html" class="tab active">
                  <i class="bi bi-star"></i> Vestibulares
                </a>
            </div>
            <!-- FIM ABAS -->

            <!-- Conteúdo principal -->
            <div class="content-box">
            <div class="header">
                  <div>
                    <h2>Gerenciar Vestibulares</h2>
                    <p>Cadastre, edite ou remova informações sobre vestibulares</p>
                  </div>
                  <button class="btn-new abrir-modal" data-id=""><i class="fa-solid fa-plus"></i> Novo Vestibular</button>
                </div>

                <!-- Lista de Vestibulares -->
                <div class="cards-container">

                <?php foreach ($cards as $vest_id => $categorias): ?>
    <?php foreach ($categorias as $cat_id => $dados): ?>
        <div class="card">
            <div class="card-left">
                <div class="icon"><i class="fa-solid fa-graduation-cap"></i></div>
                <div class="info">
                    <h3><?= htmlspecialchars($dados['vestibular']) ?></h3>
                    <p>
                        <?= htmlspecialchars($dados['categoria']) ?>  
                        Inscrições: 
                        <?php 
                            // pega evento de inscrição
                            $insc = array_filter($dados['eventos'], fn($e) => stripos($e['titulo'], 'inscri') !== false);
                            if($insc){
                                $insc = reset($insc);
                                echo date("d/m/Y", strtotime($insc['inicio'])) . 
                                    ($insc['fim'] ? " - " . date("d/m/Y", strtotime($insc['fim'])) : "");
                            } else {
                                echo "dia-mes-ano";
                            }
                        ?>
                        Prova: 
                        <?php 
                            // pega evento de prova
                            $prova = array_filter($dados['eventos'], fn($e) => stripos($e['titulo'], 'prova') !== false);
                            if($prova){
                                $prova = reset($prova);
                                echo date("d/m/Y", strtotime($prova['inicio']));
                            } else {
                                echo "dia-mes-ano";
                            }
                        ?>
                        R$ <?= number_format($dados['taxa'], 2, ',', '.') ?>
                    </p>
                </div>
            </div>
            <div class="card-right">
                <button class="btn-icon edit abrir-modal"
                    data-vest-id="<?= $dados['vestibular_id'] ?>"
                    data-nome="<?= htmlspecialchars($dados['vestibular']) ?>"
                    data-cat-id="<?= $dados['categoria_id'] ?>"
                    data-categoria="<?= htmlspecialchars($dados['categoria']) ?>"
                    data-taxa="<?= $dados['taxa'] ?>"
                    data-eventos='<?= json_encode($dados['eventos']) ?>'>
                    <i class="fa-regular fa-pen-to-square"></i>
                </button>
                <button class="btn-icon delete" 
                    onclick="if(confirm('Excluir?')) location.href='excluir_vestibular.php?id=<?= $dados['vestibular_id'] ?>'">
                    <i class="fa-regular fa-trash-can"></i>
                </button>
            </div>
        </div>
    <?php endforeach; ?>
<?php endforeach; ?>

                   
                </div>
            </div>

              <!--FIM CONTEUDO-->

        </main>
              <!-- fim principal -->


        <!--Footer-->
        <footer class="rodape">
            <div class="text">
                <span>© 2025 Bem Formandos</span>
            </div>
        </footer>

    </div>

    
    <!-- Modal -->
<div id="modal-vestibular" class="modal-overlay">
  <div class="modal-box">
    <div class="modal-header">
      <h2 id="modal-title">Editar Vestibular</h2>
      <p class="subtitle">Edite as informações do vestibular</p>
      <button type="button" class="btn-close" onclick="fecharModal()">×</button>
    </div>
    <form id="form-vest" method="post" action="salvar_vestibular.php" class="modal-body">
      <input type="hidden" name="id" id="vest-id">

      <label>Instituição</label>
      <input type="text" name="nome" id="vest-nome" required>

      <label>Categoria</label>
      <input type="text" name="categoria" id="vest-categoria" required>

      <label>Data Isenção Taxa</label>
      <div class="row-inputs">
        <input type="date" name="isen_inicio">
        <input type="date" name="isen_fim">
      </div>

      <label>Data Inscrição</label>
      <div class="row-inputs">
        <input type="date" name="insc_inicio">
        <input type="date" name="insc_fim">
      </div>

      <label>Data Prova</label>
      <input type="date" name="data_prova">

      <label>Taxa</label>
      <input type="number" step="0.01" name="taxa" id="vest-taxa" required>

      <label>Link</label>
      <input type="url" name="link">

      <div class="modal-footer">
        <button type="button" class="btn cancel" onclick="fecharModal()">Cancelar</button>
        <button type="submit" class="btn save">Salvar</button>
      </div>
    </form>
  </div>
</div>
<!--Fim Modal -->


    <script>
        
  // ===== Perfil (seu código existente pode ficar aqui) =====
  // ... (se já está funcionando, mantenha)

  // ===== Modal de Vestibular =====
  const overlay   = document.getElementById('modal-vestibular');
  const formVest  = document.getElementById('form-vest');
  const titleEl   = document.getElementById('modal-title');

  const inputId   = document.getElementById('vest-id');
  const inputNome = document.getElementById('vest-nome');
  const inputCat  = document.getElementById('vest-categoria');
  const inputTaxa = document.getElementById('vest-taxa');

  // Campos de data que existem no formulário
  const inputIsenIni = formVest.elements['isen_inicio'];
  const inputIsenFim = formVest.elements['isen_fim'];
  const inputInscIni = formVest.elements['insc_inicio'];
  const inputInscFim = formVest.elements['insc_fim'];
  const inputProva   = formVest.elements['data_prova'];

  function abrirModal(){ overlay.style.display = 'flex'; }
  function fecharModal(){ overlay.style.display = 'none'; }

  // Novo vestibular
  document.querySelector('.btn-new').addEventListener('click', () => {
    titleEl.textContent = 'Novo Vestibular';
    formVest.reset();
    inputId.value = '';

    abrirModal();
  });

  // Editar vestibular
  document.querySelectorAll('.btn-icon.edit').forEach(btn => {
    btn.addEventListener('click', () => {
      titleEl.textContent = 'Editar Vestibular';

      // Preenche campos básicos
      inputId.value   = btn.dataset.vestId || '';
      inputNome.value = btn.dataset.nome || '';
      inputCat.value  = btn.dataset.categoria || '';
      inputTaxa.value = btn.dataset.taxa || '';

      // Zera datas
      inputIsenIni.value = inputIsenFim.value = '';
      inputInscIni.value = inputInscFim.value = '';
      inputProva.value   = '';

      // Preenche datas a partir dos eventos (se existirem)
      let eventos = [];
      try { eventos = JSON.parse(btn.dataset.eventos || '[]'); } catch(e){ eventos = []; }

      eventos.forEach(ev => {
        const t = (ev.titulo || '').toLowerCase();
        if (t.includes('isen')) {          // Isenção
          inputIsenIni.value = ev.inicio || '';
          inputIsenFim.value = ev.fim || '';
        } else if (t.includes('inscri')) { // Inscrição
          inputInscIni.value = ev.inicio || '';
          inputInscFim.value = ev.fim || '';
        } else if (t.includes('prova')) {  // Prova
          inputProva.value = ev.inicio || '';
        }
      });

      abrirModal();
    });
  });

  // Botões de fechar
  document.querySelector('#modal-vestibular .btn.cancel').addEventListener('click', fecharModal);
  document.querySelector('#modal-vestibular .btn-close').addEventListener('click', fecharModal);

  // Fecha ao clicar fora da caixa
  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) fecharModal();
  });
</script>

 
</body>
</html>
