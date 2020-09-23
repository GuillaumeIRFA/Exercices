$(".item").click(function() {
    $(this).siblings(".active").toggleClass("active");
    $(this).toggleClass("active");
});