<?php
namespace App\Controllers;

use App\Services\Utils;
use App\Services\Authenticator;
use App\Controllers\AbstractController;

class LoginController extends AbstractController
{
    
    public function index(){
        $errors = [];
        if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $password = Utils::inputCleaner($_POST['password']);
            $email = Utils::inputCleaner($_POST['email']);
           $auth = new Authenticator();
           if ($auth->login($email,$password)){
            // SI l'utilisateur a coché la case remember_me
            // On lui crée un cookie
                if (isset($_POST['remember_me'])){
                    $cookieData = serialize($_SESSION['user']); // unserialize(string) pour récupérer notre tableau
                    setcookie(CONFIG_COOKIE_NAME,$cookieData,time()+3600);
                }
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