<?php
// Si la variable page est définié dans l'url
// On la récupère sinon c'est "home"
$getPage = isset($_GET['page']) ? $_GET['page'] : "home";
// On définit le parcours pour charger la page souhaitée
$path = "./controllers/controller_" . $getPage . ".php";
// Si le fichier n'existe pas le chemin n'est pas correct
// on a un parcours vers home qui évite d'afficher une erreur
$controller = file_exists($path) ? $path : "./controllers/controller_home.php";
// On charge la page souhaitée avec un include ou un require
require $controller;
