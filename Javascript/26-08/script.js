// Variables globales
var vBudget = 20;
var vRepas = 0;
var endGame = false;
var nombreJour = 0;

// Affiche le budget
document.getElementById("hBudget").innerHTML = vBudget;

// Capte la passation de commande
document.getElementById("btnCommander").addEventListener("click", acheterSW);

/* Achète le nombre de sandwiches par jour au prix du jour */
function acheterSW() {

    reinitFormu();

    while (!endGame) {

        var prixDuJour = calculerPrixDuJour();

        var nombreSandwich = document.getElementById("hNSandwiches").value;
        if (nombreSandwich < 1) nombreSandwich = 1;

        var totalJour = prixDuJour * nombreSandwich;
        if (totalJour < vBudget) {
            vBudget -= totalJour;
            vRepas++;
        }

        if (vBudget < 1) {
            endGame = true;
            alert("NO MORE MONEY!");
        }

        if (nombreJour == 5 && vRepas < 5) {
            endGame = true;
            alert("Vous n'avez pas réussi à manger 5 repas dans la semaine, vous êtes DCD");
        }

        nombreJour++;
    }

    alert("Vous avez pris " + vRepas + " repas et il vous reste " + vBudget.toFixed(2) + "€");
}

/* Etablit le prix des sandwiches pour un jour */
function calculerPrixDuJour() {
    var prixSW = (Math.random() * (5 - 1) + 1).toFixed(2);
    return prixSW;
}

/* Réinitialise le jeu pour la prochaine commande */
function reinitFormu() {
    vBudget = 20;
    vRepas = 0;
    document.getElementById("hTicket").innerHTML = "";

}