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

    public function deleteComments($post_id = null)
    {
        if (!is_null($post_id)){
            self::$db->query("DELETE FROM ".self::$tableName." WHERE post_id=?",[$post_id]);
            return true;
        }
        return false;
    }
}