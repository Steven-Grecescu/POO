<?php

class GererStock{

    public function __construct(private string $nom, private float $prix, private int $quantite)
    {
        // $this->$nom = $nom;
        // $this->$prix = $prix;
        // $this->$quantite = $quantite;

    }

    public function getNom(){return $this->nom;}
    public function getPrix(){return $this->prix;}
    public function getQuantite(){return $this->quantite;}

    public function setNom($nom){$this->nom = $nom;}
    public function setPrix($prix){$this->prix = $prix;}
    public function setQuantite($quantite){$this->quantite = $quantite;}

    public function afficherProduit(){
        echo "Produit : ". $this->nom,"Prix Produit : ". $this->prix,"Quantité en stock : " . $this->quantite;
    }
    public function mettreAJourPrix($nouveauPrix){
        $this->prix = $nouveauPrix; 
    }
    public function ajouterStock($quantiteAjoutee){
        $this->quantite += $quantiteAjoutee;
    }
    public function vendreProduit($quantiteVendue){
        $memoire =0;
        $memoire = $this->quantite - $quantiteVendue;
        if($memoire <= 0){
            echo "Stock insufisant";
        }else{
            $this->quantite -=$quantiteVendue;
            echo "Nouveau stock : " . $this->quantite;
        }
    }
}