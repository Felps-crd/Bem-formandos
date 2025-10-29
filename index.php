<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/estilos/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Graduate&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/estilos/style-modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.4/dist/sweetalert2.min.css">

    <title>Bem Formandos</title>
</head>
<body>

<!-- Configurações para poder Entrar com o Google -->
<script type="module">
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-app.js";
  import { getAuth, GoogleAuthProvider, signInWithPopup } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-auth.js";

  const firebaseConfig = {
    apiKey: "AIzaSyDmxN8BJ8JLLblq-ZVnJstgG_192bF9Gw8",
    authDomain: "bem-formandos.firebaseapp.com",
    projectId: "bem-formandos",
    storageBucket: "bem-formandos.firebasestorage.app",
    messagingSenderId: "593097423170",
    appId: "1:593097423170:web:f055ece36c03f0d73630db"
  };

  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);
  const provider = new GoogleAuthProvider();

  window.loginWithGoogle = async function () {
    try {
      const result = await signInWithPopup(auth, provider);
      const user = result.user;

      // Cria FormData para enviar via POST
      const formData = new FormData();
      formData.append('user_name', user.displayName);
      formData.append('user_email', user.email);

// Envia para o PHP salvar no banco
const response = await fetch('assets/php/salvar_usuario_google.php', {
  method: 'POST',
  body: formData
});

const data = await response.json(); // <-- transforma o JSON em objeto
console.log(data);
alert(data.msg); // mostra só a mensagem amigável


      // Opcional: recarrega a página
      window.location.reload();

    } catch (error) {
      console.error("Erro no login:", error.message);
      alert("Erro ao entrar com Google: " + error.message);
    }
  }
