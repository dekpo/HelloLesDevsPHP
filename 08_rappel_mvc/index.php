<?php 
    require("./config.php");
    // C'est quelle page que le mobinaute veut voir ?
    // On récupère donc la variable "page" dans l'url
    // Si la variable page est définie dans l'url on la récupère
    // Sinon on considère que la variable page est vide donc c'est la home
    require("./services/router.php");
    require("./controllers/controller_".$page.".php");
?>