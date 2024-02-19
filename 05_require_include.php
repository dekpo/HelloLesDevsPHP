<?php
// include() permet de charger un fichier externe
// include ne retourne qu'un Warning en cas de problème de chargement
include("./05_texte.txt");
// require() permet de faire la même chose mais attention
// require retourne une erreur fatale en cas d'echec de chargement
require("./05_texte.html");
require("./05_code.php");
echo $date;
$server = $_SERVER;
var_dump($server);