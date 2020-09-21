// var monNombre = 345;
// var monAutreNombre = 5;

// var resultat1 = monNombre + monAutreNombre;
// var resultat2 = (monAutreNombre + monAutreNombre) * monNombre + monAutreNombre;

// resultat2 = "3455";
// parseInt(resultat2) + 45;
// console.log(parseInt(resultat2) + 45);

document.getElementById("bouton1").onclick = function() {
    document.getElementById("monTitre").innerHTML =
        isNaN(parseInt(document.getElementById("monTitre").innerHTML)) ?
        1 :
        parseInt(document.getElementById("monTitre").innerHTML) + 1;
}

document.getElementById("bouton2").onclick = function() {
    document.getElementById("monTitre").innerHTML =
        isNaN(parseInt(document.getElementById("monTitre").innerHTML)) ?
        2 :
        parseInt(document.getElementById("monTitre").innerHTML) + 2;
}


var maChaine = "10 + 15";
var total = eval(maChaine);