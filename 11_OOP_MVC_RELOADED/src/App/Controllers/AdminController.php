<?php
namespace App\Controllers;

use App\Models\PostManager;
use App\Services\Authenticator;
use App\Controllers\AbstractController;

class AdminController extends AbstractController{

    
    public function __construct(){
        if ( !Authenticator::isRole("ROLE_ADMIN") ){
            header("Location:?page=home");
            die();
        }
    }
    
    public function index(){
        $manager = new PostManager();
        $posts = $manager->getAll();
        $template = './views/template_admin.phtml';
        $this->render($template,[
            'title'=>'Welcome to the Admin Dashboard',
            'posts'=>$posts
        ]);
    }
}