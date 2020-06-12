let months = [
    "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Août",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre"
];
console.log(months);

let rightNow = new Date;
console.log(rightNow);
let currentMonth = rightNow.getMonth();
console.log(currentMonth);


alert("Nous sommes au mois de " + months[currentMonth] + ".");