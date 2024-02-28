<?php
// Si l'utilisateur n'a pas un ROLE_ADMIN
// DANS CE CAS ON REDIRIGE SUR LA HOME
if ( !isRole("ROLE_ADMIN") ){
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