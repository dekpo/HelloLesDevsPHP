<?php
spl_autoload_register(function ($class_name) {
    require "./src/". $class_name . '.php';
});