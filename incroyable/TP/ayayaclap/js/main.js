$(document).ready(function() {

    $('#cookieModal').modal('show');

    $('button[name="cookies"]').click(function() {
        $.ajax({
            url: 'cookies.php',
            type: 'post',
            data: {
                cookies: $(this).val()
            }
        });
    });

});

loginForm();

function loginForm() {

    $.ajax({

        url: 'loginForm.php',
        success: function(data) {
            $('#loginForm').html(data);

            $('button[name="signIn"]').click(function(e) {
                e.preventDefault();
                $username = $(this).parent().prev().prev().children().val();
                $password = $(this).parent().prev().children().val();
                signIn($username, $password);
            });

            $('button[name="signOut"]').click(function(e) {
                e.preventDefault();
                signOut();
            });
        }

    });
}

function signIn($username, $password) {
    $.ajax({
        url: 'login.php',
        type: 'post',
        data: {
            signIn: 'signIn',
            username: $username,
            password: $password
        },
        success: function() {
            loginForm();
        }
    })
}

function signOut() {
    $.ajax({
        url: 'login.php',
        type: 'post',
        data: {
            signOut: 'signOut'
        },
        success: function() {
            loginForm();
        }
    })
}