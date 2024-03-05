<?php
namespace App\Models;

use App\Models\User;
use App\Services\Database;

class UserManager extends AbstractManager
{
    public function __construct(){
        self::$db = new Database();
        self::$tableName = 'user';
        self::$obj = new User();
    }

    public function getUserByEmail($email = null): array|false
    {   // On veut obtenir une requête de ce type:
        // SELECT user.*,contact.firstname,contact.lastname FROM user,contact WHERE email=? AND user.id=contact.user_id LIMIT 1
        $where = !is_null($email) ? "WHERE email=?" : "";
        $row = [];
        $row = self::$db->select("SELECT user.*,contact.firstname,contact.lastname FROM user,contact ".$where." AND user.id=contact.user_id LIMIT 1",[$email]);
        return $row;
    }
}