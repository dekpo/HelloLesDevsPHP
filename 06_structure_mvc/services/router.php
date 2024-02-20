<?php
// Si la variable page est définié dans l'url
// On la récupère sinon c'est "vide"
$getPage = isset($_GET['page']) ? strtolower($_GET['page']) : "";
// On définit le parcours pour charger le controller souhaité
$path = "./controllers/controller_" . $getPage . ".php";
// Si le fichier n'existe pas le chemin n'est pas correct
// on a un parcours vers home qui évite d'afficher une erreur
$page = file_exists($path) ? $getPage : "home";
// On charge le controller souhaité avec un include ou un require