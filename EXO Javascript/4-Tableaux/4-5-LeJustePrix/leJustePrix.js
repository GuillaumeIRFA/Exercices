//Génère un nombre aléatoire compris entre {min} et {max}
function rng(min, max) {
    return Math.floor(min + (max - min + 1) * Math.random());
}

let mini = parseInt(prompt("Entrez la valeur minimum du Juste Prix")),
    maxi = parseInt(prompt("Entrez la valeur maximum du Juste Prix"));
let leJustePrix = rng(mini, maxi);
let found = false;
let nombre = parseInt(prompt("Veuillez entrer un nombre entre " + mini + " et " + maxi));

do {
    if (nombre === leJustePrix) {
        alert("Féliciations! Vous avez trouvé le Juste Prix : " + nombre);
        found = true;
    } else if (nombre > leJustePrix) {
        nombre = parseInt(prompt(nombre + "? C'est moins !"));
    } else if (nombre < leJustePrix) {
        nombre = parseInt(prompt(nombre + "? C'est plus !"));
    }
} while (!found)