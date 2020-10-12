<?php 

function confirm_delete($action, $params)
{
    Loader::include('Bookmark', 'model');
    $bookmark = Bookmark::one(['id' => $action]);

    view('confirm_delete', [
        'user' => Session::user(),
        'icon' => 'warning-alt',
        'title' => 'Confirm deletion',
        'subtitle' => "Are you sure you want to delete '{$bookmark->name}'?",
        'iconColor' => 'danger',
        'link' => "delete/{$bookmark->id}"
    ]);
}