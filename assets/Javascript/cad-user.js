const formCadUser = document.getElementById("form-cad-user");

if(formCadUser){
    formCadUser.addEventListener("submit", async (e) => {
        e.preventDefault(); //evita reload da pagina 
        
        const dadosForm = new FormData(formCadUser);

        try{
            const dados = await fetch("assets/php/cad-user.php", {
                method: "POST",
                body: dadosForm
            });

            const resposta = await dados.json();

            if(resposta['status']){
                //sucesso ao cadastrar
                Swal.fire({
                    title: "E-mail cadastrado com sucesso",
                    text: resposta['msg'],
                    icon: "success"
                });
                formCadUser.reset(); // limpa o form
            }else{
                Swal.fire({
                    title: "Falha ao cadastrar",
                    text: resposta['msg'],
                    icon: "error"
                });
            }

        } catch (erro) {
            Swal.fire({
                title: "Erro",
                text: "Não foi possível processar o cadastro. Tente novamente.",
                icon: "error"
            });
            console.error(erro);
        }


        });
}