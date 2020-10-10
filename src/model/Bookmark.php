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

}

