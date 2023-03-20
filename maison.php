<?php
    class Maison{
        private $nom; 
        private $longueur; 
        private $largeur;
        private $etage;
    
    public function __construct($name, $width, $height, $floor){
        $this -> nom = $name;
        $this -> longueur = $height;
        $this -> largeur = $width;
        $this -> etage = $floor;
    }

    public function getNom(){
        return $this->nom;
    }
    public function getLargeur(){
        return $this->largeur;
    }
    public function getLongueur(){
        return $this->longueur;
    }
    public function getFloor(){
        return $this->etage;
    }

    public function setNom($name){
        $this->nom = $name;
    }
    public function setWidth($width){
        $this->largeur = $width;
    }
    public function setHeight($height){
        $this->longueur = $height;
    }
    public function setFloor($floor){
        $this->etage = $floor;
    }

    public function surfaceMaison(){
        $surface = ($this->longueur * $this->largeur) * $this->etage;
        echo "<p>la surface de " . $this->nom ." est égale à : $surface m2</p>";

    }

    }
?>