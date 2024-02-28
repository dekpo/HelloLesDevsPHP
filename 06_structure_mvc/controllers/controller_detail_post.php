<?php
// ma logique de controller
// On se connecte à la bas de données
$db = connectDB();
$post_id = (int)$_GET['id'];
if (isset($_POST['comment']) && !empty($_POST['comment'])){
   $comment = htmlentities(strip_tags($_POST['comment']));
   $insert = $db->prepare("INSERT INTO comment (post_id,user_id,message) VALUES (:post_id,:user_id,:comment)" );
   $insert->bindParam(':post_id', $post_id);
   $insert->bindParam(':user_id', $_SESSION['user']['id']);
   $insert->bindParam(':comment', $comment);
   $insert->execute();
}
$article = [];
if ($db){
   // Requête pour les infos du post
   $sql = $db->prepare("SELECT post.*,contact.firstname,contact.lastname FROM post,contact WHERE post.id='".$post_id."' AND post.user_id=contact.user_id LIMIT 1");
   $sql->execute();
   $article = $sql->fetch(PDO::FETCH_ASSOC);
   // Requête pour les commentaires du post
   $sql = $db->prepare("SELECT comment.*,contact.firstname,contact.lastname FROM comment,contact WHERE comment.post_id='".$post_id."' AND comment.user_id=contact.user_id ORDER BY id DESC");
   $sql->execute();
   $comments = $sql->fetchAll(PDO::FETCH_ASSOC);
}

// ma logique de controller
// blah blah blah
// On charge la vue
include "./views/base.phtml";