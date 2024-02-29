<?php
// ma logique de controller
// On se connecte à la bas de données
require_once("./models/Post.php");
$post = new Post();
$posts = $post->getAll(3);
// On charge la vue
include "./views/base.phtml";