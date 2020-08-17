let score = 0;
let statutMessage = "";

function nombreAleatoire(min, max) {
    let nombre = min + (max - min + 1) * Math.random();
    return Math.floor(nombre);
}

while (true) {
    let userInput = parseInt(prompt(`(1)Pierre, (2)Feuille, (3)Ciseaux?\nVotre score : ${score}\n${statutMessage}`));
    let shifumi = nombreAleatoire(1, 3);

    switch (shifumi) {
        case 1:
            if (userInput == 1) statutMessage = "Égalité!";
            if (userInput == 2) {
                statutMessage = "Victoire!";
                score++;
            }
            if (userInput == 3) {
                statutMessage = "Défaite!";
                score--;
            }
            break;
        case 2:
            if (userInput == 1) {
                statutMessage = "Défaite!";
                score--;
            }
            if (userInput == 2) statutMessage = "Égalité!";
            if (userInput == 3) {
                statutMessage = "Victoire!";
                score++;
            }
            break;
        case 3:
            if (userInput == 1) {
                statutMessage = "Victoire!";
                score++;
            }
            if (userInput == 2) {
                statutMessage = "Défaite!";
                score--;
            }
            if (userInput == 3) statutMessage = "Égalité!";
            break;
    }
}