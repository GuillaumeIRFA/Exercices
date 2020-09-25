let backgroundImageUrls = [
    "img/beast_magic.jpg",
    "img/between_breaths.jpg",
    "img/bound_hammer.jpg",
    "img/equinox.jpg",
    "img/one_terrible_scream.jpg",
    "img/wishes_of_sorrow.jpg"
];

function changeBackground(urlArray) {
    let i = 1;
    setInterval(function() {
        $(".header").css("background-image", `url(${urlArray[i++]})`);
        if (i == urlArray.length) i = 0;
    }, 2000);
}

changeBackground(backgroundImageUrls);

$(".sliderArrow").click(function() {
    let direction;
    let offset = 640;
    if ($(this).hasClass("sliderArrowLeft")) {
        direction = "+";
    } else {
        direction = "-";
    }
    let slider = $(this).siblings(".sliderImagesContainer");
    let currentLeftPos = parseInt(slider.css("left"));
    let newLeftPos = eval(currentLeftPos + direction + offset);

    if (newLeftPos <= eval("-" + slider.width())) newLeftPos = 0;
    if (newLeftPos >= 640) newLeftPos = eval("-" + slider.width() + "+640");
    console.log(newLeftPos);
    console.log(slider.width());
    slider.css("left", `${newLeftPos}px`);
});

$(".gauche").click(function() {
    var imageEnCours = $(this).siblings("div").find(".visible");
    var imagePrecedente = $(this).siblings("div").find(".visible").prev();
    imageEnCours.removeClass("visible");
    if (imagePrecedente.length) {
        imagePrecedente.addClass("visible");
    } else {
        imageEnCours.siblings().last().addClass("visible");
    }
});

$(".droite").click(function() {
    var imageEnCours = $(this).siblings("div").find(".visible");
    var imageSuivante = $(this).siblings("div").find(".visible").next();
    imageEnCours.removeClass("visible");
    if (imageSuivante.length) {
        imageSuivante.addClass("visible");
    } else {
        imageEnCours.siblings().first().addClass("visible");
    }
});