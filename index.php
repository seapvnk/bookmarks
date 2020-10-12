<?php

require_once './config/config.php';

Loader::include('Router');
Loader::include('Session');
Loader::include('Utility');

$routes = new Router;

// server root
$routes->bind('', 'app');
$routes->bind('bookmarks', 'app');

// bind routes
$routes->bindall([
    // login/register routes
    'login',
    'register',
    // app actions routes
    'app',
    'new_bookmark',
    'logout',
    'delete',
    'settings',
    'users',
    // app confirmation routes
    'leave',
    'confirm_delete',
]);


$routes->protect(!Session::user(), [
    'logout',
    'delete',
    'settings',
    'leave',
    'confirm_leave'
], function() {
    view('denied');
});

$routes->protect(!Session::user(), [
    '',
    'app',
    'new_bookmark',
    'bookmarks'
], function() {
    Utility::sendTo(SERVER_ROOT . '/login');
});

$routes->dispatch();
