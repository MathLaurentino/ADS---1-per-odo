const arrColors = document.querySelectorAll(".cores");

for(let x=0; x < arrColors.length; x++){
    console.log(arrColors);
    arrColors[x].addEventListener("mouseover", function(){
        changeColor(this.id);
    });
}

function changeColor(color){
    alert(color);



    if (color === "red"){

    }
}