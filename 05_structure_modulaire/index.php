<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site modulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #caroussel img, #gallery div.card img{
            aspect-ratio: 16/10;
        }
    </style>
</head>

<body>
    <?php
    require("header.php");
    ?>
    <main class="container-fluid">
        <?php
        // Si la variable page est définié dans l'url
        // On la récupère sinon c'est "home"
        $getPage = isset($_GET['page']) ? $_GET['page'] : "home";
        // On définit le parcours pour charger la page souhaitée
        $path = "./pages/" . $getPage . ".php";
        // Si le fichier n'existe pas le chemin n'est pas correct
        // on a un parcours vers home qui évite d'afficher une erreur
        $page = file_exists($path) ? $path : "./pages/home.php";
        // On charge la page souhaitée avec un include ou un require
        include($page);
        ?>
    </main>
    <?php
    require("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>