/**
 * @author
 * License
 * Version
 */

let itemsTable = {
    "Sceau": 5,
    "Pierre": 2,
    "XD": 1,
    "Coquelicot": 895,
    "Baguette": 16,
    "Boeuf": 37,
    "Poulet": 67,
    "Prout": 14455,
    getAllNames: getAllNames = () => {
        let names = "";
        for (key in itemsTable) typeof(itemsTable[key]) === "number" ? names += `${key}\n` : null;
        return names;
    },
    getAllValues: getAllValues = () => {
        let values = "";
        for (key in itemsTable) typeof(itemsTable[key]) === "number" ? values += `${itemsTable[key]}\n` : null;
        return values;
    }
};

console.log(itemsTable);
console.log(itemsTable.getAllNames());
console.log(itemsTable.getAllValues());
// console.log("hello");
// itemsTable.getName();
// getName(itemsTable);

// while (true) {
//     let item = prompt("A quel objet pensez vous?");
//     let itemQuantity = parseInt(prompt("Quelle est la quantité de cet objet?"));

//     if (item && itemQuantity) {
//         if (!itemSet.has(item)) {
//             itemSet.add(item);
//             itemsTable[item] = itemQuantity;
//         } else {
//             itemsTable[item] += itemQuantity;
//         }

//         let message = '';
//         Object.entries(itemsTable).forEach(([key, value]) => message += `${key} : ${value} unité(es) \n`);
//         alert(message);
//     } else break;
// }