<?php
// Si l'utilisateur n'a pas un ROLE_ADMIN
// DANS CE CAS ON REDIRIGE SUR LA HOME
if ( !isRole("ROLE_ADMIN") ){
    header("Location:?page=home");
    exit();
}
$db = connectDB();
$posts = [];
if ($db){
   $sql = $db->prepare("SELECT * FROM post ORDER BY id DESC");
   $sql->execute();
   $posts = $sql->fetchAll(PDO::FETCH_ASSOC);
   // var_dump( $posts );
}
// blah blah blah
// On charge la vue
include "./views/base.phtml";