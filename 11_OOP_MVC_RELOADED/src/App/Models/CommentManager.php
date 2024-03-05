<?php
namespace App\Models;

use App\Models\Comment;
use App\Services\Database;

class CommentManager extends AbstractManager
{
    public function __construct(){
        self::$db = new Database();
        self::$tableName = 'comment';
        self::$obj = new Comment();
    }
}