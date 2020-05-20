function votreNombril() {
    let nombre = parseInt(prompt("Veuillez entrer un nombre : "));
    while (nombre == undefined || isNaN(nombre)) {
        nombre = parseInt(prompt("Veuillez entrer un nombre valide : "));
    }
    return nombre;
}

alert(votreNombril());