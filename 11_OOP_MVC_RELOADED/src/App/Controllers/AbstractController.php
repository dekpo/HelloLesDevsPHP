<?php
namespace App\Controllers;

use App\Services\Authenticator;

abstract class AbstractController{
    /**
     * This is a common method
     * to display template and
     * send some data
     */
    protected function render($templatePath,$data){
        // Ouvrir la mémoire tempon du serveur
        ob_start();
        // $auth peut contenir toute la class Authenticator
        // afin de simplifier la syntaxe dans les vues
        // $auth::isRole("ROLE_ADMIN"); mieux que App\Services\Authenticator::isRole("ROLE_ADMIN")
        $auth = Authenticator::class;
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
