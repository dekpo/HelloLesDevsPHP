<?php
// Si $_SESSION['user'] n'est pas défini
// OU $_SESSION['user']['roles'] ne contient pas ROLE_ADMIN
// DANS CE CAS ON REDIRIGE SUR LA HOME
if ( !isset($_SESSION['user']) || !in_array("ROLE_ADMIN",json_decode($_SESSION['user']['roles'])) ){
    header("Location:?page=home");
    exit();
}
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
// ma logique de controller
// SI LE FORMULAIRE EST VALIDE
if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['image']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['image'])) {
// On récup les champs du formulaire et on effectue une requête d'insertion
$title = htmlentities(strip_tags($_POST['title']));
$description = htmlentities(strip_tags($_POST['description']));
$image = htmlentities(strip_tags($_POST['image']));
$db = connectDB();
$sql = $db->prepare("INSERT INTO post (title, description, image) VALUES (:title, :description, :image)");
        // Les champs ne sont pas insérés directement pour des raisons de sécu,
        // Mais on utilise une fonction pour "binder" (faire correspondre) les variables/valeurs
        $sql->bindParam(':title', $title);
        $sql->bindParam(':description', $description);
        $sql->bindParam(':image', $image);
        // On execute l'insertion
        $sql->execute();
        // Après l'insertion on redirige l'utilisateur sur le dashboard admin
        header("Location:?page=admin");
}
// blah blah blah
// On charge la vue
include "./views/base.phtml";