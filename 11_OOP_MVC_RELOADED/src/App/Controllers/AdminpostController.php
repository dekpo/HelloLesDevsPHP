<?php

namespace App\Controllers;

use App\Services\Utils;
use App\Models\PostManager;
use App\Models\CommentManager;
use App\Services\Authenticator;
use App\Controllers\AbstractController;

class AdminpostController extends AbstractController
{


    public function __construct()
    {
        if (!Authenticator::isRole("ROLE_ADMIN")) {
            header("Location:?page=home");
            die();
        }
    }

    public function index()
    {
        $template = './views/template_admin_post_add.phtml';
        $this->render($template, []);
    }
    public function create()
    {
        $manager = new PostManager();
        if (isset($_POST['title'])) {
            $title = Utils::inputCleaner($_POST['title']);
            $description = Utils::inputCleaner($_POST['description']);
            $image = Utils::inputCleaner($_POST['image']);
            $insert = $manager->insert([
                $_SESSION['user']['id'],
                $title,
                $description,
                $image,
                date("Y-m-d H:i:s")
            ]);
            $lastid = $insert->lastInsertId();
        }
        header("Location:?page=admin&newpost=".$lastid);
        die();
    }

    
    public function update()
    {
        $post_id = (int)$_GET['id'];
        $manager = new PostManager();
        if (isset($_POST['title'])) {
            $title = Utils::inputCleaner($_POST['title']);
            $description = Utils::inputCleaner($_POST['description']);
            $image = Utils::inputCleaner($_POST['image']);
            $update = $manager->update($post_id, [
                $_SESSION['user']['id'],
                $title,
                $description,
                $image,
                date("Y-m-d H:i:s")
            ]);
            header("Location:?page=admin");
            die();
        }
        $post = $manager->getOneById($post_id);
        $template = './views/template_admin_post_update.phtml';
        $this->render($template, [
            'post_id' => $post_id,
            'the_post' => $post
        ]);
    }

    public function delete()
    {
        $post_id = (int)$_GET['id'];
        // ATTENTION SUPPRESSION DE TOUS LES COMMENTAIRES DU POST $post_id;
        $manager = new CommentManager();
        $deleteComment = $manager->deleteComments($post_id);
        // ATTENTION SUPPRESSION DU POST $post_id;
        $manager = new PostManager();
        $delete = $manager->delete($post_id);
        header("Location:?page=admin");
        die();
    }
}
