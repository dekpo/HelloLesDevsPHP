<?php
// ma logique de controller
try {
    $db = new PDO('mysql:host=localhost;port=3310;dbname=mvc_php', 'root', 'motdepassrootquivabienmachin');
} catch (PDOException $e) {
    $error = $e;
    // tenter de réessayer la connexion après un certain délai, par exemple
    echo "Hum problème de connexion au serveur de base de données: ".$e;
}
if (!isset($error)){
   $sql = $db->prepare("SELECT * FROM post ORDER BY id LIMIT 3");
   $sql->execute();
   // echo "<pre>";
   $posts = $sql->fetchAll(PDO::FETCH_ASSOC);
   // var_dump( $posts );
}
// On charge la vue
include "./views/base.phtml";