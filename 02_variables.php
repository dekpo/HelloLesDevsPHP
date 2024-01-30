<?php
$x = 5; // $x is an integer

// les constantes n'ont pas de dollar
const app = "My Wonderfull App"; // méthode moderne pour les constantes
define("APP","MY WONDERFULL APP"); // méthode ancienne pour les constantes

function myCart() {
    global $x;
    echo "<p>Le montant de la commande est de $x €</p>";
    echo "Mon application se nomme ".APP;
}

echo "Ma variable x est bien reconnue à l'extérieur: $x";

myCart();