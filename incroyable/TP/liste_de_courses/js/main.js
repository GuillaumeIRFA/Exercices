$('.clickable').click(function() {
    var id = $(this).attr("data-id");
    var name = $(this).children().html();
    $(this).replaceWith(`<td><div class="innerTD"><input type='text' form='form_${id}' name='nom' class='form-control w-auto' value='${name}'><button type='submit' form='form_${id}' class='btn btn-success valider w-auto ml-1' name='updateEntry' value='${id}'>OK</button></div></td>`);
});