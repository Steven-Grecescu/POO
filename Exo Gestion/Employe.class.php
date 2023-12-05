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


    public function setNom($nom){$this->$nom = $nom;}
    public function setSalaire($salaire){$this->$salaire = $salaire;}

    public function afficherDetails() {
        echo "Nom de l'employé : {$this->nom}<br>";
        echo "Salaire de l'employé : {$this->salaire} €<br>";
    }
}



