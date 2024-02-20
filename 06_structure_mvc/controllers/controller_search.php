<?php
// ma logique de controller
// On se connecte à la bas de données
$db = connectDB();
$keywords = strip_tags(urldecode(trim($_GET['keywords'])));
$posts = [];
if ($db){
   $sql = $db->prepare("SELECT * FROM post WHERE title LIKE '%".$keywords."%' OR description LIKE '%".$keywords."%' OR image LIKE '%".$keywords."%' ORDER BY id");
   $sql->execute();
   //echo "<pre>";
   $posts = $sql->fetchAll(PDO::FETCH_ASSOC);
   //var_dump( $posts );
}
// ma logique de controller
// blah blah blah
// On charge la vue
include "./views/base.phtml";