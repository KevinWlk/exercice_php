<?php
    class Maison{
        private $name; 
        private $height; 
        private $width;
        private $floor;
    
    public function __construct($name, $width, $height, $floor){
        $this -> name = $name;
        $this -> height = $height;
        $this -> width = $width;
        $this -> floor = $floor;
    }

    public function getNom(){
        return $this->name;
    }
    public function getLargeur(){
        return $this->width;
    }
    public function getLongueur(){
        return $this->height;
    }
    public function getFloor(){
        return $this->floor;
    }

    public function setNom($name){
        $this->name = $name;
    }
    public function setWidth($width){
        $this->width = $width;
    }
    public function setHeight($height){
        $this->height = $height;
    }
    public function setFloor($floor){
        $this->floor = $floor;
    }

    public function surfaceMaison(){
        $surface = ($this->height * $this->width) * $this->floor;
        echo "<p>la surface de " . $this->name ." est égale à : $surface m2</p>";

    }

    }
?>