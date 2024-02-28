<?php
// Si l'utilisateur n'a pas un ROLE_ADMIN
// DANS CE CAS ON REDIRIGE SUR LA HOME
if ( !isRole("ROLE_ADMIN") ){
    header("Location:?page=home");
    exit();
}
// On doit récupérer l'id du post dans l'url
// Donc $post_id = (int)$_GET['id'];
$post_id = (int)$_GET['id'];
// On effectue la requête SQL permettant de récupérer les données du post
$db = connectDB();
$sql = $db->prepare("SELECT * FROM post WHERE id=$post_id");
$sql->execute();
$the_post = $sql->fetch(PDO::FETCH_ASSOC);
// SI LE FORM EST VALIDE ET QUE LES CHAMPS NE SONT PAS VIDES
if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['image']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['image'])) {
    // On récup les champs du formulaire et on effectue une requête d'update
    $title = htmlentities(strip_tags($_POST['title']));
    $description = htmlentities(strip_tags($_POST['description']));
    $image = htmlentities(strip_tags($_POST['image']));
    $sql = $db->prepare("UPDATE `post` SET `title` = :title, `description` = :description, `image` = :image  WHERE `post`.`id` = $post_id");
            // Les champs ne sont pas insérés directement pour des raisons de sécu,
            // Mais on utilise une fonction pour "binder" (faire correspondre) les variables/valeurs
            $sql->bindParam(':title', $title);
            $sql->bindParam(':description', $description);
            $sql->bindParam(':image', $image);
            // On execute l'update
            $sql->execute();
            // Après l'update on redirige l'utilisateur sur le dashboard admin
            header("Location:?page=admin");
    }
// echo "<pre>";
// var_dump($the_post);
// echo "</pre>";
// blah blah blah
// On charge la vue
include "./views/base.phtml";