<?php
// ma logique de controller
require_once("./models/Post.php");
$post = new Post();
$posts = $post->getAll(3);
// On charge la vue
include "./views/base.phtml";