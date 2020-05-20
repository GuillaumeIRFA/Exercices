let prenoms = [],
    prenom,
    proceed = true;

while (proceed) {
    prenom = prompt("Entrez un prénom : ");
    console.log(prenom);
    if (prenom) {
        prenoms.push(prenom);
    } else {
        proceed = false;
    }
}

if (prenoms) {
    let prenomString = prenoms.join(" ");
    // for (let i = 0; i < prenoms.length; i++) {
    // affichagePrenoms += prenoms[i] + " ";
    // }
    alert(prenomString);
} else {
    alert("Il n'y a aucun prénoms!");
}