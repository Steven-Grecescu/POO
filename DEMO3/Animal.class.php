<?php
class Animal{

    public function __construct( private string $nom , private int $age){

    }

    public function afficherInfos(){
        echo "Nom : {$this->nom} <br> ";
        echo "Age : {$this->age} ans <br> ";
        
    }

}