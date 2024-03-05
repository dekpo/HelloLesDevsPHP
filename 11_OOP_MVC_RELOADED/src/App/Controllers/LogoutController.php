<?php
namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Services\Authenticator;

class LogoutController extends AbstractController
{
    public function index(){
       $auth = new Authenticator();
       $auth->logout();
       header('Location:?page=home');
    }

}