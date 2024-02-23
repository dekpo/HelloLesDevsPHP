<?php
// Si $_SESSION['user'] n'est pas défini
// OU $_SESSION['user']['roles'] ne contient pas ROLE_ADMIN
// DANS CE CAS ON REDIRIGE SUR LA HOME
if ( !isset($_SESSION['user']) || !in_array("ROLE_ADMIN",json_decode($_SESSION['user']['roles'])) ){
    header("Location:?page=home");
    exit();
}
// On doit récupérer l'id du post à supprimer
// donc on définit la variable $post_id
// Nota Bene la syntaxe (int) permet de forcer le type à un entier
$post_id = (int)$_GET['id'];
// echo "ATTENTION SUPPRESSION DU POST ".$post_id;
$db = connectDB();
$sql = $db->prepare("DELETE FROM post WHERE id=$post_id");
$sql->execute();
header("Location:?page=admin");
// ma logique de controller
// blah blah blah