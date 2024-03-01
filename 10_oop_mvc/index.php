<?php
namespace App;

use App\Services\Router;
// On charge l'autoloader
require_once("autoload.php");

// On détermine quelle page doit être affichée
// ?page=
$router = new Router();
$page = $router->getPage();

// exemple: App\Controllers\HomeController
$controllerName = "App\Controllers\\".ucfirst($page)."Controller";
$controller = new $controllerName(); // $controller = new HomeController()
$controller->index();