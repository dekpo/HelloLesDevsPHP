<?php
// SI LE FORMULAIRE EST VALIDE
if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $password = htmlentities(strip_tags($_POST['password']));
    $email = htmlentities(strip_tags($_POST['email']));
    // On se connecte à la base de données 
    // Pour vérifier si l'email est dans la table user si c'est le cas on récupère les datas de l'utilisateur
    $db = connectDB();
    $query = $db->prepare("SELECT * FROM user WHERE email=:email LIMIT 1");
    // bindParam permet de renseigner la requête afin de "protéger" le serveur SQL
    $query->bindParam(':email', $email);
    $query->execute();
    // On stocke toutes les infos user dans la variable $user
    $user = $query->fetch(PDO::FETCH_ASSOC);
    // Au départ on suppose qu'il n'y a pas d'erreur
    // Le tableau des erreurs est donc vide
    $errors = [];
    // Si la variable $user n'est pas un tableau
    // Le compte n'est pas présent dans la base de données => error
    if (!is_array($user)){
        $errors[] = "Le compte $email n'existe pas. Veuillez <a href=\"?page=contact\">vous inscrire</a> svp.";
    }
    // Le compte est présent dans la BDD mais le mot-de-passe ne match pas => error
    if (is_array($user) && !password_verify($password, $user['password'])) {
        $errors[] = "Le mot-de-passe semble incorrect.";
    }
    if (empty($errors)){
        unset($user['password']);
        $_SESSION['user'] = $user;
        header("Location:?page=home");
    }
}
// ma logique de controller
// blah blah blah
// On charge la vue
include "./views/base.phtml";
