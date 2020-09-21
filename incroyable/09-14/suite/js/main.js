// document.getElementById("cercle1").onclick = function() {
//     this.style.display = "none";
// }
// document.getElementById("cercle2").onclick = function() {
//     this.style.visibility = "hidden";
// }

// for (i = 0; i < document.getElementsByClassName("cercle").length; i++) {
//     document.getElementsByClassName("cercle")[i].onclick = function() {
//         this.style.visibility = "hidden";
//     }
// }

// document.getElementById("monBouton").onclick = function() {
//     let userInput = document.getElementById("monChamp").value;
//     document.getElementById("monParagraphe").innerText = userInput;
// }

document.getElementById("monBouton2").onclick = function() {
    let userAge = parseInt(document.getElementById("champAge").value);
    document.getElementById("autreParagraphe").innerHTML = userAge < 18 ? "Pars, mineur!" : "Bonjour monsieur majeur";
}


document.getElementById("monBouton3").onclick = function() {
    let password = document.getElementById("champMagic").value;

    if (password != "dauphin") {
        document.getElementById("paragrapheMagic").innerHTML = "Nope :)";
    } else {
        document.getElementById("paragrapheMagic").innerHTML = "Bravo, vous avez trouvé le mot magique. C'est très bien. Partez maintenant. :)";
    }
}