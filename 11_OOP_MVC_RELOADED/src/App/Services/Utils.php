<?php
namespace App\Services;

class Utils
{
  
    // Fonction de recherche de role
    static function isRole($role)
    { // retourne true ou false
        // Si $_SESSION['user'] est défini
        // ET $_SESSION['user']['roles'] contient le rôle indiqué
        // $is_role retourne un booleen true/false
        $is_role = isset($_SESSION['user']) && in_array($role, json_decode($_SESSION['user']['roles']));
        return $is_role;
    }
    // Fonctions de debug simple
    static function dump($var)
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }
    // Fonctions de debug avec un die
    static function dump_die($var)
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
        die();
    }
    // Fonction de nettoyage des chaines provenant des formulaire
    static function inputCleaner($input)
    {
        $string = htmlentities(strip_tags($input));
        return $string;
    }
}
