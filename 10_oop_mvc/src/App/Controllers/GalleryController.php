<?php
namespace App\Controllers;

use App\Models\Post;

class GalleryController
{
    public function index(){
        $title = "Hello this is the GalleryController ;)";
        $dbPost = new Post();
        $posts = $dbPost->getAll();
        $template = './views/template_home.phtml';

        $this->render($template,[$title,'posts'=>$posts]);
    }

    public function render($templatePath,$data){
        // Ouvrir la mémoire tempon du serveur
        ob_start();
        extract($data);
        include $templatePath;
        // On charge la mémoire tempon dans le template
        $template = ob_get_clean();
        include './views/base.phtml';
    }
}