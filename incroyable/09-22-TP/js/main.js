$(".cercle").click(function() {
    $(this).toggleClass("oval");
    $(this).parent().toggleClass("col-4");
    $(this).parent().toggleClass("col");
    $(this).prev().toggleClass("show");
    $(this).next().toggleClass("show");
})