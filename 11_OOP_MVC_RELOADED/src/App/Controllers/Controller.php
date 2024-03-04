<?php
namespace App\Controllers;

class Controller{
    /**
     * This is a common method
     * to display template and
     * send some data
     */
    protected function render($templatePath,$data){
        // Ouvrir la mémoire tempon du serveur
        ob_start();
        // Quand on aura $data['posts'];
        // Grace à extract($data);
        // On pourra récupérer directement
        // $posts dans le template
        extract($data);
        include $templatePath;
        // On charge la mémoire tempon dans le template
        $template = ob_get_clean();
        include './views/base.phtml';
    }
}
