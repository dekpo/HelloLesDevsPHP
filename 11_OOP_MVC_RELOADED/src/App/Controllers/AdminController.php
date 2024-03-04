<?php
namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Services\Utils;

class AdminController extends AbstractController{

    
    public function __construct(){
        if ( !Utils::isRole("ROLE_ADMIN") ){
            header("Location:?page=home");
            die();
        }
    }
    
    public function index(){
        $template = './views/template_admin.phtml';
        $this->render($template,[
            'title'=>'Welcome to the Admin Dashboard'
        ]);
    }
}