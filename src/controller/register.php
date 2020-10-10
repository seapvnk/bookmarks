<?php 

function register($action, $params)
{
    Loader::include('Storage');
    Loader::include('Utility');
    Loader::include('Session');
    Loader::include('User', 'model');

    $errors = [];

    if (isset($_POST) && isset($_POST["register"])) {

        $user = new User($_POST);
        unset($_POST);

        $errors = $user->verify();
        $user->password = password_hash($user->password, PASSWORD_DEFAULT);
        
        if (count($errors) == 0) {
            try {

                $user->avatar = Storage::save('avatar', 'avatar');
                $user->insert();
                $hasError = false;
    
            } catch (Exception $e) {

                $filePath = SRC_PATH . "storage";
                if (is_dir($filePath)) {
                    unlink($filePath . "/" . $user->avatar);
                }
                $errors['unexpected'] = 'unexpected error';

                $hasError = true;
    
            } finally {
    
                if (!$hasError) {
                    Session::notifications('account created!');
                    Utility::redirect('login'); 
                }
                
            }
        }

    }
    $errors = Utility::setArray($errors, 'name', 'email', 'password', 
                                'password_confirm', 'avatar', 'unexpected');

    view('register', [
        'errors' => $errors,
    ]);
}