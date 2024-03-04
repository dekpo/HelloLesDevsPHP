<?php
namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Models\Post;

class HomeController extends AbstractController{
    public function index(){
        $title = "Hello OOP World";
        $template = './views/template_home.phtml';
        $p = new Post();
        $posts = $p->getAll(3);
        $this->render($template,[
            'title'=>$title,
            'posts'=>$posts]);
    }

}