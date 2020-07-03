$(function() {
    $('#envoyer').click(function() {
        $.ajax({
            type: 'POST',
            url: 'chat.php',
            data: {
                'nom': $('#nom').val(),
                'message': $('#message').val()
            },
            success: function(data) {
                console.log("réussite");
            },
            error: function(error) {
                console.log("échec");
            }
        });
    });

    setInterval(function() {
        $('#conversation').load('conv.htm');
    }, 4000);
});