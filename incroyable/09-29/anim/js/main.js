$(window).scroll(function() {
    if ($(window).scrollTop() > $(".header").height()) {
        $('.navbar').addClass("sticky");
        $('.navbar').children().children().first().removeClass("inactive");
    } else {
        $('.navbar').removeClass("sticky");
        $('.navbar').children().children().first().addClass("inactive");
    }
});


// $(window).scroll(function() {
//     $(".article").map(function() {
//         if ($(window).scrollTop() + $(window).height() + 300 > $(this).position().top + $(this).height() && !$(this).hasClass("articleSlideIn")) {

//             $(this).toggleClass("articleSlideIn");

//         } else if ($(window).scrollTop() + $(window).height() + 300 < $(this).position().top + $(this).height() && $(this).hasClass("articleSlideIn")) {

//             $(this).toggleClass("articleSlideIn");

//         }
//     });
// });