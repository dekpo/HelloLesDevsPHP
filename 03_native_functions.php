<?php
// Afficher la date et l'heure en jj/mm/aaaa h:m:s
$date = date("d/m/Y H:i:s");
echo "<h1>$date</h1>";

// Afficher le nombre de secondes écoulées depuis le premier janvier 1970 ;)
$time = time();
echo "<h2>Nombre de secondes écoulées depuis le premier janvier 1970: $time</h2>";

// Utiliser PI
$pi = pi();
echo "<h3>Utiliser PI: $pi</h3>";

// Racine carré de 9
$sqrt = sqrt(9);
echo "<h3>Racine carré de 9: $sqrt</h3>";



// Tirer un nombre aléatoire entre 0 et 9
$random = rand(0,9);
echo "Tirer un nombre aléatoire entre 0 et 9: <strong>$random</strong>";
$array_img = [
    "https://cdn.pixabay.com/photo/2024/01/11/09/50/village-8501168_1280.jpg",
    "https://cdn.pixabay.com/photo/2013/08/28/00/54/field-176602_1280.jpg",
    "https://cdn.pixabay.com/photo/2015/01/28/23/34/mountains-615428_1280.jpg",
    "https://cdn.pixabay.com/photo/2017/02/01/22/02/mountain-landscape-2031539_1280.jpg",
    "https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823_1280.jpg",
    "https://cdn.pixabay.com/photo/2016/09/21/04/46/barley-field-1684052_1280.jpg",
    "https://cdn.pixabay.com/photo/2015/01/28/23/35/hills-615429_1280.jpg",
    "https://cdn.pixabay.com/photo/2017/06/11/02/05/wheat-2391348_1280.jpg",
    "https://cdn.pixabay.com/photo/2024/01/11/09/50/village-8501168_1280.jpg",
    "https://cdn.pixabay.com/photo/2013/08/28/00/54/field-176602_1280.jpg",
    "https://cdn.pixabay.com/photo/2015/01/28/23/34/mountains-615428_1280.jpg"
];
$source = $array_img[$random];
echo "<img src=\"$source\" alt=\"Random Image\" width=\"100%\">";

echo "<h3>Compter le nombre d'entrées dans un tableau</h3>";
echo count($array_img);


echo "<h3>Retourner du Json:</h3>";
echo json_encode($array_img);