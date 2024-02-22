<?php
// Pour la session fontionne 
// ON DOIT IMPERATIVEMENT AVOIR
// UN session_start() au début de chaque
// fichier
session_start();
// Les infos de Session sont simplement
// stockées dans le tableau $_SESSION
// Le contenu est laissé à votre entière
// volonté ;) les devs
// ATTENTION AUX CLES NUMERIQUES
// préférer plutôt des clés chaines/string
$_SESSION['user'] = "Paul";
$_SESSION['maman'] = "Georgette";
$_SESSION['papa'] = "Henry";
$_SESSION['famille'] = "Duchemole";
$_SESSION['hobbies_preferes'] = ["Pates","Pizza","Bière","PHP"];
$_SESSION[0] = 23456;
echo "<pre>";
var_dump($GLOBALS);