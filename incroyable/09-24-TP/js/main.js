$(".item").click(function() {
    $(this).siblings(".active").toggleClass("active");
    $(this).toggleClass("active");
});

$(window).scroll(function() {
    $(".article").map(function() {
        if ($(window).scrollTop() + $(window).height() + 300 > $(this).position().top + $(this).height() && !$(this).hasClass("articleSlideIn")) {

            $(this).toggleClass("articleSlideIn");

        } else if ($(window).scrollTop() + $(window).height() + 300 < $(this).position().top + $(this).height() && $(this).hasClass("articleSlideIn")) {

            $(this).toggleClass("articleSlideIn");

        }
    });
});


$(".articleArrow").click(function() {

    let direction;
    let slider = $(this).siblings(".articleImagesContainer");
    let sliderWidth = slider.width();
    let imageCount = slider.children().length;
    let imageWidth = slider.width() / imageCount;
    let currentImage = Math.round(parseInt(slider.css("left")) / imageWidth);

    if ($(this).hasClass("articleArrowLeft")) {
        direction = "+";
    } else {
        direction = "-";
    }
    let newLeftPos = eval(currentImage * imageWidth + direction + imageWidth);

    if (newLeftPos <= eval("-" + sliderWidth)) {
        newLeftPos = 0;
    }
    if (newLeftPos >= imageWidth) {
        newLeftPos = eval("-" + sliderWidth + "+" + imageWidth);
    }

    slider.css("left", `${newLeftPos}px`);

});