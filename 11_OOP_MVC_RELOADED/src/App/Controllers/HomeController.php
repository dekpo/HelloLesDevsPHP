<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        $title = "Hello OOP World";
        $template = './views/template_home.phtml';
        $p = new Post();
        $posts = $p->getAll(3);
        $this->render($template,[$title,'posts'=>$posts]);
    }
}