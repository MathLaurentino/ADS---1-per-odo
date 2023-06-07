$(".submit").on("click", function(){

    const valor = $("#valor" + this.id).val();
    const quantidade = $("#quantidade" + this.id).val();

    calculoPreco(valor, quantidade, this.id);
});

function calculoPreco(valor, quantidade, id){

    const preco = valor * quantidade;

    $("#preco"  + id).text(preco);
    $("#preco"  + id).css("background-color", "lightgreen");

}


$(".calcular").on("click", function(){
    calcularSoma();
});

function calcularSoma(){

    const valor1 =  $("#valor1").val();
    const quantidade1 = $("#quantidade1").val();

    const valor2 =  $("#valor2").val();
    const quantidade2 = $("#quantidade2").val();

    const valor3 =  $("#valor3").val();
    const quantidade3 = $("#quantidade3").val();

    const soma = (valor1 * quantidade1) + (valor2 * quantidade2) +  (valor3 * quantidade3);

    $(".divSoma").text("Valor total: R$ " + soma);
}




