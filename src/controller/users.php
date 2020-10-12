<?php 

function users($action, $params)
{
    define('ITEMS_PER_PAGE', 2);
    Loader::include('User', 'model');
    Loader::include('Bookmark', 'model');

    $searchUser = false;
    if ($_POST && $_POST['search']) {
        $id = (int) $_POST['id'];
        $searchUser = User::one(['id' => $id]);
    } elseif ($action) {
        $searchUser = User::one(['id' => $action]);
    }

    $userFound = $searchUser? count($searchUser->getValues()) != 0: false;

    // set variables
    $page = false;
    $pages = false;
    $bookmarks = false;

    if ($searchUser) {
        $pages = ceil(Bookmark::count(['user_id' => $searchUser->id]) / ITEMS_PER_PAGE);
        $page = $params[0]?? 1;
    
        $bookmarks = Bookmark::page($page, ITEMS_PER_PAGE, [ 'user_id' => $searchUser->id ]);
    }

    view('search', [
        'user' => Session::user(),
        'icon' => 'users',
        'title' => 'users',
        'subtitle' => 'search visualize a user',
        'userSearch' => $searchUser,
        'bookmarks' => $bookmarks,
        'page' => $page,
        'pages' => $pages,
        'userFound' => $userFound,
    ]);
}