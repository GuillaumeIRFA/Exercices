let cart = [];

let ajouter = document.getElementById("add-to-cart");
ajouter.addEventListener("click", addToCart);

let editer = document.getElementById("edit-cart");
editer.addEventListener("click", editCart);

function addToCart() {
    let pizza = document.getElementById("pizza-liste");
    let pizzaName = pizza.options[pizza.selectedIndex].text;

    let menu = document.getElementsByName("menu");
    let menuChoice;
    for (i = 0; i < menu.length; i++) {
        if (menu[i].checked) menuChoice = menu[i].id;
    }

    let quantity = document.getElementById("quantity").value;
    if (quantity == "") quantity = 1;

    let supplement = document.getElementsByName("supplement-garniture");
    let supplements = [];
    for (i = 0; i < supplement.length; i++) {
        supplements.push({
            key: supplement[i].id,
            value: supplement[i].checked
        });
    }

    let newItem = {
        "pizza": pizzaName,
        "menu": menuChoice,
        "quantity": quantity,
        "supplements": supplements
    };

    cart.push(newItem);
}

function editCart() {
    deleteItem = parseInt(prompt(JSON.stringify(cart) +
        "\nVoici votre commande, quel élement (n°) souhaitez vous retirer?"
    ));
    cart.splice(deleteItem, 1);
}