<?php
// ma logique de controller
// On se connecte à la bas de données
require_once("./models/Post.php");
$post = new Post();
$posts = $post->getAll(null,"SELECT post.*,contact.firstname,contact.lastname FROM post,contact WHERE post.user_id=contact.user_id ORDER BY id DESC");
// blah blah blah
// On charge la vue
include "./views/base.phtml";