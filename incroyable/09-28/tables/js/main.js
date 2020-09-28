function remplirLeTableau(tab) {
    document.getElementById("monBody").innerHTML = "";
    for (var i = 0; i < tab.length; i++) {
        document.getElementById("monBody").innerHTML += "<tr><td>" + tab[i][0] + "</td><td>" + tab[i][1] + "</td><td>" + tab[i][2] + "</td><td><button class='btn btn-danger'>DELETE</button></td></tr>";
    }
}

var lesGens = [
    ["Luc", "34 ans", "comptable"],
    ["Marla", "28 ans", "Professeure"],
    ["Marc", "52 ans", "Chirurgien obstétriste du bulbe rachidien"],
    ["Marcouille", "55 ans", "Bulbe rachidien"],
    ["Marcette", "544 ans", "Chirurgien du bulbe rachidien"],
    ["Marco", "39 ans", "Obstétriste du bulbe rachidien"],
];

var lesAutresGens = [
    ["Cedric", "34 ans", "comptable"],
    ["Paul", "28 ans", "Professeure"],
    ["Jacques", "52 ans", "Chirurgien obstétriste du bulbe rachidien"],
    ["Marina", "12 ans", "Capitaine du Titanic"],
    ["Pascaline", "52 ans", "Chirurgien obstétriste du bulbe rachidien"],
    ["Maxime", "52 ans", "Dentiste"],
    ["Lucienne", "52 ans", "Plasticienne"],
    ["Claudio", "52 ans", "Acteur"],
];

var encoreDesAutresGens = [
    ["Sonia", "34 ans", "comptable"],
    ["Michel", "28 ans", "Professeure"],
    ["Gaetan", "18 ans", "Pilote"],
    ["Pascal", "12 ans", "Capitaine du Titanic"],
    ["Sophie", "67 ans", "Chirurgien obstétriste du bulbe rachidien"],
    ["Patricia", "22 ans", "Couturiere"],
    ["Mael", "35 ans", "Dirige une secte"],
    ["Bastien", "52 ans", "Plombier"],
];

var lesGensAjoutables = [
    ["François", "14 ans", "Ministre de l'intérieur"],
    ["Jean-Pastèque", "270 ans", "Waifu"],
    ["François", "14 ans", "Ministre de la jeunesse et des sports"]
];

// document.getElementById("lesGens").onclick = function() {
//     remplirLeTableau(lesGens);
// };
// document.getElementById("lesAutresGens").onclick = function() {
//     remplirLeTableau(lesAutresGens);
// };
// document.getElementById("encoreDesAutresGens").onclick = function() {
//     remplirLeTableau(encoreDesAutresGens);
// };



function remplirLeTroisiemeTableau(tab) {

    document.getElementById("table1").innerHTML = "";

    for (var i = 0; i < tab.length; i++) {
        document.getElementById("table1").innerHTML += "<tr><td>" + tab[i][0] + "</td><td>" + tab[i][1] + "</td><td>" + tab[i][2] + "</td><td><button class='btn btn-danger delete'>DELETE</button></td></tr>";
    }


    $(".delete").click(function() {

        let htmlContent = [];
        $(this).parent().siblings().map(function() {
            htmlContent.push($(this).html());
        });

        for (i = 0; i < tab.length; i++) {
            console.log(htmlContent[0], tab[i][0]);
            if (htmlContent[0] == tab[i][0] &&
                htmlContent[1] == tab[i][1] &&
                htmlContent[2] == tab[i][2]) {
                tab.splice(i, 1);
                break;
            }
        }

        remplirLeTroisiemeTableau(tab);
        // $(this).parent().parent().remove();

    });

}

remplirLeTroisiemeTableau(lesGens);

$(".ajouterDesGens").click(function() {

    var index = $(this).attr("index");
    var individuAjouted = lesGensAjoutables[index];

    lesGens.push(individuAjouted);
    remplirLeTroisiemeTableau(lesGens);
});