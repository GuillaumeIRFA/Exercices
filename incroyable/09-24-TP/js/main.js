$(".item").click(function() {
    $(this).siblings(".active").toggleClass("active");
    $(this).toggleClass("active");
});

$(window).scroll(function() {
    $(".article").map(function() {
        if ($(window).scrollTop() + $(window).height() > $(this).position().top + $(this).height() && !$(this).hasClass("articleSlideIn")) {

            $(this).toggleClass("articleSlideIn");

        } else if ($(window).scrollTop() + $(window).height() < $(this).position().top + $(this).height() && $(this).hasClass("articleSlideIn")) {

            $(this).toggleClass("articleSlideIn");

        }
    });
});