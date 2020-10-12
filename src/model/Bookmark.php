<?php 

class Bookmark extends Model 
{
    protected static $table = 'bookmarks';
    protected static $columns = [
        'id',
        'user_id',
        'name',
        'link',
        'tag',
        'color',
    ];

    public function verify()
    {
        $errors = [];
        $required = array_diff(self::$columns, ['id', 'user_id']);

        foreach ($required as $field) {
            if (!$this->$field) {
                $errors[$field] = "$field is required.";
            }
        }
        
        return $errors;
    }
}

