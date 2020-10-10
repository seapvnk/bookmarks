<?php 

class User extends Model 
{
    protected static $table = 'users';
    protected static $columns = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    public function verify()
    {
        $errors = [];
        $required = ['email', 'name', 'password', 'password_confirm'];

        foreach ($required as $field) {
            if (!$this->$field) {
                $errors[$field] = "$field is required.";
            }
        }

        if ($this->email && !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'invalid email.';
        }

        if (strlen($this->name) < 4) {
            $errors['name'] = 'name must have at least 4 characters.';
        }

        if ($this->password !== $this->password_confirm) {
            $errors['password_confirm'] = 'passwords don\'t match.';
        }

        if ($_FILES['avatar']['name'] == '') {
            $errors['avatar'] = 'profile picture is required.';
        }

        if (User::count(['email', $this->email]) > 0) {
            $errors['email'] = 'email already used.';
        }
        
        return $errors;
    }

}