</script>
<!-- Encerramento das Configurações para poder Entrar com o Google -->


    <div class="container-principal">
        <!-- inicio cabeçalho -->
        <header>
            <div class="logo">
                <a href="#" class="logo">
                <img src="assets/imagens/logo.png" alt="Ícone de formatura">

                <h1>BEM FORMANDOS</h1>

                </a>
            </div>

            <button class="btn-cadastro" data-modal="modal-cadastro">
                Cadastre-se
            </button>
        </header>
        <!-- fim cabeçalho -->

        <!--MODAL CADASTRO-->
       

        <!--Aqui escurece o fundo-->
    <div id="modal-cadastro" class="modal-overlay" 
    style="display: none; position: fixed; top: 0; left: 0; 
    width: 100%; height: 100%; background: hsla(0, 0.00%, 0.00%, 0.60); justify-content: center; align-items: center; z-index: 1000;">
        <!--Aqui escurece o fundo-->

        <!--Configuração das cores do funco da parte de cadastro-->
    <form id="form-cad-user" method="post" style=" padding-top: 20px;
    justify-content: center;
    justify-items: center;
    width: 600px;
    border: none;
    border-radius: 10px;
    background: linear-gradient(90deg, #003366 0%, #0073E6 100%);;">
        <!--Configuração das cores do funco da parte de cadastro-->

        
        <div class="modal-header">
            <button type="button" class="close-modal" onclick="fecharModal('modal-cadastro')">
                <i class="bi bi-arrow-left-circle"></i>
            </button>

            <h1 class="modal-title">CADASTRO</h1>
            <span class="regua"></span>
        </div><!--Fim header modal-->

        <div class="modal-body">
            <div class="input-group">

                <div class="input">
                    <i class="bi bi-person"></i>
                    <input type="text" name="user_name" id="user_name" placeholder="Nome de usuário" required>
                </div>
                <div class="input">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" name="user_email" id="user_email" placeholder="E-mail" required>
                </div>

                <div class="input">

                  <input type="checkbox" id="termos" class="checkbox-personalizado" name="termos" required>
                  <label for="termos">Aceito os <a href="#" onclick="abrirModal('modal-termos'); return false;">Termos e Serviços</a></label>
            </div>

        </div>

            <div class="content-button">
                <input class="btn-cadastrar" name="submit" type="submit" value="Cadastrar E-mail" style="font-size: 20px;">

                <div class="modal-ou">
                    <span class="regua-2"></span><label>ou</label><span class="regua-2"></span>
                </div>

                <button class="btn-google" type="button" onclick="loginWithGoogle()">
                    <i class="bi bi-google"></i>
                    Entrar com google
                </button>
            </div>
        </div>

        <div class="modal-footer">
            <span class="regua"></span>
            <div class="entrar">

            </div>
        </div>

    </form>
</div>
<!--FIM MODAL CADASTRO-->

<!-- ===================== MODAL TERMOS DE USO ===================== -->
<div id="modal-termos" class="modal-overlay" style="display: none; justify-content: center; align-items: center; z-index: 1001;">
    <div class="modal-box" 
         style="max-width: 700px; max-height: 90vh; overflow-y: auto; background: #fff; border-radius: 10px; padding: 20px; position: relative;">

        <!-- Botão de fechar -->
        <button type="button" class="close-modal" onclick="fecharModal('modal-termos')" 
                style="position: absolute; top: 10px; right: 10px; font-size: 24px; border: none; background: none;">&times;</button>

        <!-- Conteúdo do modal -->
        <h2>TERMOS DE USO E POLÍTICA DE PRIVACIDADE</h2>
        <p><strong>Última atualização:</strong> 11 de outubro de 2025</p>

        <h3>1. ACEITAÇÃO DOS TERMOS</h3>
        <p>Ao acessar e usar este site, voltado a facilitar pesquisas sobre vestibulares, você concorda com estes Termos de Uso e com a Política de Privacidade descrita abaixo. Se não concordar, não utilize o site.</p>

        <h3>2. SOBRE O SITE</h3>
        <p>O site tem como objetivo reunir informações públicas sobre vestibulares de diversas instituições de ensino, facilitando a pesquisa e o acesso dos usuários. As informações podem mudar nas fontes originais; fazemos o possível para manter tudo atualizado, mas não garantimos precisão total ou imediata.</p>

        <h3>3. CADASTRO DE USUÁRIO</h3>
        <p>Algumas funcionalidades exigem cadastro. Para criar uma conta pedimos apenas nome e e-mail. O usuário é responsável por manter as informações corretas e pela confidencialidade de suas credenciais de acesso.</p>

        <h3>4. COLETA DE DADOS</h3>
        <ul>
            <li>Nome</li>
            <li>E-mail</li>
        </ul>
        <p>Essas informações são fornecidas voluntariamente no momento do cadastro.</p>

        <h3>5. USO DAS INFORMAÇÕES</h3>
        <ul>
            <li>Criar e manter sua conta;</li>
            <li>Enviar comunicações relacionadas ao site (como atualizações e avisos);</li>
            <li>Melhorar a experiência e o funcionamento da plataforma.</li>
        </ul>
        <p>Nós <em>não vendemos, trocamos ou repassamos seus dados pessoais a terceiros.</em></p>

        <h3>6. ARMAZENAMENTO E SEGURANÇA</h3>
        <p>Seus dados são armazenados de forma segura e acessados apenas por pessoas autorizadas. Adotamos medidas técnicas e administrativas para proteger contra acesso não autorizado, perda, alteração ou divulgação indevida. Contudo, nenhum sistema é 100% seguro.</p>

        <h3>7. DIREITOS DO USUÁRIO</h3>
        <p>Você pode, a qualquer momento:</p>
        <ul>
            <li>Corrigir informações incorretas;</li>
            <li>Solicitar informações sobre como seus dados são utilizados.</li>
        </ul>
        <p>Para isso, envie um e-mail para: <strong>bem.formandos2025@gmail.com</strong></p>

        <h3>8. RESPONSABILIDADE</h3>
        <p>As informações sobre vestibulares são fornecidas apenas como referência. O site não se responsabiliza por decisões tomadas com base nessas informações, nem por eventuais erros, mudanças ou indisponibilidades causadas por fontes externas.</p>

        <h3>9. PROPRIEDADE INTELECTUAL</h3>
        <p>Todo conteúdo original do site (textos, layout, design e funcionalidades) é protegido por direitos autorais. Não é permitido copiar, reproduzir ou redistribuir qualquer parte sem autorização prévia, exceto quando indicado o contrário.</p>

        <h3>10. ALTERAÇÕES NOS TERMOS E POLÍTICA</h3>
        <p>Podemos atualizar estes Termos e esta Política de Privacidade a qualquer momento. As alterações entram em vigor assim que publicadas nesta página. Recomendamos que revise este conteúdo periodicamente.</p>

        <h3>11. CONTATO</h3>
        <p>Em caso de dúvidas, sugestões ou solicitações sobre estes Termos ou sobre a Política de Privacidade, entre em contato pelo e-mail: <strong>bem.formandos2025@gmail.com</strong></p>

    </div>
</div>
<!-- ===================== FIM MODAL TERMOS DE USO ===================== -->



        <!-- inicio principal -->
        <main>
            <section class="intro">
              <div class="container">
                <div class="intro-content">
                    <div class="intro-text">
                      <h2 class="intro-title">Quer saber tudo sobre os principais vestibulares de São Paulo?</h2>
                      <p>
                        Aqui você encontra informações atualizadas sobre provas, inscrições,
                        cronogramas e dicas essenciais para sua aprovação.
                      </p>
                    </div>
                    <div class="intro-img">
                      <div class="img-container">
                        <div class="elementos-flutuantes">
                            <div class="elemento elemento-1"><i class="bi bi-book-fill"></i></div>
                            <div class="elemento elemento-2"><i class="bi bi-award-fill"></i></div>
                            <div class="elemento elemento-3"><i class="bi bi-search"></i></div>
                            <div class="elemento elemento-4"><i class="bi bi-lightbulb-fill"></i></div>
                        </div>
                        <div class="imagem-principal">
                          <i class="bi bi-mortarboard-fill"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

            <section class="vestibulares">
              <div class="container">
                <div class="section-header">
                  <h3 class="section-title">Escolha o seu vestibular e comece sua jornada!</h3>
                  <p class="section-subtitle">Clique no vestibular de sua escolha para acessar informações detalhadas</p>
                </div>
                  <div class="botoes-vestibulares">
                      <a href="vestibulares/enem/home-enem.php" class="enem">Enem</a>
                      <a href="vestibulares/fuvest/home-fuvest.php" class="fuvest">Fuvest</a>
                      <a href="vestibulares/unicamp/home-unicamp.php" class="unicamp">Unicamp</a>
                      <a href="vestibulares/fatec/home-fatec.php" class="fatec">Fatec</a>
                      <a href="vestibulares/unesp/home-unesp.php" class="unesp">Unesp</a>
                      <a href="vestibulares/provao-paulista/home-provao.php" class="provao">Provão Paulista</a>
                  </div>
                </div>
            </section>
        </main>
        <!-- fim principal -->

        <footer class="rodape">
            <div class="text">
                <span>© 2025 Bem Formandos</span>
            </div>
        </footer>
    </div>

    <script src="assets/Javascript/cad-user.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.4/dist/sweetalert2.all.min.js"></script>

    <script>

  function abrirModal(id) {
    const modal = document.getElementById(id);
    if (modal) modal.style.display = "flex";
  }

  function fecharModal(id) {
    const modal = document.getElementById(id);
    if (modal) modal.style.display = "none";
  }

  // Botões que abrem modal com data-modal
  document.querySelectorAll('[data-modal]').forEach(btn => {
    btn.addEventListener('click', () => {
      const modalId = btn.getAttribute('data-modal');
      abrirModal(modalId);
    });
  });

</script>

</body>
</html>