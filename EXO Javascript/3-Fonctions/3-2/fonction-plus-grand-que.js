function plusGrandQue(nombre1, nombre2) {
    if (isNaN(nombre1) || isNaN(nombre2)) {
        return "Veuillez recommencer en entrant des nombres valides"
    } else if (nombre1 === nombre2) {
        return nombre1 + " est égal à" + nombre2;
    } else if (nombre1 > nombre2) {
        return nombre1 + " est plus grand que " + nombre2;
    } else if (nombre2 > nombre1) {
        return nombre2 + " est plus grand que " + nombre1;
    } else {
        return "Il semblerait que nous ayons quitter le continuum espace-temps";
    }
}

alert(plusGrandQue(parseInt(prompt('Premier nombre? ')), parseInt(prompt('Deuxième nombre ? '))));