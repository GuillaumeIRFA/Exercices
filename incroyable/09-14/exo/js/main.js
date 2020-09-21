// Méthode barbare xD
bouton1.onclick = function() {
    document.getElementById("salut").innerHTML = "Waow!";
}


// Méthode normale
document.getElementById("bouton2").onclick = function() {
    document.getElementById("prenom").innerHTML = `Salut je m'appelle ${document.getElementById("prenom").innerHTML} et je n'aime pas mon prenom`;
}

document.getElementById("bouton3").onclick = function() {
    document.getElementById("paragrapheVide").innerHTML = "<h1>Magie ! Voilà du text en plus</h1>";
}

document.getElementById("bouton4").onclick = function() {
    document.getElementById("pleinDeTexte").style.visibility = "hidden";
    document.getElementById("pleinDeTexte").hidden = true;
}