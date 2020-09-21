let equal = false;

function erase() {
    document.getElementById("champ").value = "";
}

function operation() {
    document.getElementById("champ").value = eval(document.getElementById("champ").value);
}

function addToInput(newInput) {
    console.log(equal);
    if (equal == true) {
        if (Number.isInteger(parseInt(newInput)) || newInput === ".") {
            document.getElementById("champ").value = newInput;
        } else {
            document.getElementById("champ").value += newInput;
        }
        equal = false;
    } else {
        document.getElementById("champ").value += newInput;
    }
}

document.getElementById("erase").onclick = function() {
    erase();
}

document.getElementById("operation").onclick = function() {
    equal = true;
    operation();
}

for (let i = 0; i < document.getElementsByClassName("addToOperation").length; i++) {
    document.getElementsByClassName("addToOperation")[i].onclick = function() {
        addToInput(document.getElementsByClassName("addToOperation")[i].innerHTML);
    }
}