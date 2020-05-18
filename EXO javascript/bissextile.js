let annee = parseInt(prompt("Veuillez entrer une année : "));

if (((annee % 4) == 0 && (annee % 100) != 0) || (annee % 400) == 0) {
    alert("L'année : " + annee + " est bissextile! :)");
} else {
    alert("L'année : " + annee + " n'est pas bissextile! :(");
}