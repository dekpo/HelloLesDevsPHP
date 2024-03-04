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
}