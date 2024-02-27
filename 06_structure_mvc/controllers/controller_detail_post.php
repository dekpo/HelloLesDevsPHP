<?php
// ma logique de controller
// On se connecte à la bas de données
$db = connectDB();
$article = [];
if ($db){
   $sql = $db->prepare("SELECT post.*,contact.firstname,contact.lastname FROM post,contact WHERE post.id='".$_GET['id']."' AND post.user_id=contact.user_id LIMIT 1");
   $sql->execute();
   //echo "<pre>";
   $article = $sql->fetch(PDO::FETCH_ASSOC);
   //var_dump( $posts );
}
// ma logique de controller
// blah blah blah
// On charge la vue
include "./views/base.phtml";