let cart = [];

const articles = [
    ["Beast Magic", "Weapon Ornament", "Exotic", true, "desc", "img/beast_magic.jpg", "Silver", 700, "Eververse"],
    ["Between Breaths", "Weapon Ornament", "Exotic", true, "desc", "img/between_breaths.jpg", "Silver", 700, "Eververse"],
    ["Bound Hammer", "Weapon Ornament", "Exotic", true, "desc", "img/bound_hammer.jpg", "Silver", 700, "Eververse"],
    ["Equinox", "Weapon Ornament", "Exotic", true, "desc", "img/equinox.jpg", "Silver", 700, "Eververse"],
    ["One Terrible Screams", "Weapon Ornament", "Exotic", true, "desc", "img/one_terrible_screams.jpg", "Silver", 700, "Eververse"],
    ["Wishes of Sorrow", "Weapon Ornament", "Exotic", true, "desc", "img/wishes_of_sorrow.jpg", "Silver", 700, "Eververse"],
    ["Jian", "Weapon Ornament", "Exotic", true, "desc", "img/jian.jpg", "Silver", 700, "Eververse"],
    ["The Gate Lord", "Weapon Ornament", "Exotic", true, "desc", "img/the_gate_lord.jpg", "Silver", 700, "Eververse"],
    ["Jotuneer", "Weapon Ornament", "Exotic", true, "desc", "img/jotuneer.jpg", "Silver", 700, "Eververse"],
    ["One Fell Swoop", "Weapon Ornament", "Exotic", true, "desc", "img/one_fell_swoop.jpg", "Silver", 700, "Eververse"],
    ["Threat Display", "Weapon Ornament", "Exotic", true, "desc", "img/threat_display.jpg", "Silver", 700, "Eververse"],
    ["Obsidian Wings", "Weapon Ornament", "Exotic", true, "desc", "img/obsidian_wings.jpg", "Silver", 700, "Eververse"],
];

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

function updateCart(cart) {

    let cartContent = "";
    let total = 0;

    for (i = 0; i < cart.length; i++) {
        cartContent += `<tr><th class="p-0"><img src='${cart[i][7]}'></th><td>${cart[i][0]}</td><td>${cart[i][2]}</td><td>${cart[i][8]}</td><td>${cart[i][9]}</td><td>${cart[i][1]}</td><td>${cart[i][9]*cart[i][1]}</td><td><button class="btn btn-warning cartDeleteItem">X</button></td></tr>`;
        total += cart[i][9] * cart[i][1];
    }
    $("#cartItems").html(cartContent);

    $(".cartDeleteItem").click(function() {
        let index = parseInt($(this).parent().parent().children().next().html());
        cart.splice(index, 1);
        updateCart(cart);
    });

    $("#grandTotal").html(total);
}

updateCart(cart);

$(".cartShow").click(function() {
    $(".cart").addClass("cartActive");
});

$(".cartHide").click(function() {
    $(".cart").removeClass("cartActive");
});

$(".articleAddToCart").click(function() {
    let index = $(this).parent().parent().parent().parent().attr("articleId");
    let quantity = parseInt($(this).siblings(".articleQuantity").val());
    let alreadyInCart = false;
    let atThisIndex;

    for (i = 0; i < cart.length; i++) {
        if (cart[i].includes(index)) {
            alreadyInCart = true;
            atThisIndex = i;
            break;
        }
    }

    if (alreadyInCart) {
        cart[atThisIndex][1] += quantity;
    } else {
        cart.push(Array(index, quantity).concat(articles[index]));
    }
    updateCart(cart);
});