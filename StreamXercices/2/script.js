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

        let message = ''
        Object.keys(itemsTable).forEach(function(key) {
            message += `${key} : ${itemsTable[key]} unité(es) \n`
        });

        alert(message);
        console.log(itemSet, itemsTable);

    } else break;
}