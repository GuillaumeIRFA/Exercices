let compteur = 0;
let tableauNoms = [];

while (true) {
    let choice = parseInt(prompt(`Veuillez entrer votre choix`));
    if (!choice) {
        alert("Fin");
        break;
    } else if (choice == 1) {
        compteur++;
        alert(`Le choix 1 a été saisi ${compteur} fois`)
    } else {
        tableauNoms.push(prompt("Veuillez entrer le nom d'un personnage célèbre!"));
        let affichageNoms = '';
        for (let i = 0; i < tableauNoms.length; i++) {
            affichageNoms += `${i+1} : ${tableauNoms[i]} \n`;
        }
        alert(affichageNoms);
    }
}