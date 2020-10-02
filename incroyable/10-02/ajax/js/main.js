let categoryUrl = "https://api.chucknorris.io/jokes/random?category=";

function chuckNorrisJokesCategory(requestURL, category, ) {

    $.ajax({

        url: requestURL + category,

        type: "GET",

        success: function(data) {
            $(".monParagraphe").html(data["value"]);
            console.dir(data);
        },

        error: function() {
            alert("IT FAILED :pepeLaugh:");
        }

    });

}

function generateAllCategoriesButton() {

    $.ajax({

        url: "https://api.chucknorris.io/jokes/categories",

        type: "GET",

        success: function(data) {

            for (i = 0; i < data.length; i++) {
                $("body").prepend(`<button class="btn btn-warning monBouton" data-category="${data[i]}">${data[i]}</button>`)
            }

            $(".monBouton").click(function() {
                let category = $(this).data("category");
                chuckNorrisJokesCategory(categoryUrl, category, );
            });
        },

        error: function() {
            alert("IT FAILED :pepeLaugh:");
        }

    });

}

generateAllCategoriesButton();

$("#ohNoNo").click(function(event) {

    event.preventDefault();

    let quantity = parseInt($(this).siblings("input:eq(0)").val());
    let category = $(this).siblings("input:eq(1)").val();

    $("#result").html(`<h1>This is what you Asked for</h1>`);

    for (i = 0; i < quantity; i++) {
        console.log(i);

        $.ajax({

            url: categoryUrl + category,

            type: "GET",

            success: function(data) {

                $("#result").append(`<p>${data.value}</p>`);

            },

            error: function(error) {
                console.log(error);
            }

        });
    }

});