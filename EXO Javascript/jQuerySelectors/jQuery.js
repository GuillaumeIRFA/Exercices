$(document).ready(function() {

    $('li:first').css('color', 'red');
    $('li:last').css('color', 'green');
    $('li:even').css('fontSize', '25px');
    $('li li').css('background', 'aquamarine');
    $('li ul').css('border', '5px solid black');
    $('li + li').css('fontFamily', 'verdana');
    $('li li:first').css('color', 'brown');
    $('li > ul > li > ul > li').css('fontSize', '8px');
    $('li:nth-child(1)').css('listStyle', 'none');
    $('li:lt(5)').css('fontWeight', 'bold');

    $(':header').css('fontSize', '60px');

    $(':input').css({ 'fontSize': '40px', 'borderColor': 'red' });
    document.forms[0].xd.focus();
    $(':focus').css({ 'background': 'yellow' });

    $('table').css({ 'border': '2px solid gray', 'fontFamily': 'Verdana' });
    $('td').css({ 'textAlign': 'center' });
    $('td:contains("X")').css({ 'border': '1px solid red' });
    $("td:not(td:first):empty").css({ 'background': 'pink' });
})