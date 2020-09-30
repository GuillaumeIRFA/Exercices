$(".moins").click(function() {
    let newVal = eval($(this).siblings("input").val() + "-1");
    if (newVal)
        $(this).siblings("input").val(newVal);
});

$(".plus").click(function() {
    let newVal = eval($(this).siblings("input").val() + "+1");
    $(this).siblings("input").val(newVal);
});

var produits = [
    ["des", 300],
    ["schnitzel", 535]
];

var panier = [];

$('.btn-success').click(function() {

    var indexProduit = eval($(this).attr("id"));
    var produit = produits[indexProduit];

    var produitToAdd = Array(produit);

    console.log(panier);
});