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
    let slider = $(this).siblings(".sliderImagesContainer");
    let copySlider = slider.clone();

    let sliderWidth = slider.width();
    let imageCount = slider.children().length;
    let imageWidth = slider.width() / imageCount;
    let currentImage = Math.round(parseInt(slider.css("left")) / imageWidth);

    if ($(this).hasClass("sliderArrowLeft")) {
        direction = "+";
    } else {
        direction = "-";
    }
    let newLeftPos = eval(currentImage * imageWidth + direction + imageWidth);

    if (newLeftPos <= eval("-" + sliderWidth)) {
        // slider.children(`img:nth-of-type(${(Math.abs(currentImage) + 1) % 6 + 1})`).clone().appendTo(slider);
        newLeftPos = 0;
    }
    if (newLeftPos >= imageWidth) {
        // slider.children(`img:nth-of-type(${(Math.abs(currentImage) + 1) % 6 + 1})`).clone().prependTo(slider);
        newLeftPos = eval("-" + sliderWidth + "+640");
    }
    slider.css("left", `${newLeftPos}px`);
});

$(".gauche").click(function() {
    var imageEnCours = $(this).siblings("div").find(".visible");
    var imagePrecedente = imageEnCours.prev();
    if (imagePrecedente.length) {
        imagePrecedente.addClass("visible");
    } else {
        imageEnCours.siblings().last().addClass("visible");
    }
    imageEnCours.removeClass("visible");
});

$(".droite").click(function() {
    var imageEnCours = $(this).siblings("div").find(".visible");
    var imageSuivante = imageEnCours.next();
    if (imageSuivante.length) {
        imageSuivante.addClass("visible");
    } else {
        imageEnCours.siblings().first().addClass("visible");
    }
    imageEnCours.removeClass("visible");
});