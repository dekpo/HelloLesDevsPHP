<?php
// Si $_SESSION['user'] n'est pas défini
// OU $_SESSION['user']['roles'] ne contient pas ROLE_ADMIN
// DANS CE CAS ON REDIRIGE SUR LA HOME
if ( !isset($_SESSION['user']) || !in_array("ROLE_ADMIN",json_decode($_SESSION['user']['roles'])) ){
    header("Location:?page=home");
    exit();
}
// blah blah blah
// On charge la vue
include "./views/base.phtml";