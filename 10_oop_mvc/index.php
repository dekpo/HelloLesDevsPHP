<?php
require("./Services/Router.php");
require("./Controllers/HomeController.php");
// On détermine quelle page doit être affichée
// ?page=
$router = new Router();
$page = $router->getPage();

$controllerName = ucfirst($page)."Controller"; // exemple: HomeController
$controller = new $controllerName(); // $controller = new HomeController()
$controller->index();