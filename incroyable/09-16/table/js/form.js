export function changeSize(target) {

    document.getElementById(target).style.position = "absolute";
    var newHeight = Math.random() * 450 + "px";
    var newWidth = Math.random() * 450 + "px";
    var newBorderRadius, newTop, newBottom;

    if (Math.random() < 0.5) {
        newBorderRadius = "50%";
        newTop = 0;
        newBottom = "auto";
    } else {
        newBorderRadius = "0";
        newTop = "auto";
        newBottom = 0;
    }

    document.getElementById(target).style.height = newHeight;
    document.getElementById(target).style.width = newWidth;
    document.getElementById(target).style.borderRadius = newBorderRadius;
    document.getElementById(target).style.top = newTop;
    document.getElementById(target).style.bottom = newBottom;
}