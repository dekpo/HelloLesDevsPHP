<?php
namespace App\Services;

use App\Models\UserManager;

class Authenticator
{
    public function __construct()
    {
        if (!isset($_SESSION)) session_start();
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
}