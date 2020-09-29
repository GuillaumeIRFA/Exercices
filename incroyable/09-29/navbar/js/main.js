// $(window).scroll(function() {
//     if ($(window).scrollTop() > $(".header").height()) {
//         // $('.navbar').addClass("sticky");
//         $('.navbar').children().children().first().removeClass("inactive");
//     } else {
//         // $('.navbar').removeClass("sticky");
//         $('.navbar').children().children().first().addClass("inactive");
//     }
// });

const navbar = document.querySelector('.navbar');

function changeNavbar() {

    if (window.scrollY >= navbar.offsetTop) {
        // $('.navbar').children().children().first().removeClass("inactive");
        document.getElementsByClassName("navbar")[0].children[0].children[0].classList.remove("inactive");
        document.getElementsByClassName("mainContent")[0].classList.add("enlarge");

    } else {

        // $('.navbar').children().children().first().addClass("inactive");
        document.getElementsByClassName("navbar")[0].children[0].children[0].classList.add("inactive");
        document.getElementsByClassName("mainContent")[0].classList.remove("enlarge");

    }
}

window.addEventListener("scroll", changeNavbar);