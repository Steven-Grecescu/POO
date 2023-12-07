<?php

class Employe {
    private $nom;
    private $salaire;

    public function __construct($nom, $salaire) {
        $this->nom = $nom;
        $this->salaire = $salaire;
    }

    public function getNom(){return $this->nom;}
    public function getSalaire(){return $this->salaire;}

    public function setNom($nom){$this->nom = $nom;}
    public function setSalaire($salaire){$this->salaire = $salaire;}

public function __toString()
{
    return "Nom : {$this->nom}, Salaire : {$this->salaire} ". "\n";
}

public function augmenterSalaire($pourcentage){

    $salaire = $this->getSalaire();
    $salaire *= ($pourcentage/100); 
    $this->setSalaire($salaire);

}

}
