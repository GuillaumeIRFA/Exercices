let n = 5

let inputs = [1, -2, -8, 4, 5];
let t0 = 50

for (let i = 0; i < n; i++) {
    const t = inputs[i]
    temperatureCourrante = t

    if (typeof(t0) === 'undefined') {
        t0 = t;
    }

    if (t0 > 0) {
        if (temperatureCourrante < t0 && temperatureCourrante > 0) {
            t0 = temperatureCourrante;
        }
        if (temperatureCourrante < t0 && -temperatureCourrante < t0) {
            t0 = temperatureCourrante;
        }
    }
    if (t0 < 0) {
        if (temperatureCourrante > t0 && temperatureCourrante < 0) {
            if (-temperatureCourrante != t0) {
                t0 = temperatureCourrante;
            }
        }
        if (temperatureCourrante > t0 && -temperatureCourrante > t0) {
            if (-temperatureCourrante != t0) {
                t0 = temperatureCourrante;
            }
        }
    }
}