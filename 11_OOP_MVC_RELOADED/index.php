<?php
namespace App;

use App\Services\Authenticator;
use App\Services\Router;
// On charge la config
require_once("config.php");
// On charge l'autoloader
require_once("autoload.php");
// On start la session avec Authenticator
$auth = new Authenticator();
// On détermine quelle page doit être affichée
// ?page=
$router = new Router();
$page = $router->getPage();
$router->run();