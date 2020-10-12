<?php 

function app($action, $params)
{
    define('ITEMS_PER_PAGE', 4);

    Loader::include('Utility');
    Loader::include('Bookmark', 'model');
    
    $user = Session::user();
    $pages = ceil(Bookmark::count(['user_id' => $user->id]) / ITEMS_PER_PAGE);
    $page = $action?? 1;

    $bookmarks = Bookmark::page($page, ITEMS_PER_PAGE, [ 'user_id' => $user->id ]);
    $noBookmarks = Bookmark::count(['user_id' => $user->id]) == 0;

    $notification = Session::notification();

    view('index', [
        'user' => Session::user(),
        'icon' => 'library',
        'title' => 'bookmarks',
        'subtitle' => 'listing all your bookmarks',
        'bookmarks' => $bookmarks,
        'page' => $page,
        'pages' => $pages,
        'notification' => $notification,
        'noBookmarks' => $noBookmarks,
    ]);

    Session::u_notification();
}
