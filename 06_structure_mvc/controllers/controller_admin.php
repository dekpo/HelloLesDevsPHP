<?php
// Si $_SESSION['user'] n'est pas défini
// OU $_SESSION['user']['roles'] ne contient pas ROLE_ADMIN
// DANS CE CAS ON REDIRIGE SUR LA HOME
if ( !isset($_SESSION['user']) || !in_array("ROLE_ADMIN",json_decode($_SESSION['user']['roles'])) ){
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