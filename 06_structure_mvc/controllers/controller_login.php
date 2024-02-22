<?php
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
// SI LE FORMULAIRE EST VALIDE
if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $password = htmlentities(strip_tags($_POST['password']));
    $email = htmlentities(strip_tags($_POST['email']));
    // On se connecte à la base de données 
    // Pour vérifier si l'email est dans la table user si c'est le cas on récupère les datas de l'utilisateur
    $db = connectDB();
    $query = $db->prepare("SELECT * FROM user WHERE email=:email");
    // bindParam permet de renseigner la requête afin de "protéger" le serveur SQL
    $query->bindParam(':email', $email);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // var_dump($user);
    // echo "</pre>";

    if (is_array($user)) {
        $db_hash = $user['password'];
        if (password_verify($password, $db_hash)) {
            echo "YES !";
        } else {
        echo "INVALID ;(";
        }
    }
}
// ma logique de controller
// blah blah blah
// On charge la vue
include "./views/base.phtml";
