<?php
namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Models\ContactManager;
use App\Models\UserManager;
use App\Services\Utils;

class ContactController extends AbstractController
{
    public function index()
    {
        $isFinished = false;
        $errors = [];
        $email = "";
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
        ////////////// LOGIQUE D'INSERTION USER/CONTACT ////////
        if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])){
            // On déclare les champs qui vont être utilisés
            // Afin de les traiter en amont de l'insertion
            // Email et Password sont insérés d'abord dans la table user
            $email = Utils::inputCleaner($_POST['email']);
            $password = Utils::inputCleaner($_POST['password']);
            // Le mot-de-passe doit être hashé 
            $password = password_hash($password,PASSWORD_DEFAULT);
            // On déclare les champs qui vont être utilisés
            // Afin de les traiter en amont de l'insertion
            $firstname = Utils::inputCleaner($_POST['firstname']);
            $lastname = Utils::inputCleaner($_POST['lastname']);
            $address1 = Utils::inputCleaner($_POST['address1']);
            $address2 = Utils::inputCleaner($_POST['address2']);
            $city = Utils::inputCleaner($_POST['city']);
            $state = Utils::inputCleaner($_POST['state']);
            $zip = Utils::inputCleaner($_POST['zip']);
            $message = Utils::inputCleaner($_POST['message']); 
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
            $userManager = new UserManager();
            $exists = $userManager->getUserByEmail($email);
            // Si l'email existe déjà dans la BDD => error !
            if ($exists) {
                $errors[] = "Cet utilisateur existe déjà dans la base de données.";
            }
            // S'il n'y a pas d'erreur
            // On effectue l'insertion de l'utilisateur dans la BDD
            if (empty($errors)){
                // On prépare la requête d'insertion pour la table user
                $insertUser = $userManager->insert([$email,$password,"[]"]);
                $user_id = $insertUser->lastInsertId();
                
                $contactManager = new ContactManager();
                $updated_at = date("Y-m-d H:i:s");
                $insertContact = $contactManager->insert([
                    $user_id,
                    $firstname,
                    $lastname,
                    $address1,
                    $address2,
                    $city,
                    $state,
                    $zip,
                    $message,
                    $updated_at
                ]);
                /// ON EST BON LA
                $isFinished = true;
            }    
        }
        ////////////// TEMPLATING //////////////////
        $template = './views/template_contact.phtml';
        $this->render($template,[
            "isFinished" => $isFinished,
            "state" => $state,
            "errors" => $errors,
            "email"=> $email
        ]);
    }

}