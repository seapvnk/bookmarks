<?php 

function leave($action, $params)
{
    view('confirm_logout', [
        'user' => Session::user(),
        'icon' => 'warning-alt',
        'title' => 'Are you leaving?',
        'subtitle' => 'are you sure you want to log out?',
        'iconColor' => 'danger'
    ]);
}