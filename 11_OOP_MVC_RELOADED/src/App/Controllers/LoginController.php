<?php
namespace App\Controllers;

use App\Services\Authenticator;
use App\Controllers\AbstractController;

class LoginController extends AbstractController
{
    
    public function index(){
        $errors = [];
        if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $password = htmlentities(strip_tags($_POST['password']));
            $email = htmlentities(strip_tags($_POST['email']));
           $auth = new Authenticator();
           if ($auth->login($email,$password)){
                header('Location:?page=admin');
                die();
           }
           $errors[] = "Problème d'authentification !";
        }
        $template = './views/template_login.phtml';
        $this->render($template,[
            'errors' => $errors
        ]);
    }

}