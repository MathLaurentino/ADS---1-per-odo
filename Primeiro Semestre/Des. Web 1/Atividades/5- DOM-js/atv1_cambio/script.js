function calcularValor() {
    let valorProduto = document.querySelector("#valor_produto").value
    let cambio = document.querySelector("#cambio").value

    resultado = valorProduto * cambio;

    let valorReal = document.querySelector("#valor_real")
    valorReal.innerHTML = "Valor do produto em real é de: " + resultado;
}

// ------- outra forma de fazer --------

const botao = document.querySelector("#botao");

botao.addEventListener("click", function() {
    // calcularValor();
});
