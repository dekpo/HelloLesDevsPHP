<?php
require_once("Voiture.php");

echo Voiture::IMMATRICULATION;
Voiture::gonflerPneu();

$titine = new Voiture("Renault","Clio II","essence","rose");
echo "Couleur de titine:".$titine->couleur;

echo "<br>Qt Energie:".$titine->getQtEnergie();
$titine->demarrer();

echo "<br>Qt Energie:".$titine->getQtEnergie();
$titine->setQtEnergie(60);
echo "<br>Qt Energie:".$titine->getQtEnergie();
$titine::gonflerPneu();