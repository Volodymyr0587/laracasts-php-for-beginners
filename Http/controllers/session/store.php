<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];


$form = new LoginForm();

//% validate form inputs
if ($form->validate($email, $password)) {
    //% log in the user if the credentials match.
    if ((new Authenticator)->attempt($email, $password)) {
        redirect('/');
    }

    $form->error('email', 'No matching account found for that email address and password.');

}

return view('session/create.view.php', [
    'errors' => $form->errors()
]);