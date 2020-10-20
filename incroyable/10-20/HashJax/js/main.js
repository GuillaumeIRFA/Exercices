$('.monBouton').click(function(e) {

    e.preventDefault();

    $.ajax({

        url: 'reponse.php',
        type: 'POST',

        dataType: 'JSON',
        data: {
            clic: $(this).val()
        },

        beforeSend: function() {
            $('.maDivDeLoading').css('visibility', 'visible');
        },

        success: function(data) {
            $('.resultat').html(JSON.stringify(data));
            console.dir(data);

        },

        complete: function() {
            $('.maDivDeLoading').css('visibility', 'hidden');
        }

    });
});