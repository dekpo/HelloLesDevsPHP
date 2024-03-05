<?php
namespace App\Services;

class Utils
{
  
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
