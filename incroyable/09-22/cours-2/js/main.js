$("#cercle-1").click(function() {
    $(this).animate({ "height": "400px", "width": "400px" }, 2000, "swing", function() {
        $(this).css("background-color", "red");
    });
});

$("#cercle-2").click(function() {
    $(this).toggleClass("modif");
});

$("#cercle-2").click(function() {
    $(this).addClass("modif");
});