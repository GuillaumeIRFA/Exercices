let diviseur, premier;
for (let nombre = 0; nombre <= 100; nombre++) {
    diviseur = 1, premier = 0;
    do {
        if (nombre % diviseur == 0) {
            premier++;
        }
        diviseur++;
    } while (diviseur <= nombre)

    if (premier <= 2) {
        document.write(nombre + " est un nombre premier!<br>");
    }
}