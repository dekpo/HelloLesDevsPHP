<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test des $GLOBALS dans un formulaire</title>
    <style>
        input{
            display: block;
        }
    </style>
</head>
<body>
<?php
// On initialise un tableau d'erreurs potentielles vide au départ
$errors = [];
// Si la variable "avatar" arrive par le bias
// de la méthode FILES (le formulaire est validé)
if ( isset($_FILES['avatar']) ) {

    // Si l'un des champs est vide
    // On génère une erreur
    if ( empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_FILES['avatar']['name']) )
    {
        $errors[] = "Tous les champs sont obligatoires merci !";
    }
    // On définit les types mime acceptés
    $accepted = ["image/png","image/jpeg"];
    // Si le type de fichier n'existe pas dans les types acceptés
    // On génère une erreur
    if ( !in_array($_FILES['avatar']['type'],$accepted) ){
        $errors[] = "Ce type de fichier (".$_FILES['avatar']['type'].") n'est pas accepté !";
    }
    // On doit transformer le nom de fichier en tableau array afin d'en extraire l'extension
    $arrayName = explode(".",$_FILES['avatar']['name']);
    //$extension = $arrayName[1];
    $extension = end($arrayName); // mieux de prendre le dernier index ;)
    // var_dump($extension);
    // die();
    // On définit un nouveau nom
    $newFile = "./uploads/avatar_".time().".".$extension;

    // Si le tableau des erreurs est vide :
    if (empty($errors)){
        echo "<h1>Le fichier a été uploadé</h1>";
        // On copie le fichier temporaire de $_FILES['avatar'] dans le dossier "uploads" avec son nouveau nom
        move_uploaded_file($_FILES['avatar']['tmp_name'],$newFile);
    }
}
echo "<pre>";
var_dump($errors);
echo "</pre>";
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
    <label for="name">Name*</label>
    <input type="text" name="name" id="name" required>
    <label for="name">Email*</label>
    <input type="text" name="email" id="email" required>
    <label for="name">Password*</label>
    <input type="password" name="password" id="password" required>
    <label for="name">Avatar*</label>
    <input type="file" accept="image/png, image/jpeg" name="avatar" id="avatar" required>
    <input type="submit" value="Envoyer">
</form>
<?php
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";
?> 
</body>
</html>