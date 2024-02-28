<?php
// Si l'utilisateur n'a pas un ROLE_ADMIN
// DANS CE CAS ON REDIRIGE SUR LA HOME
if ( !isRole("ROLE_ADMIN") ){
    header("Location:?page=home");
    exit();
}
// ma logique de controller
// SI LE FORMULAIRE EST VALIDE
if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['image']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['image'])) {
// On récup les champs du formulaire et on effectue une requête d'insertion
$title = inputCleaner($_POST['title']);
$description = inputCleaner($_POST['description']);
$image = inputCleaner($_POST['image']);
$db = connectDB();
$sql = $db->prepare("INSERT INTO post (user_id,title, description, image) VALUES (:user_id, :title, :description, :image)");
        // Les champs ne sont pas insérés directement pour des raisons de sécu,
        // Mais on utilise une fonction pour "binder" (faire correspondre) les variables/valeurs
        $sql->bindParam(':user_id', $_SESSION['user']['id']);
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