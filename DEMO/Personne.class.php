<?php

class Personne{

    public function __construct(public string $nom,public string $prenom)
    {
        $this->$nom = $nom;
        $this->$prenom = $prenom;
    }
    function afficherInfos(){
        
    }
}