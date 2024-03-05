<?php
namespace App\Services;

use App\Models\UserManager;

class Authenticator
{
    public function __construct()
    {
        if (!isset($_SESSION)) session_start();
    }

    static function isRole($role)
    { // retourne true ou false
        // Si $_SESSION['user'] est défini
        // ET $_SESSION['user']['roles'] contient le rôle indiqué
        // $is_role retourne un booleen true/false
        $is_role = isset($_SESSION['user']) && in_array($role, json_decode($_SESSION['user']['roles']));
        return $is_role;
    }

    private function setSession($userData)
    {
        $_SESSION['user'] = $userData;
    }

    public function login($email,$password){
        // Au départ on est pas loggé
        $isLogged = false;
        $userManager = new UserManager();
        $user = $userManager->getUserByEmail($email);
        if ($user){
            $isLogged = password_verify($password,$user['password']);
        }
        if ($isLogged){
            $this->setSession($user);
        }
        return $isLogged;
    }

    public function logout(){
        session_destroy();
    }
}