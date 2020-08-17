function nombreAleatoire(min, max) {
    let nombre = min + (max - min + 1) * Math.random();
    return Math.floor(nombre);
}

let score = 0;

while (true) {
    let userInput = parseInt(prompt(`(1)Pile ou (2)Face?\nVotre score : ${score}`));
    let pileOuFace = nombreAleatoire(1, 2);

    if (userInput == pileOuFace) {
        score++;
    }
}