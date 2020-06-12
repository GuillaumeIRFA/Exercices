let itemsTable = {
    "Sceau": 5,
    "Pierre": 2,
}

while (true) {
    let item = prompt("A quel objet pensez vous?");
    let itemQuantity = parseInt(prompt("Quelle est la quantité de cet objet?"));
    if (item in itemsTable == false) {
        itemsTable[item] = itemQuantity;
    } else {
        itemsTable[item] += itemQuantity;
    }

    let message = ''
    for (key in itemsTable) {
        message += `${key} : ${itemsTable[key]}u \n`
    }
    alert(message);
}