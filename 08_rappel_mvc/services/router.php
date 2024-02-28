<?php
$getPage = isset($_GET['page']) ? $_GET['page'] : "home";
$page = file_exists("./controllers/controller_".$getPage.".php") ? $getPage : "404";