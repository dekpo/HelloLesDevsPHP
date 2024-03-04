<?php
namespace App\Controllers;

use App\Models\Post;

class HomeController
{
    public function index(){
        $title = "Hello OOP World";
        $template = './views/template_home.phtml';
        $p = new Post();
        $posts = $p->getAll(3);
        $this->render($template,[$title,'posts'=>$posts]);
    }

    public function render($templatePath,$data){
        // Ouvrir la mémoire tempon du serveur
        ob_start();
        include $templatePath;
        // On charge la mémoire tempon dans le template
        $template = ob_get_clean();
        include './views/base.phtml';
    }
}