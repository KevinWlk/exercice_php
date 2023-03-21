<?php
    class Vehicule{
        private $name; 
        private $nbrRoue; 
        private $vitesse;
    
    public function __construct($name, $nbrRoue, $vitesse){
        $this -> name = $name;
        $this -> nbrRoue = $nbrRoue;
        $this -> vitesse = $vitesse;

    }

    public function getName(){
        return $this->name;
    }
    public function getnbrRoue(){
        return $this->nbrRoue;
    }
    public function getVitesse(){
        return $this->vitesse;
    }


    public function setName($name){
        $this->name = $name;
    }
    public function setnbrRoue($nbrRoue){
        $this->nbrRoue = $nbrRoue;
    }
    public function setVitesse($vitesse){
        $this->vitesse = $vitesse;
    }

    public function detect(){
        if ($this->nbrRoue ===2){
            return "Moto";
        } else if($this->nbrRoue==4){
            return "Voiture";
        } else {
            return "ORNI";
        }
    }
    public function boost(){
        $this->vitesse += 50;
    }
    public function plusRapide($vehiculeBis){
        if($this->vitesse < $vehiculeBis->vitesse){
            return $vehiculeBis->getName();
        } else {
            return $this->getName();
        }
    }
    public function __toString(){
        return $this->name;
    }
}
?>