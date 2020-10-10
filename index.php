<?php

require_once './config/config.php';

Loader::include('Router');

$routes = new Router;

$routes->bind('', 'app');
$routes->bind('app');

$routes->bind('login');
$routes->bind('register');
$routes->bind('leave');
$routes->bind('logout');

$routes->dispatch();