const headerBackground = ["img/background.jpg", "img/background2.jpg", "img/background3.jpg", "img/background4.jpg"];

function changeBackground() {
    let i = 1;
    setInterval(function() {
        if (i >= headerBackground.length) i = 0;
        $(".header").css("background-image", `url(${headerBackground[i++]})`);
    }, 5000);
}

changeBackground();

$(".arrowLeft").click(function() {
    let imageEnCours = $(this).siblings("img").not(".itemImageHidden");
    $(imageEnCours).addClass("itemImageHidden");
    if ($(imageEnCours).prev("img").length) {
        $(imageEnCours).prev().removeClass("itemImageHidden")
    } else {
        $(imageEnCours).siblings("img").last().removeClass("itemImageHidden");
    }
});

$(".arrowRight").click(function() {
    let imageEnCours = $(this).siblings("img").not(".itemImageHidden");
    $(imageEnCours).addClass("itemImageHidden");
    if ($(imageEnCours).next("img").length) {
        $(imageEnCours).next().removeClass("itemImageHidden");
    } else {
        $(imageEnCours).siblings("img").first().removeClass("itemImageHidden");
    }
});


$(window).scroll(function() {
    if ($(window).scrollTop() + $(window).height() >= $(document).height() - 1) {
        console.log("yep");
        $(".itemsGroupHidden").first().removeClass("itemsGroupHidden");
    }
})