<?php 

function logout($action, $params)
{
    Loader::include('Utility');
    Loader::include('Session');
    
    if (Session::user()) {
        Session::u_user();
    }

    Utility::redirect('login');
    exit;
}