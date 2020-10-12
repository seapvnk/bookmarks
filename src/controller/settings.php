<?php 

function settings($action, $params)
{
    Loader::include('Storage');

    if ($_POST && $_POST["save"]) {
        $user = Session::user();
        $user->name = $_POST['name']?? $user->name;
        $previousAvatar = $user->avatar;

        if ($_FILES) {
            $user->avatar = Storage::save('avatar', 'avatar');
            unlink(ROOT_PATH . "/public/data/{$previousAvatar}");
        }

        $user->update();
        Session::user($user);
        unset($_POST);
    }

    view('settings', [
        'user' => Session::user(),
        'icon' => 'gear',
        'title' => 'settings',
        'subtitle' => 'edit your profile',
    ]);
}