<?php
session_start();
include_once('../../assets/php/conexao.php');

// Verifica se está logado
if(!isset($_SESSION['func_id'])){
    header("Location: login-func.php");
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
            'categoria'  => $row['categoria'] ?? '',
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
    <link rel="stylesheet" href="../../assets/estilos/style-modal-vest.css">
    <title>Painel ADM | Func</title>
    <style>
       main{
        margin-left: 90px;
        margin-right: 90px;
        margin-bottom: 30px;
       }
       .cards-rows {
        padding-left: 10%;
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start; /* alinha à esquerda */
    
}

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
                      <div class="perfil-header">
                          <span class="material-symbols-outlined">person</span>
                          <div>
                              <h4 id="nome-perfil"><?= $_SESSION['func_nome']; ?></h4>
                              <p id="email-perfil"><?= $_SESSION['func_email']; ?></p>
                          </div>
                      </div>
                      <button type="button" class="btn-sair" onclick="window.location.href='logout.php'">
                          Sair
                      </button>
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
                    <h3>Total de Vestibulares</h3>
                    <p class="number"><?= $total_vestibulares ?></p>
                    <i class="bi bi-star card-icon"></i>
                </div>
            </section>
            <!--Fim Cards rows de vestibulares e funcionarios-->

            <!-- Conteúdo principal -->
            <div class="content-box">
            <div class="header">
                  <div>
                    <h2>Gerenciar Vestibulares</h2>
                    <p>Cadastre, edite ou remova informações sobre vestibulares</p>
                  </div>

                  <!--<button class="btn-new abrir-modal" data-id=""><i class="fa-solid fa-plus"></i> Novo Vestibular</button>-->

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
                
                  
                    data-taxa="<?= $dados['taxa'] ?>">
                    <i class="fa-regular fa-pen-to-square"></i>
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
      

      <label>Instituição</label>
<div class="row-inputs">
  <input type="text" name="nome" id="vest-nome" placeholder="Ex: USP" required>
  <input type="text" id="vest-id" name="id" readonly style="color: #6b7280;">

</div>



<!-- container dinâmico para eventos (adicionado no modal) -->
<h2 class="modal-secao">Datas</h2>
<div id="eventos-dinamicos"></div>
<!-- fim container -->

<label>Taxa</label>
<div class="row-inputs">
  <input type="number" step="0.01" name="taxa" id="vest-taxa" placeholder="R$ 100,00" required>
</div>

<label>Link</label>
<input type="url" name="link" placeholder="https://...">



      <div class="modal-footer">
        <button type="button" class="btn cancel" onclick="fecharModal()">Cancelar</button>
        <button type="submit" class="btn save">Salvar</button>
      </div>
    </form>
  </div>
</div>
<!--Fim Modal -->


<script>

const abrePerfil = document.getElementById('abre-perfil');
const perfilMenu = document.getElementById('perfil');

abrePerfil.addEventListener('click', (e) => {
    e.stopPropagation(); // não fecha ao clicar no ícone
    perfilMenu.classList.toggle('aberto');
});

// Fecha ao clicar fora
document.addEventListener('click', (e) => {
    if (!perfilMenu.contains(e.target) && e.target !== abrePerfil) {
        perfilMenu.classList.remove('aberto');
    }
});

/* ======= Modal dinâmico - criar/editar eventos (envio via POST tradicional) ======= */

const overlay = document.getElementById('modal-vestibular');
const formVest = document.getElementById('form-vest');
const titleEl = document.getElementById('modal-title');

const inputId   = document.getElementById('vest-id');    // name="id" (vestibular id)
const inputNome = document.getElementById('vest-nome');  // name="nome"
const inputTaxa = document.getElementById('vest-taxa');  // name="taxa"

const eventosContainer = document.getElementById('eventos-dinamicos');

function abrirModal(){ overlay.style.display = 'flex'; }
function fecharModal(){ overlay.style.display = 'none'; }

/* Limpa form: deixa campos do vestibular e remove blocos de evento */
function limparForm() {
  formVest.reset();
  eventosContainer.innerHTML = '';
}

let eventoIndex = 0; // índice global para os eventos do form

function criarBlocoEvento(ev = {}) {
  const index = eventoIndex++; // cada bloco recebe um índice único

  const wrapper = document.createElement('div');
  wrapper.className = 'evento-bloco';
  wrapper.style.marginBottom = '10px';
  wrapper.style.padding = '8px';
  wrapper.style.border = '1px solid #e6e6e6';
  wrapper.style.borderRadius = '6px';

  // Título
  const labelTitulo = document.createElement('label');
  labelTitulo.textContent = 'Título do evento';
  labelTitulo.style.display = 'block';
  labelTitulo.style.fontWeight = '600';
  wrapper.appendChild(labelTitulo);

  const inputTitulo = document.createElement('input');
  inputTitulo.type = 'text';
  inputTitulo.name = `eventos[${index}][titulo]`; // <- índice fixo
  inputTitulo.value = ev.titulo || '';
  inputTitulo.placeholder = 'Ex: Período de inscrições';
  inputTitulo.style.width = '100%';
  inputTitulo.style.marginTop = '6px';
  wrapper.appendChild(inputTitulo);

  // Hidden id
  const hiddenId = document.createElement('input');
  hiddenId.type = 'hidden';
  hiddenId.name = `eventos[${index}][id]`;
  hiddenId.value = ev.id || '';
  wrapper.appendChild(hiddenId);

  // Datas início/fim
  const rowDates = document.createElement('div');
  rowDates.className = 'row-dates';
  rowDates.style.display = 'flex';
  rowDates.style.gap = '8px';
  rowDates.style.marginTop = '8px';

  const divInicio = document.createElement('div');
  divInicio.style.flex = '1';
  const labelInicio = document.createElement('label');
  labelInicio.textContent = 'Início';
  labelInicio.style.display = 'block';
  divInicio.appendChild(labelInicio);
  const inputInicio = document.createElement('input');
  inputInicio.type = 'date';
  inputInicio.name = `eventos[${index}][inicio]`; // <- índice fixo
  inputInicio.value = ev.inicio || '';
  inputInicio.style.width = '100%';
  divInicio.appendChild(inputInicio);

  const divFim = document.createElement('div');
  divFim.style.flex = '1';
  const labelFim = document.createElement('label');
  labelFim.textContent = 'Fim (opcional)';
  labelFim.style.display = 'block';
  divFim.appendChild(labelFim);
  const inputFim = document.createElement('input');
  inputFim.type = 'date';
  inputFim.name = `eventos[${index}][fim]`; // <- índice fixo
  inputFim.value = ev.fim || '';
  inputFim.style.width = '100%';
  divFim.appendChild(inputFim);

  rowDates.appendChild(divInicio);
  rowDates.appendChild(divFim);
  wrapper.appendChild(rowDates);

  // Botão remover
  const btns = document.createElement('div');
  btns.style.marginTop = '8px';
  btns.style.display = 'flex';
  btns.style.gap = '8px';

  const btnRemove = document.createElement('button');
  btnRemove.type = 'button';
  btnRemove.textContent = 'Remover';
  btnRemove.className = 'btn-remove-event';
  btnRemove.style.background = '#ef4444';
  btnRemove.style.color = '#fff';
  btnRemove.style.border = 'none';
  btnRemove.style.padding = '6px 10px';
  btnRemove.style.borderRadius = '6px';
  btnRemove.addEventListener('click', () => wrapper.remove());

  btns.appendChild(btnRemove);
  wrapper.appendChild(btns);

  return wrapper;
}

/* Botão para adicionar novo evento (sempre abaixo do container) */
function garantirBotaoAdd() {
  let btnAdd = document.getElementById('btn-add-evento');
  if (!btnAdd) {
    btnAdd = document.createElement('button');
    btnAdd.type = 'button';
    btnAdd.id = 'btn-add-evento';
    btnAdd.textContent = '+ Adicionar evento';
    btnAdd.style.display = 'inline-block';
    btnAdd.style.marginTop = '8px';
    btnAdd.style.padding = '6px 10px';
    btnAdd.style.borderRadius = '6px';
    btnAdd.style.border = '1px dashed #6b7280';
    btnAdd.style.background = 'transparent';
    btnAdd.addEventListener('click', () => {
      eventosContainer.appendChild(criarBlocoEvento({ id: '', titulo: '', inicio: '', fim: '' }));
      // scroll to the new block
      eventosContainer.lastChild.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });

    eventosContainer.parentNode.insertBefore(btnAdd, eventosContainer.nextSibling);
  }
}

/* Evento: abrir modal para novo vestibular */
document.querySelectorAll('.btn-new').forEach(b => {
  b.addEventListener('click', () => {
    titleEl.textContent = 'Novo Vestibular';
    limparForm();
    inputId.value = '';
    // criar 1 bloco vazio para começar
    eventosContainer.appendChild(criarBlocoEvento({ id: '', titulo: '', inicio: '', fim: '' }));
    garantirBotaoAdd();
    abrirModal();
  });
});

/* Evento: abrir modal para editar — faz fetch dos eventos do DB e cria blocos dinamicamente */
document.querySelectorAll('.btn-icon.edit').forEach(btn => {
  btn.addEventListener('click', async () => {
    titleEl.textContent = 'Editar Vestibular';

    // Preenche campos básicos (atributos data-... no botão)
    inputId.value   = btn.dataset.vestId || '';
    inputNome.value = btn.dataset.nome || '';
    inputTaxa.value = btn.dataset.taxa || '';

    eventosContainer.innerHTML = ''; // limpa
    // remove botão add antigo se existir (será recriado)
    const existingAdd = document.getElementById('btn-add-evento');
    if (existingAdd) existingAdd.remove();

    const vestId = inputId.value;
    if (!vestId) {
      // abre modal vazio
      eventosContainer.appendChild(criarBlocoEvento({ id: '', titulo: '', inicio: '', fim: '' }));
      garantirBotaoAdd();
      abrirModal();
      return;
    }

    try {
      const resp = await fetch(`fetch_events.php?id=${encodeURIComponent(vestId)}`, { credentials: 'same-origin' });
      if (!resp.ok) throw new Error('Erro fetch eventos');
      const events = await resp.json();

      if (!events || events.length === 0) {
        eventosContainer.appendChild(criarBlocoEvento({ id: '', titulo: '', inicio: '', fim: '' }));
      } else {
        events.forEach(ev => {
          eventosContainer.appendChild(criarBlocoEvento({
            id: ev.id || '',
            titulo: ev.titulo || '',
            inicio: ev.inicio || '',
            fim: ev.fim || ''
          }));
        });
      }

      garantirBotaoAdd();
    } catch (err) {
      console.error('Erro ao buscar eventos:', err);
      // fallback: cria bloco vazio
      eventosContainer.appendChild(criarBlocoEvento({ id: '', titulo: '', inicio: '', fim: '' }));
      garantirBotaoAdd();
    }

    abrirModal();
  });
});

/* Fechar modal (botões e clique fora) */
document.querySelector('#modal-vestibular .btn.cancel').addEventListener('click', (e) => {
  e.preventDefault();
  fecharModal();
});
document.querySelector('#modal-vestibular .btn-close').addEventListener('click', (e) => {
  e.preventDefault();
  fecharModal();
});
overlay.addEventListener('click', (e) => {
  if (e.target === overlay) fecharModal();
});

/* Antes do submit: (opcional) podemos validar ou reorganizar nome dos inputs se precisar.
   Aqui mantemos o submit tradicional; o form vai submeter para salvar_vestibular.php.
   O salvar_vestibular.php espera:
   - name="id" (vestibular id)
   - name="nome", name="taxa", ...
   - eventos[][id], eventos[][titulo], eventos[][inicio], eventos[][fim]
*/

</script>


 
</body>
</html>
