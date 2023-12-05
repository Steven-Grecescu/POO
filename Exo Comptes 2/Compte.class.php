<?php

class Compte {
    private $numeroCompte;
    private $solde;

    public function __construct($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        $this->solde = 0;
    }

    public function getNumeroCompte() {return $this->numeroCompte;}
    public function getSolde() {return $this->solde;}

    public function deposerArgent($montant) {
        $this->solde += $montant;
        echo "Versement de $montant € effectué. Nouveau solde : {$this->solde} €\n";
    }

    public function retirerArgent($montant) {
        if ($montant <= $this->solde) {
            $this->solde -= $montant;
            echo "Retrait de $montant € effectué. Nouveau solde : {$this->solde} €\n";
        } else {
            echo "Solde insuffisant pour effectuer le retrait.\n";
        }
    }

    public function effectuerVirement($montant, $compteDestinataire) {
        if ($montant <= $this->solde) {
            $this->solde -= $montant;
            $compteDestinataire->deposerArgent($montant);
            echo "Virement de $montant € effectué vers le compte {$compteDestinataire->getNumeroCompte()}\n";
        } else {
            echo "Solde insuffisant pour effectuer le virement.\n";
        }
    }

    public function getInfoCompte() {
        return "Numéro de compte : {$this->numeroCompte}, Solde : {$this->solde} €";
    }
}
