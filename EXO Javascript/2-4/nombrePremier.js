// for (let nombre = 2, diviseur, premier; nombre <= 100; nombre++) {
//     diviseur = 2, premier = 0;
//     while (diviseur <= nombre) {
//         if (nombre % diviseur == 0) {
//             premier++;
//         }
//         diviseur++;
//     }

//     if (premier <= 1) {
//         document.write(nombre + " est un nombre premier!<br>");
//     }
// }

let nombre, diviseur, premier;
for (nombre = 2; nombre <= 100; nombre++) {
    for (diviseur = 2, premier = 0; diviseur <= nombre; diviseur++) {
        if (nombre % diviseur == 0) { premier++; }
    }
    if (premier <= 1) {
        document.write(nombre + " est un nombre premier!<br>");
    }
}