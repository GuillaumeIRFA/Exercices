let itemsTable = {
    "Sceau": 5,
    "Pierre": 2,
};

let itemSet = new Set();
itemSet.add("Sceau").add("Pierre");

while (true) {
    let item = prompt("A quel objet pensez vous?");
    let itemQuantity = parseInt(prompt("Quelle est la quantité de cet objet?"));

    if (item && itemQuantity) {
        if (!itemSet.has(item)) {
            itemSet.add(item);
            itemsTable[item] = itemQuantity;
        } else {
            itemsTable[item] += itemQuantity;
        }

        let message = '';
        Object.entries(itemsTable).forEach(([key, value]) => message += `${key} : ${value} unité(es) \n`);
        alert(message);
    } else break;
}