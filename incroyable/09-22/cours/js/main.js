// $("#resultat") = "coucou";
console.dir($("#resultat"));


$("#charles").click(function() {

    var monVoisin = $(this).next().html();
    $("#resultat").html(`Mon voisin de droite s'appelle ${monVoisin}`);

});

$("#joel").click(function() {

    var maBoite = $(this).parent().attr("class");
    $("#resultat").html(`Je suis contenu dans ${maBoite}`);

});

$("#clement").click(function() {

    var monPrenom = $("#clement").html();
    var monParent = $("#clement").parent().attr("class");
    var monCousin = $("#clement").parent().next().children().next().html();
    var leParentDeMonCousin = $("#clement").parent().next().attr("class");

    $("#resultat").html(`Je m'appelle ${monPrenom}, j'habite dans ${monParent}, mon cousin ${monCousin} habite dans ${leParentDeMonCousin}.`);
});

$("#erwan").click(function() {
    $(this).next().css("background-color", "lightgray");
});

$(".cercle").click(function() {
    if ($(this).next().length) {
        $(this).next().css("background-color", "lightgray");
    } else {
        $(this).prev().css("background-color", "lightgray");
    }
});