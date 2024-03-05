<?php
namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Models\PostManager;

class HomeController extends AbstractController{
    public function index(){
        $title = "Hello OOP World";
        $p = new PostManager();
        $posts = $p->getAll(3);
        
        $template = './views/template_home.phtml';
        $this->render($template,[
            'title'=>$title,
            'posts'=>$posts]);
    }

}