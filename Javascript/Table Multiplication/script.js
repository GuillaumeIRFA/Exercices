let nombre, tableau = [];

nombre = parseInt(prompt("Veuillez entrer un nombre : "));
for (i = 1; i <= 10; i++) {
    tableau[i - 1] = nombre * i;
}

for (i = 0; i < tableau.length; i++) {
    document.write(`${i+1} * ${nombre} = ${tableau[i]}<br>`);
}