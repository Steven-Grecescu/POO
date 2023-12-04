<?php 

class Employe{

public function __construct(private string $nom,private int $salaire){

}



public function afficherDetails(){
    echo "Nom de l'employer " . $this->nom ," Salaire : " . $this->salaire;
}

}