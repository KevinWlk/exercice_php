<?php
    class Maison{
        private $name; 
        private $height; 
        private $width;
    
    public function __construct($name, $width, $height){
        $this -> name = $name;
        $this -> height = $height;
        $this -> width = $width;
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


    public function setNom($name){
        $this->name = $name;
    }
    public function setWidth($width){
        $this->width = $width;
    }
    public function setHeight($height){
        $this->height = $height;
    }


    public function surfaceMaison(){
        $surface = $this->height * $this->width;
        echo "<p>la surface de " . $this->name ." est égale à : $surface m2</p>";

    }

    }
?>