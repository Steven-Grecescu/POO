<?php

require_once "Models/LivreManager.php";

class LivreController{
    
    private $livreManager;
    private $livres;

    public function __construct(){
        require_once "Models/LivreManager.php";
        $this->livreManager = new LivreManager;
        $this->livreManager->chargementLivre();

    }

    public function afficherLivre(){
        
        $livres = $this->livreManager->getLivre();
        require_once "Views/livres.view.php";
    }
}