$(".cores").on("mouseover", function(){
    changeBackground(this.id);
});

$(".cores").on("mouseout", function(){
    whiteBackground(this.id);
});

const arrDivs = $(".componente");

function changeBackground(colorId){
    colors = ["red", "yellow", "green", "blue"];
    divId = Number(colorId) + 2;
    arrDivs[divId].style.backgroundColor = colors[colorId];
}

function whiteBackground(colorId){
    divId = Number(colorId) + 2;
    arrDivs[divId].style.backgroundColor = "white"
}

