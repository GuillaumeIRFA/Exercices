// cart is prefilled for testing purposes
let cart = [
    ["0", 5, "Beast Magic", "Weapon Ornament", "Exotic", true, "desc", "img/beast_magic.jpg", "Silver", 700, "Eververse"],
    ["1", 7, "Between Breaths", "Weapon Ornament", "Exotic", true, "desc", "img/between_breaths.jpg", "Silver", 700, "Eververse"]
];

let temp = [];

const articles = [
    ["Beast Magic", "Weapon Ornament", "Exotic", true, "desc", "img/beast_magic.jpg", "Silver", 700, "Eververse"],
    ["Between Breaths", "Weapon Ornament", "Exotic", true, "desc", "img/between_breaths.jpg", "Silver", 700, "Eververse"],
    ["Bound Hammer", "Weapon Ornament", "Exotic", true, "desc", "img/bound_hammer.jpg", "Silver", 700, "Eververse"],
    ["Equinox", "Weapon Ornament", "Exotic", true, "desc", "img/equinox.jpg", "Silver", 700, "Eververse"],
    ["One Terrible Screams", "Weapon Ornament", "Exotic", true, "desc", "img/one_terrible_scream.jpg", "Silver", 700, "Eververse"],
    ["Wishes of Sorrow", "Weapon Ornament", "Exotic", true, "desc", "img/wishes_of_sorrow.jpg", "Silver", 700, "Eververse"],
    ["Jian", "Weapon Ornament", "Exotic", true, "desc", "img/jian.jpg", "Silver", 600, "Eververse"],
    ["The Gate Lord", "Weapon Ornament", "Exotic", true, "desc", "img/the_gate_lord.jpg", "Silver", 600, "Eververse"],
    ["Jotuneer", "Weapon Ornament", "Exotic", true, "desc", "img/jotuneer.jpg", "Silver", 800, "Eververse"],
    ["One Fell Swoop", "Weapon Ornament", "Exotic", true, "desc", "img/one_fell_swoop.jpg", "Silver", 800, "Eververse"],
    ["Threat Display", "Weapon Ornament", "Exotic", true, "desc", "img/threat_display.jpg", "Silver", 800, "Eververse"],
    ["Obsidian Wings", "Weapon Ornament", "Exotic", true, "desc", "img/obsidian_wings.jpg", "Silver", 800, "Eververse"],
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

    if ($(window).scrollTop() + $(window).height() >= $(document).height() - 500) {
        $(".articlesHidden").first().removeClass("articlesHidden");
    }
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

        let index = `<tr cartIndex=${i}>`;
        let thumbnail = `<th class="p-0"><img src='${cart[i][7]}'></th>`;
        let id = `<td>${cart[i][0]}</td>`;
        let name = `<td>${cart[i][2]}</td>`;
        let currency = `<td>${cart[i][8]}</td>`;
        let value = `<td>${cart[i][9]}</td>`;
        let quantity = `<td class="tdQuantity"><button class="btn cartMinus">-</button><input type="number" class="btn articleQuantity" value="${cart[i][1]}"><button class="btn cartPlus">+</button></td>`;
        let subtotal = `<td>${cart[i][9]*cart[i][1]}</td>`;
        let remove = `<td><button class="btn btn-warning cartDeleteItem"><i class="fas fa-times"></i></button></td></tr>`;

        cartContent += index + thumbnail + id + name + currency + value + quantity + subtotal + remove;

        total += cart[i][9] * cart[i][1];
    }

    $("#cartItems").html(cartContent);

    $(".cartDeleteItem").click(function() {
        let index = parseInt($(this).parent().parent().attr("cartIndex"));
        // temp.push(cart[index]);
        temp.push(cart.splice(index, 1)[0]);
        updateCart(cart);
    });

    $(".cartMinus").click(function() {

        let newVal = eval($(this).siblings("input").val() + "-1");

        if (newVal) {
            let index = $(this).parent().parent().attr("cartIndex");
            cart[index][1] = newVal;
        }

        updateCart(cart);

    });

    $(".cartPlus").click(function() {
        let newVal = eval($(this).siblings("input").val() + "+1");

        let index = $(this).parent().parent().attr("cartIndex");
        cart[index][1] = newVal;
        updateCart(cart);

    });

    $("#grandTotal").html(total);

    if (temp.length != 0) {
        $('.undo').removeClass("undoHidden");
    } else {
        $('.undo').addClass("undoHidden");
    }
}

updateCart(cart);

$(".cartShow").click(function() {
    $(".cart").addClass("cartActive");
});

$(".cartHide").click(function() {
    $(".cart").removeClass("cartActive");
});

$(".articleMinus").click(function() {
    let newVal = eval($(this).siblings("input").val() + "-1");
    if (newVal)
        $(this).siblings("input").val(newVal);
});

$(".articlePlus").click(function() {
    let newVal = eval($(this).siblings("input").val() + "+1");
    $(this).siblings("input").val(newVal);
});

$(".articleAddToCart").click(function() {

    let id = $(this).parent().parent().parent().parent().attr("articleId");
    let quantity = parseInt($(this).siblings(".articleQuantity").val());
    let alreadyInCart = false;
    let atThisIndex;

    for (i = 0; i < cart.length; i++) {
        if (cart[i].includes(id)) {
            alreadyInCart = true;
            atThisIndex = i;
            break;
        }
    }

    if (alreadyInCart) {
        cart[atThisIndex][1] += quantity;
    } else {
        cart.push(Array(id, quantity).concat(articles[id]));
    }

    updateCart(cart);
});

$('.undo').click(function() {
    cart.push(temp.pop());
    updateCart(cart);
});