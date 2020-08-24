var button = document.getElementById("button");
button.addEventListener("click", whatDidIChoose);

function whatDidIChoose() {
    var choice = document.getElementById("select-list").selectedIndex;
    var message = "";

    switch (choice) {
        case 0:
            message += "Vous avez choisis 1! Waow!";
            break;
        case 1:
            message += "Vous avez choisis 2! Waow!";
            break;
        case 2:
            message += "Vous avez choisis 3! Waow!";
            break;
        case 3:
            message += "Vous avez choisis 4! Waow!";
            break;
    }

    alert(message);
}