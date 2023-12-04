<?php

class Voiture{

    public function __construct(public string $marque,public string $modele,public int $annee,public string $couleur, public int $vitesse =0)
    {
        // $this->$marque = $marque;
        // $this->$modele = $modele;
        // $this->$annee = $annee;
        // $this->$couleur = $couleur;
        // $this->$vitesse = $vitesse;
    }

    public function getMarque(){return $this->marque;}
    public function getModele(){return $this->modele;}
    public function getAnnee(){return $this->annee;}
    public function getCouleur(){return $this->couleur;}
    public function getVitesse(){return $this->vitesse;}

    public function setMarque($marque){$this->marque = $marque;}
    public function setModele($modele){$this->modele= $modele;}
    public function setAnnee($annee){$this->annee= $annee;}
    public function setCouleur($couleur){$this->couleur= $couleur;}
    public function setVitesse($vitesse){$this->vitesse= $vitesse;}



    public function afficherInfos(){
        echo " Marque : ". $this->marque ," Modele : ". $this->modele," (". $this->annee .") ","Couleur : ".$this->couleur," Vitesse " . $this->vitesse . " km/h";
    }
    public function accelerer($acceleration){
        $this->vitesse += $acceleration;
    }
}