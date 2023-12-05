<?php 

class Client {
    private $identifiant;
    private $comptes = [];

    public function __construct($identifiant) {
        $this->identifiant = $identifiant;
    }

    public function getIdentifiant(){return $this->identifiant;}
    public function getCompte($numeroCompte){return $this->comptes[$numeroCompte];}

    public function ajouterCompte($numeroCompte) {
        $compte = new Compte($numeroCompte);
        $this->comptes[$numeroCompte] = $compte;
    }

   

    public function getInfoClient() {
        $infoClient = "Identifiant du client : {$this->identifiant}\n";
        foreach ($this->comptes as $compte) {
            $infoClient .=$compte->getInfoCompte() . "\n";
        }
        return $infoClient;
    }
}
