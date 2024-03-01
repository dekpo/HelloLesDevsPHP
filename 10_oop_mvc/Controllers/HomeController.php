<?php

class HomeController
{
    public function index(){
        $title = "Hello OOP World";
        $template = './Views/template_home.phtml';
        $this->render($template,[$title]);
    }

    public function render($templatePath,$data){
        // Ouvrir la mémoire tempon du serveur
        ob_start();
        include $templatePath;
        // On charge la mémoire tempon dans le template
        $template = ob_get_clean();
        include './Views/base.phtml';
    }
}