function perimAire(largeur, longueur) {
    alert("Le périmètre est égal à : " + (largeur + longueur) * 2 + " unitées\n" + "La surface est égal à : " + (largeur * longueur) + " unitées²");
}

perimAire(parseInt(prompt('Largeur du rectangle ? ')), parseInt(prompt('Longueur du rectangle ? ')));