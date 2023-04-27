function alterSizeText(){
    const texto = document.querySelector("p");
    const botao = document.querySelector("button");

    if (texto.style.fontSize !== "30px") {
        texto.style.fontSize = "30px";
        botao.innerText = "Diminuir Texto"
    } else {
        texto.style.fontSize = "20px";
        botao.innerText = "Aumentar Texto"
    }
}