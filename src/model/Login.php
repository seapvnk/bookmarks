<?php 

class Login extends Model 
{
    protected static $columns = [
        'email',
        'password',
    ];

    protected $user;

    public function verify()
    {
        Loader::include('User', 'model');

        $errors = [];
        $required = ['email', 'password'];

        foreach ($required as $field) {
            if (!$this->$field) {
                $errors[$field] = "$field is required.";
            }
        }

        $this->user = User::one(['email' => $_POST['email']]);
        if (!password_verify($_POST['password'], $this->user->password)) {
            $errors['password'] = 'invalid email/password.';
            $errors['email'] = 'invalid email/password.';
            $errors['email_r'] = $_POST['email'];
        }
        
        return $errors;
    }

    public function performLogin()
    {
        Loader::include('Session');
        Session::user($this->user);
        unset($_POST);
    }

}

