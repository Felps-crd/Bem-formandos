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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined">
    <link rel="stylesheet" href="assets/estilos/style-home-user.css">
    <title>Bem Formandos</title>
</head>
<body>
    <div class="container-principal">
        <!-- inicio cabeçalho -->
        <header>
            <div class="logo">
                <img src="assets/imagens/logo-temp 1.png" alt="Ícone de formatura">
                <h1>Bem Formandos</h1>
            </div>
            <div class="icones-cabecalho">
            <a href="#"><span class="material-symbols-outlined">home</span></a>
            <div class="perfil-dropdown">
            <span class="material-symbols-outlined" id="abre-perfil">person</span>

            <div id="perfil">
                <div style="text-align:center;">
                    <img src="https://placehold.co/190x190" alt="foto-perfil" id="foto-perfil" style="cursor:pointer;">
                    <br>
                    <input type="file" id="input-foto" accept="image/*" style="display:none">
                        <div id="opcoes-foto" style="display:none;">
                            <button type="button" id="btn-trocar-foto">Trocar foto</button>
                            <button type="button" id="btn-remover-foto">Remover foto</button>
                        </div>
                </div>
                <h1 id="nome-perfil">Nome do Aluno</h1>
                <p id="email-perfil">Email: exemplo@email.com</p>
                <button type="button" id="btn-alterar-senha">Alterar senha</button>
                <div id="form-senha" style="display:none; text-align:center; margin-top:20px;">
                    <input type="password" id="nova-senha" placeholder="Nova senha" required>
                    <button type="button" id="salvar-senha">Salvar</button>
                </div>
            </div>
        </div>
      </div>  
        </header>
        <!-- fim cabeçalho -->
        

        <!-- inicio principal -->
        <main>
            <section class="intro">
                <div class="text-box">
                  <h2>Quer saber tudo sobre os principais vestibulares de São Paulo?</h2>
                  <p>
                    Aqui você encontra informações atualizadas sobre provas, inscrições,
                    cronogramas e dicas essenciais para sua aprovação.
                  </p>
                </div>
                <img src="assets/imagens/img1.png" alt="Imagem representativa">
              </section>

            <section class="vestibulares">
                <p>Escolha o seu vestibular e comece sua jornada rumo à universidade!</p>
                <div class="botoes-vestibulares">
                    <a href="home-enem.html" class="enem">Enem</a>
                    <a href="#" class="fuvest">Fuvest</a>
                    <a href="#" class="unicamp">Unicamp</a>
                    <a href="#" class="fatec">Fatec</a>
                    <a href="#" class="unesp">Unesp</a>
                    <a href="#" class="ufesp">Ufesp</a>
                    <a href="#" class="sisu">Sisu</a>
                    <a href="#" class="prouni">ProUni</a>
                    <a href="#" class="fies">Fies</a>
                    <a href="#" class="provao">Provão<br>Paulista</a>
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
</body>
<script>
    const btnPerfil = document.getElementById('abre-perfil');
    const perfil = document.getElementById('perfil');

    btnPerfil.addEventListener('click', function () {
        perfil.classList.toggle('aberto');
        btnPerfil.classList.toggle('ativo');
    });

    // Mostrar opções ao clicar na foto
    let opcoesVisiveis = false;
    const fotoPerfil = document.getElementById('foto-perfil');
    const opcoesFoto = document.getElementById('opcoes-foto');

    fotoPerfil.onclick = function () {
        opcoesVisiveis = !opcoesVisiveis;
        opcoesFoto.style.display = opcoesVisiveis ? 'block' : 'none';
    };

    // Trocar foto
    document.getElementById('btn-trocar-foto').onclick = function () {
        document.getElementById('input-foto').click();
    };

    document.getElementById('input-foto').onchange = function (e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (evt) {
                fotoPerfil.src = evt.target.result;
            };
            reader.readAsDataURL(file);
        }
    };

    // Remover foto
    document.getElementById('btn-remover-foto').onclick = function () {
        fotoPerfil.src = "https://placehold.co/190x190";
    };

    // Alterar senha
    document.getElementById('btn-alterar-senha').onclick = function () {
        const formSenha = document.getElementById('form-senha');
        if (formSenha.style.display === 'block') {
            formSenha.style.display = 'none';
            perfil.style.height = '500px';
        } else {
            formSenha.style.display = 'block';
            perfil.style.height = '570px';
        }
    };

    // Salvar nova senha
    document.getElementById('salvar-senha').onclick = function () {
        const novaSenha = document.getElementById('nova-senha').value;
        if (novaSenha.length < 6) {
            alert('A senha deve ter pelo menos 6 caracteres.');
            return;
        }
        alert('Senha alterada (simulação).');
        document.getElementById('form-senha').style.display = 'none';
        document.getElementById('nova-senha').value = '';
    };
</script>
</html>