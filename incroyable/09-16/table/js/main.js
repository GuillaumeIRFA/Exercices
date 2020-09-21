import { randomColorToBackground } from "./color.js";
import { changeSize } from "./form.js";
import { setOpacity } from "./opacity.js";

var timeDifference, timeWhenShown = new Date().getTime();

document.getElementById("carre").onclick = function() {

    var timeWhenClicked = new Date().getTime();
    timeDifference = (timeWhenClicked - timeWhenShown) / 1000;

    document.getElementById("info").innerHTML = `Vous avez mis ${timeDifference} secondes à cliquer sur la forme.`;

    setOpacity("carre", "0%");
    randomColorToBackground("carre");
    changeSize("carre");
    setTimeout(function() {
        setOpacity("carre", "100%");
    }, Math.random() * 5000);

    timeWhenShown = new Date().getTime();

}