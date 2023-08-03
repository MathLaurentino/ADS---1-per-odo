function converterNota() {
    
    const conceito = document.querySelector("input").value;
    let resultado = document.querySelector("#result"); 

    let nota;
    if (conceito === "A" || conceito === "a") {
        nota = 10;
    } else if(conceito === "B" || conceito === "b"){
        nota = 8;
    } else if(conceito === "C" || conceito === "c"){
        nota = 6;
    } else if(conceito === "D" || conceito === "d"){
        nota = 3;
    } 

    if (typeof nota === "number") {
        resultado.innerText = "a nota do aluno é: " + nota;
        resultado.style.color = "green";
    } else {
        resultado.innerText = "Conceito inválido";
        resultado.style.color = "red";
    }
}