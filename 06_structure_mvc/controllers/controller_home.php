<?php
// ma logique de controller
// On se connecte à la bas de données
$db = Utils::connectDB();
$posts = [];
if ($db){
   $sql = $db->prepare("SELECT * FROM post ORDER BY id LIMIT 3");
   $sql->execute();
   // echo "<pre>";
   $posts = $sql->fetchAll(PDO::FETCH_ASSOC);
   // var_dump( $posts );
}
// On charge la vue
include "./views/base.phtml";