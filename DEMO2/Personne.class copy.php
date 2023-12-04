<?php

class Personne{

    public function __construct(private string $nom,private string $prenom)
    {
        // $this->$nom = $nom;
        // $this->$prenom = $prenom;
    }
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}

    public function setNom($nom){$this->nom = $nom;}
    public function setPrenom($prenom){$this->prenom= $prenom;}

    function afficherInfos(){
        echo "Nom :{$this->nom}, Prenom{$this->prenom}" ;
    }
}