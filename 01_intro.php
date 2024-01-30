<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma première page PHP</title>
</head>
<body>
    <h1>Ma première page PHP</h1>

    <?php
    // Ceci est un commentaire sur une ligne
    $date = "29 Janvier 2024";
    /**
     * Ceci est un commentaire
     * sur plusieurs lignes
     */

    $total = 50+15; // calcul (entier)
    $delivery = true; // boolean
    $rate = 0.055; // float
    $vat = $total*$rate; // calcul (float)
    $info = "Vous restez nous devoir la somme de $total+$vat";

    $array = ["banane"=>"milkshake","poire"=>"belle hélène","pomme"=>"tarte"];


    class Voiture{
        public $color = "red";
        public $energy = "gas";
        public $options = NULL;
        public function start(){
            echo "Vroum vroum..";
        }
    }
    $twingo = new Voiture();
    $tesla = new Voiture();
    $tesla->energy = "electric";
    $tesla->start();


    // var_dump est une fonction pour debugger
    echo "<pre>";
    var_dump($tesla->options);
    echo "</pre>";

    echo "<br><br><br>";
    echo "Le montant de la commande est de ".$total."€";
    echo "<br>";
    echo "Donc la TVA est de $vat €";
    echo "<br>";
    echo $date;

     phpinfo(); 
    ?>

</body>
</html>