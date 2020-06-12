$(document).ready(function() {

    $('[title*="Pepe"]').css('borderColor', 'green');
    $('[src$="W.png"]').css('borderColor', 'blue');
    $('[src^="W"]').css('borderColor', 'yellow');
    $('[border!="15"]').css('borderWidth', '10');
    $('[title~="Old"]').css('borderRadius', '5');

});