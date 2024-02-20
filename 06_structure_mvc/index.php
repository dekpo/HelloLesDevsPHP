<?php
// On charge la config
require "./config.php";
// On charge le router
require "./services/router.php";
// On charge le controller
require "./controllers/controller_{$page}.php";