<?php
if (isset($_SESSION['verifiedUser'])) {
    echo "
    <form method='POST' class='d-flex'>
        <h3 class='m-0 mr-5'>$_SESSION[username]</h3>
        <div class='form-group m-2'>
            <button type='input' name='signOut' value='signOut' class='btn btn-warning'>Sign Out</button>
        </div>
    </form>
    ";
} else {
    echo "
        <div class='d-flex'>
            <form method='POST' class='d-flex'>
                <div class='form-group m-2'>
                    <input type='text' name='username' class='form-control' placeholder='Username: '>
                </div>
                <div class='form-group m-2'>
                    <input type='text' name='password' class='form-control' placeholder='Password:'>
                </div>
                <div class='form-group m-2'>
                    <button type='input' name='signIn' value='signIn' class='btn btn-primary'>Sign in</button>
                </div>
            </form>
            <form method='POST' class='d-flex'>
                <div class='form-group m-2'>
                    <button type='input' name='signUp' value='signUp' class='btn btn-primary'>Sign up</button>
                </div>
            </form>
        </div>
    ";
} 

?>
