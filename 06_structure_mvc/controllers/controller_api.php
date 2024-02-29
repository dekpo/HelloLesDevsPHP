<?php
// ma logique de controller
// On se connecte à la bas de données
$db = connectDB();
$posts = [];
if ($db){
   $sql = $db->prepare("SELECT post.*,contact.firstname,contact.lastname FROM post,contact WHERE post.user_id=contact.user_id ORDER BY id DESC");
   $sql->execute();
   $posts = $sql->fetchAll(PDO::FETCH_ASSOC);
}
header('content-type:application/json');
echo json_encode($posts);