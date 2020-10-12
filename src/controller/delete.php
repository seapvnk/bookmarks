<?php 

function delete($action, $params)
{
    Loader::include('Utility');
    Loader::include('Session');
    Loader::include('Bookmark', 'model');
    
    $user = Session::user();
    $error = false;

    try {
        $bookmark = Bookmark::one(['id' => (int) $action]);
        if ($bookmark->user_id === $user->id) {
            $bookmark->delete();
        }
    } catch (Exception $e) {
        $error = true;
    }

    if ($error) {
        Session::notification([
            'type' => 'danger',
            'message' => 'error deleting bookmark'
        ]);
    } else {
        Session::notification([
            'type' => 'success',
            'message' => 'bookmark successfully deleted!',
        ]);
    }

    Utility::sendTo(SERVER_ROOT . "/bookmarks");
    
}