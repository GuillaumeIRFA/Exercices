let nonTraction = 200;
let trainPosition = 0;
let animation;
let velocity = 0;
let trainInterval = setInterval(accelerer, nonTraction - velocity);


let train = document.getElementById("train");
train.addEventListener("click", accelerer);

let stop = document.getElementById("btnStopper");
stop.addEventListener("click", stopperTrain);

function accelerer() {

    function frame() {
        posActuelle = document.getElementById("train").style.left;
        testerPosition(posActuelle);
        document.getElementById("train").style.left = trainPosition++ + "px";
    }

    if (velocity < 150) {
        velocity++;
    }

    clearInterval(trainInterval);
    trainInterval = setInterval(accelerer, nonTraction - velocity);
    frame();
}

function testerPosition(posActuelle) {

    if (parseInt(posActuelle) + 100 > 360) {
        clearInterval(trainInterval);
        alert("You L OMEGALUL S T");
    }
}

function stopperTrain() {
    clearInterval(trainInterval);
}