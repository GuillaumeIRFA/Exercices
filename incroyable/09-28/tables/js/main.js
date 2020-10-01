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
        document.getElementById("table1").innerHTML += "<tr><td>" + tab[i][0] + "</td><td>" + tab[i][1] + "</td><td>" + tab[i][2] + "</td><td><button class='btn btn-danger delete'>DELETE</button></td><td><button class='btn btn-warning update' data-index='" + i + "'>UPDATE</button></td></tr>";
    }


    $(".delete").click(function() {

        let htmlContent = [];
        $(this).parent().siblings().map(function() {
            htmlContent.push($(this).html());
        });

        for (i = 0; i < tab.length; i++) {
            if (htmlContent[0] == tab[i][0] &&
                htmlContent[1] == tab[i][1] &&
                htmlContent[2] == tab[i][2]) {
                tab.splice(i, 1);
                break;
            }
        }

        remplirLeTroisiemeTableau(tab);

    });

    $(".update").click(function() {
        let temp = $(this).parent().parent().html();
        let index = $(this).data("index");
        let mySiblings = $(this).parent().siblings();

        for (i = 0; i < 3; i++) {
            $(mySiblings[i]).html(`<input type="text" value="${tab[index][i]}">`);
        }

        // $(this).toggleClass("update save btn-warning btn-success").html("SAVE");
        $(this).parent().prev().html(`<button class="btn btn-danger cancel" data-index="${index}">CANCEL</button>`);
        $(this).replaceWith(`<button class="btn btn-success save" data-index="${index}">SAVE</button>`);


        $(".save").click(function() {
            let indexSave = $(this).data("index");

            let newName = $(this).parent().parent().children().first().children().val();
            let newAge = $(this).parent().parent().children().first().next().children().val();
            let newJob = $(this).parent().parent().children().first().next().next().children().val();

            tab[indexSave] = [newName, newAge, newJob];

            remplirLeTroisiemeTableau(tab);

        });


        $(".cancel").click(function() {
            remplirLeTroisiemeTableau(tab);
        });
    });

}

remplirLeTroisiemeTableau(lesGens);

$(".ajouterDesGens").click(function() {

    var index = $(this).attr("index");
    var individuAjouted = lesGensAjoutables[index];

    lesGens.push(individuAjouted);
    remplirLeTroisiemeTableau(lesGens);
});


// $("form").submit(function(e) {
//     e.preventDefault();
// });

$('.enregistrer').click(function(event) {
    event.preventDefault();

    let personne = [];
    let isValid = true;

    personne.push($(this).siblings(".inputNom").val());
    personne.push($(this).siblings(".inputAge").val());
    personne.push($(this).siblings(".inputProfession").val());

    for (i = 0; i < personne.length; i++) {
        if (personne[i] == "") isValid = false;
    }

    if (personne.length != 3) isValid = false;

    if (isValid) {
        lesGens.push(personne);
        remplirLeTroisiemeTableau(lesGens);
    }
});