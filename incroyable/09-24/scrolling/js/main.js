$(window).scroll(function() {
    if ($(window).scrollTop() + $(window).height() == $(document).height()) {
        // $(".divRouge").css("transform", "translateX(0%)");
        $(".divRouge").toggleClass("reset");
    }
});