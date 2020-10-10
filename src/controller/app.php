<?php 

function app($action, $params)
{
    Loader::include('Utility');
    
    if (!Session::user()) {
        Utility::redirect('login');
    }
    
    view('index', [
        'user' => Session::user(),
        'icon' => 'library',
        'title' => 'bookmarks',
        'subtitle' => 'listing all your bookmarks',
    ]);
}