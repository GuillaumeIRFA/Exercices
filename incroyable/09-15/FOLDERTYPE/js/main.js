document.getElementById("monBouton").onclick = function() {

    var sauce = document.getElementById("champ").value;
    faireDesPates(sauce);

}


function faireDesPates(sauce) {

    var recette = "fait bouillir de l'eau et mets des pâtes et ensuite ajoute un pot de sauce " + sauce + " Auchan";
    document.getElementById("leTexte").innerHTML = recette;

}

function faisDuRiz() {
    var recette = "Mets du riz dans l'autocuiseur et tais-toi."
    document.getElementById("leTexte").innerHTML = recette;
}