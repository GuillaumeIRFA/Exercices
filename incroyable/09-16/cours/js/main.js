function changeCouleur() {
    document.getElementById("monCarre").style.backgroundColor = "blue";
}

document.getElementById("monBouton").onclick = function() {
    changeCouleur();
}

// document.getElementById("bouton2").onclick = function() {

//     let currentColor = window.getComputedStyle(document.getElementById("carre2"), null).getPropertyValue("background-color");
//     if (currentColor == "rgb(255, 0, 0)") {
//         document.getElementById("carre2").style.backgroundColor = "blue";
//     } else if (currentColor == "rgb(0, 0, 255)") {
//         document.getElementById("carre2").style.backgroundColor = "red";
//     }
// }


document.getElementById('bouton2').onclick = function() {

    if (document.getElementById('carre2').style.backgroundColor == "red") {
        document.getElementById('carre2').style.backgroundColor = "blue";
    } else {
        document.getElementById('carre2').style.backgroundColor = "red";
    }
}





let liste1 = ["courgette", "brocoli", "travers de porc"];

let liste2 = {
    uno: "pêche",
    dos: "banana-split",
    mhh: "tiramisu"
};

var