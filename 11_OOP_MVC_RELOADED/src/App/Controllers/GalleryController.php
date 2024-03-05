<?php
namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Models\PostManager;
use App\Models\UserManager;

class GalleryController extends AbstractController
{
    public function index(){
        $title = "Hello this is the GalleryController ;)";
        $dbPost = new PostManager();
        $posts = $dbPost->getAll(null,"SELECT post.*,contact.firstname,contact.lastname FROM post,contact WHERE post.user_id=contact.user_id ORDER BY id DESC");
        
        $dbUser = new UserManager();
        $users = $dbUser->getAll();

        $template = './views/template_gallery.phtml';

        $this->render($template,[
            'title'=>$title,
            'posts'=>$posts,
            'users'=>$users
        ]);
    }

}