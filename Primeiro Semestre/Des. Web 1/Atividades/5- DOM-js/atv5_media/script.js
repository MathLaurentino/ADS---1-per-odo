function calcularMedia() {
    
    const inputConceitos = document.querySelectorAll("input");
    let resultado = document.querySelector("#result"); 
    let conceitos = [];
    let notas = [];
    let media = 0;

    inputConceitos.forEach((conceito) => {
        conceitos.push(conceito.value)
    });

    if (verificarConceitos(conceitos)) {

        notas = conceitos.map((conceito) => {

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

            return nota;
        });

        for(let x=0; x < notas.length; x++) {
            media += notas[x];
        }

        media = media / notas.length;

        resultado.innerText = "Média do aluno: " + media;
        resultado.style.color = "gree";
        
    } else {
        resultado.innerText = "conceito(s) inválido(s)";
        resultado.style.color = "red";
    }
}


function verificarConceitos(conceitos) {
    validos = ["a", "A", "b", "B", "c", "C", "d", "D"];

    const result = conceitos.every((conceito) => {
        return validos.includes(conceito);
    });

    return result;
}