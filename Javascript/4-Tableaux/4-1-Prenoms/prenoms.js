let prenoms = [],
    prenom,
    proceed = true;

while (proceed) {
    prenom = prompt("Entrez un prénom : ");
    if (prenom) {
        prenoms.push(prenom);
    } else {
        proceed = false;
    }
}

if (prenoms.length > 0) {
    alert(prenom.join(" "));
} else {
    alert("Il n'y a aucun prénoms!");
}