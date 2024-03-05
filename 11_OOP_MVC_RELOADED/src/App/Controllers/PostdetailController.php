<?php
namespace App\Controllers;

use App\Models\PostManager;
use App\Models\CommentManager;
use App\Controllers\AbstractController;

class PostdetailController extends AbstractController
{
    public function index(){
        // On récup l'id du post
        $post_id = (int)$_GET['id'];
        // On charge les infos du post
        $p_manager = new PostManager();
        $sql = "SELECT post.*,contact.firstname,contact.lastname FROM post,contact WHERE post.id=? AND post.user_id=contact.user_id LIMIT 1";
        $post = $p_manager->getOne($sql,[$post_id]);
        // On charge tous les commentaires correspondants
        $sql = "SELECT comment.*,contact.firstname,contact.lastname FROM comment,contact WHERE comment.post_id='".$post_id."' AND comment.user_id=contact.user_id ORDER BY id DESC";
        $c_manager = new CommentManager();
        $comments = $c_manager->getAll(null,$sql);
        $template = './views/template_postdetail.phtml';
        $this->render($template,[
            "article" => $post,
            "post_id" => $post_id,
            "comments" => $comments
        ]);
    }

}