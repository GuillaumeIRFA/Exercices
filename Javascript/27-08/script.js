// Declarer un tableau appeler motifsCartes pour y stocker les numero de chaque carte de chacune des paires de cartes
var motifsCarte = [1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9, 10, 10];
// Declarer un tableau appeler EtatsCartes pour y stocker la valeur d'état de chaque carte : 
// * etat  0 : face cachée
// * etat  1 : face visible
// * etat  -1 : enlevée 
var etatsCartes = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
// valeur de départ de chaque carte = 0;

// Declarer un tableau vide pour y stocker les carte retournée
var carteRetournees = [];

// Declarer une variable pour compter le nombre de paire trouver initialisé à zero
var pairesTrouvees = 0;

// Cette variable recupére les elements "img" de chaque cellule du tableau "tapis"
var imgCartes = document.getElementById("tapis").getElementsByTagName("img");
// Cette boucle for ajoutes a chaque carte face caché la propriété noCarte ,elle sera à utilisé comme argument aux fonction majAffichage() et controleJeu()
// Elle ajoute aussi a chaque carte un gestionnaire d'evenements onClick qui appelle la fonction controleJeu()
for (var i = 0; i < imgCartes.length; i++) {
    imgCartes[i].noCarte = i; //Ajout de la propriété noCarte à l'objet img
    imgCartes[i].onclick = function() {
        controleJeu(this.noCarte);
    }
}

//initialiser le jeu 


function majAffichage(noCarte) {
    console.log(etatsCartes);
    switch (etatsCartes[noCarte]) {
        case 0:
            imgCartes[noCarte].setAttribute("src", "fondcarte.png");
            break;
        case 1:
            imgCartes[noCarte].setAttribute("src", "carte" + motifsCarte[noCarte] + ".png");
            break;
        case -1:
            imgCartes[noCarte].style.visibility = "hidden";
            break;
        default:
            imgCartes[noCarte].setAttribute("src", "fondcarte.png");
            break;
    }
    // Tester l'etat de la carte et en fonction de son etat(0, 1 ou -1) afficher soit l'image fondcarte ,soit la face de l'image positionner la ou l'utilisateur a cliquer ,
    // soit cacher l'image  

}

// fonction a appeler quand on a trouver toutes les paires
function rejouer() {
    alert("Bravo !");
    location.reload();
}

// fonction pour initialiser le jeu 
function initialiseJeu() {
    for (var position = motifsCartes.length - 1; position >= 1; position--) {
        var hasard = Math.floor(Math.random() * (position + 1));
        var sauve = motifsCartes[position];
        motifsCartes[position] = motifsCartes[hasard];
        motifsCartes[hasard] = sauve;
    }
}

// fonction de controle principale du jeu 
function controleJeu(noCarte) {

    if (carteRetournees.length < 2) {
        if (etatsCartes[noCarte] == 0) {
            etatsCartes[noCarte] = 1;
            majAffichage(noCarte);
            carteRetournees.push(noCarte);
        }
    }

    if (carteRetournees.length == 2) {
        var nouveauEtat = 0;
        if (motifsCarte[carteRetournees[0]] == motifsCarte[carteRetournees[1]]) {
            nouveauEtat = -1;
            pairesTrouvees++;
        }
        etatsCartes[carteRetournees[0]] = nouveauEtat;
        etatsCartes[carteRetournees[1]] = nouveauEtat;

        // majAffichage(carteRetournees[0]);
        // majAffichage(carteRetournees[1]);
        setTimeout(function() {
            majAffichage(carteRetournees[0]),
                majAffichage(carteRetournees[1]),
                carteRetournees = []
        }, 750);
    }


    if (pairesTrouvees == 10) {
        rejouer();
    }

    // tester si on a retourné moins de 2 cartes 

    // si oui tester si etat de la carte retourné est egale a 0

    // si oui passé l'état de la carte à 1, ajouter la carte aux tableau carteRetournees et mettre a jour l'affichage

    // tester si on a retourner 2 cartes 

    // si oui declarer une variable appeler nouveauEtat initialiser a zero 

    // tester si les deux cartes retournée font la paire

    // si oui modifier nouveauEtat a -1

    // incrementer la variable nbPairesTrouver


    // mettre a jour l'etat des 2 cartes retournées avec la variable nouveauEtat


    // un setTimeout pour mettre a jour l'affichage des 2 carte retournée, reinitialisé le tableau carte retournée
    // et tester si on a trouver 10 paires, si oui on appelle la fonction rejouer()
    // ce setTimeout a un interval de 750 millisecondes

}