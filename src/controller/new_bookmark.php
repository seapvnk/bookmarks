<?php 

function new_bookmark($action, $params)
{
    Loader::include('Utility');
    Loader::include('Bookmark', 'model');

    $user = Session::user();
    $errors = [];
    $notification = null;

    if ($_POST) {
        $_POST += [ "user_id" => $user->id ];
        $bookmark = new Bookmark($_POST);

        $errors = $bookmark->verify();
        if (!$errors) {
            try {
                $bookmark->insert();
            } catch (Exception $e) {
                $errors['unexpected'] = 'an unexpected error ocurred';
            }
            if (!$errors) $notification = 'bookmark successfully created!';
        }  

    }

    view('new_bookmark', [
        'user' => $user,
        'icon' => 'plus-circle',
        'title' => 'new bookmark',
        'subtitle' => 'create new bookmarks',
        'notification' => $notification,
        'errors' => Utility::setArray($errors, 'name', 'link', 'tag', 'color'),
    ]);
}