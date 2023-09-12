function validar() {

    // const nome = document.querySelector("#nome").value;
    const nome = document.getElementById("nome").value.trim();
    const idade = document.getElementById("idade").value.trim();

    if (nome == "") {
        exibeMensagem("msg", "Informe o nome");
        return false;
    }
    
    if (idade == "" ) {
        exibeMensagem("msg", "Informe o idade");
        return false;
    }
    
    return true;
    
}

function exibeMensagem(id, msg) {

    let msgText = document.getElementById(id);

    msgText.innerText = msg;


}