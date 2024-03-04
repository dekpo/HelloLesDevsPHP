<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Post;

class GalleryController extends Controller
{
    public function index(){
        $title = "Hello this is the GalleryController ;)";
        $dbPost = new Post();
        $posts = $dbPost->getAll();
        $template = './views/template_home.phtml';

        $this->render($template,[$title,'posts'=>$posts]);
    }

}