<?php
// Nouvelle méthode pour déclarer des constantes
const CONFIG_SITE_TITLE = "Mon Superbe MVC";
// Ancienne méthode pour déclarer des constantes
define("CONFIG_SITE_SLOGAN","Cette magnifique structure permet de séparer les responsabilités afin de mieux maintenir notre code.");
const DB_HOST = "localhost";
const DB_PORT = "3310";
const DB_NAME = "mvc_php";
const DB_USER = "root";
const DB_PASS = "motdepassrootquivabienmachin";


/////////////////////////////// FONCTION UTILES  ////////////////////////////////////

// Fonction de connexion à la base de données
function connectDB(){
    $db = false;
    try {
        $db = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME, DB_USER,DB_PASS);
    } catch (PDOException $e) {
        $error = $e;
        // tenter de réessayer la connexion après un certain délai, par exemple
        echo "Hum problème de connexion au serveur de base de données: ".$e;
    }
    return $db;
}
// Fonction de recherche de role
function isRole($role){ // retourne true ou false
    // Si $_SESSION['user'] est défini
    // ET $_SESSION['user']['roles'] contient le rôle indiqué
    // $is_role retourne un booleen true/false
    $is_role = isset($_SESSION['user']) && in_array($role,json_decode($_SESSION['user']['roles']));
    return $is_role;
}
// Fonctions de debug simple
function dump($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}
// Fonctions de debug avec un die
function dump_die($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}