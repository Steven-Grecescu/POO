<?php 

class Employe{

public function __construct(private string $nom,private int $salaire){

}

public function getNom(){return $this->nom;}
public function getSalaire(){return $this->salaire;}

public function setNom($nom){$this->$nom = $nom;}
public function setSalaire($salaire){$this->$salaire = $salaire;}


public function afficherDetails(){
    echo "Nom de l'employer " . $this->nom ," Salaire : " . $this->salaire;
}

}