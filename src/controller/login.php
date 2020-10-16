<?php 

function login($action, $params)
{
    Loader::include('Utility');
    Loader::include('Session');
    Loader::include('Login', 'model');

    if (Session::user()) Utility::sendTo(SERVER_ROOT);

    $errors = [];
    if ($_POST) {
        $login = new Login($_POST);
        $errors = $login->verify();
    
        if (!count($errors)) {
            $login->performLogin();
            Utility::sendTo(SERVER_ROOT . '/app');
            exit;
        }
    }

    view('login', [
        'notification' => Session::notifications(),
        'errors' => Utility::setArray($errors, 'email', 'password', 'email_r'),
    ]);

    Session::u_notifications();
}
