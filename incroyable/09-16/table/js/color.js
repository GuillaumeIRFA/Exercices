export function randomColorToBackground(target) {
    var hexadecimalTable = '0123456789ABCDEF'.split('');
    var color = "#";
    for (var i = 0; i < 6; i++) {
        color += hexadecimalTable[Math.floor(Math.random() * 16)];
    }
    document.getElementById(target).style.backgroundColor = color;
}