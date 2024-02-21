<?php
// Si les champs email et password arrivent avec la méthode POST
// Et s'ils ne sont pas vides
if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])){
    // On déclare les champs qui vont être utilisés
    // Afin de les traiter en amont de l'insertion
    // Email et Password sont insérés d'abord dans la table user
    $email = htmlentities(strip_tags($_POST['email']));
    $password = htmlentities(strip_tags($_POST['password']));
    // Le mot-de-passe doit être hashé 
    $password = password_hash($password,PASSWORD_DEFAULT);
    // On déclare les champs qui vont être utilisés
    // Afin de les traiter en amont de l'insertion
    $firstname = htmlentities(strip_tags($_POST['firstname']));
    $lastname = htmlentities(strip_tags($_POST['lastname']));
    $address1 = htmlentities(strip_tags($_POST['address1']));
    $address2 = htmlentities(strip_tags($_POST['address2']));
    $city = htmlentities(strip_tags($_POST['city']));
    $state = htmlentities(strip_tags($_POST['state']));
    $zip = htmlentities(strip_tags($_POST['zip']));
    $message = htmlentities(strip_tags($_POST['message']));
    // Au départ on suppose qu'il n'y a pas d'erreur
    // Le tableau des erreurs est donc vide
    $errors = [];
    // Au départ l'email n'est, à priori, pas dans la BDD
    $exists = false;
    // Si l'email n'est pas valide => error
   // var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
    //die();
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Veuillez renseigner une adresse email valide svp.";
    }
    // On doit ensuite vérifier si l'email est déjà dans la BDD
    // On se connecte à la BDD
    $db = connectDB();
    // On recherche si l'email est déjà dans la table user
    $query = $db->prepare("SELECT email FROM user WHERE email=:email");
    // bindParam permet de renseigner la requête afin de "protéger" le serveur SQL
    $query->bindParam(':email', $email);
    $query->execute();
    // fetchColumn cible un résultat uniquement
    // fetchColumn retourne false si aucun résultat n'est trouvé
    $exists = $query->fetchColumn();
    // Si l'email existe déjà dans la BDD => error !
    if ($exists) {
        $errors[] = "Cet utilisateur existe déjà dans la base de données.";
    }
    // S'il n'y a pas d'erreur
    // On effectue l'insertion de l'utilisateur dans la BDD
    if (empty($errors)){
        // On prépare la requête d'insertion pour la table user
        $sql = $db->prepare("INSERT INTO user (email, password) VALUES (:email, :password)");
        // Les champs ne sont pas insérés directement pour des raisons de sécu
        // Mais on utilise une fonction pour "binder" (faire correspondre) les variables/valeurs
        $sql->bindParam(':email', $email);
        $sql->bindParam(':password', $password);
        // On execute l'insertion
        $sql->execute();
        // On récupère l'identifiant de la dernière ligne insérée 
        // avec $db->lastInsertId()
        $user_id = $db->lastInsertId();
        
        // On prépare la requête d'insertion pour la table de contact
        $sql = $db->prepare("INSERT INTO contact (user_id, firstname, lastname, address1, address2, city, state, zip, message) VALUES(:user_id, :firstname, :lastname, :address1, :address2, :city, :state, :zip, :message)");
        $sql->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $sql->bindParam(':firstname', $firstname);
        $sql->bindParam(':lastname', $lastname);
        $sql->bindParam(':address1', $address1);
        $sql->bindParam(':address2', $address2);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':state', $state);
        $sql->bindParam(':zip', $zip);
        $sql->bindParam(':message', $message);
        $sql->execute();
    }    
}

echo "<pre>";
var_dump($_POST);
echo "</pre>";



$state = [
    "Auvergne-Rhône-Alpes",
    "Bourgogne-Franche-Comté",
    "Bretagne",
    "Centre-Val de Loire",
    "Corse",
    "Grand Est",
    "Hauts-de-France",
    "Ile-de-France",
    "Normandie",
    "Nouvelle-Aquitaine",
    "Occitanie",
    "Pays de la Loire",
    "Provence Alpes Côte d’Azur",
    "Guadeloupe",
    "Guyane",
    "Martinique",
    "Mayotte",
    "Réunion"
];
// On charge la vue
include "./views/base.phtml";