<?php
namespace App\Controllers;

class GalleryController
{
    public function index(){
        $title = "Hello this is the GalleryController ;)";
        $template = './views/template_home.phtml';
        $this->render($template,[$title]);
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