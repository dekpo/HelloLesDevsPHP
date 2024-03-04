<?php
namespace App\Controllers;

use App\Controllers\AbstractController;

class NotFoundController extends AbstractController
{
    public function index(){
        $title = "This page does not exists ;-(";
        $template = './views/template_notfound.phtml';

        $this->render($template,[
            "title"=>$title
        ]);
    }

}