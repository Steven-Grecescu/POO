<?php

class Stagiaire{

    public function __construct(private string $nom,private array $notes)
    {
        $this->$nom = $nom;
        $this->$notes = $notes;

    }

    public function getNom(){return $this->nom;}

    public function calculerMoyenne(){
        $a = array_sum($this->notes);
        $a = $a / count($this->notes);
        echo " Moyenne : ". $a;
    }
    public function trouverMin(){
        echo " Minimum : ". min($this->notes);

    }
    public function trouverMax(){
        echo " Maximum : ". max($this->notes);
        
    }
}