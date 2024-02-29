<?php

class Voiture{
    // Constantes
    const IMMATRICULATION = "BG-123-FM";

    // Propriétés
    public ?string $marque ;
    public ?string $modele = "";
    public $energie = "";
    public $couleur = "";
    private ?int $qt_energie = 100;

    // Constructeur qui permet de déclencher
    // du code à l'instanciation
    public function __construct($marque,$modele,$energie,$couleur)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->energie = $energie;
        $this->couleur = $couleur;
    }

    public function demarrer(){
        for($i=$this->qt_energie;$i>=0;$i-=10){
            echo "<p>Vroum vroum</p>";
            $this->qt_energie=$i;
        }  
    }

    public function getQtEnergie(){
        return $this->qt_energie;
    }

    public function setQtEnergie($qt){
        $this->qt_energie+=$qt;
    }

    public static function gonflerPneu(){
        echo "<p>Pfff pfff</p>";
    }

}