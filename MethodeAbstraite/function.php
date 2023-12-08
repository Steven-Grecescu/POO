<?php

abstract class Animal{
    private $couleur;
    private $nombrePatte;

    public function __construct($couleur,$nombrePatte){
        $this->couleur = $couleur;
        $this->nombrePatte = $nombrePatte;
    }

    public function getCouleur(){return $this->couleur;}
    public function getNombrePatte(){return $this->nombrePatte;}

    public function setCouleur($couleur){$this->couleur = $couleur;}
    public function setNombrePatte($couleur){$this->couleur = $couleur;}

    public function crier(){
        echo "Le lapin {$this->couleur} glapie de peur \n";
    }

}

class Lapin extends Animal {
    private bool $enVie;


    public function __construct($enVie,$couleur,$nombrePatte) {
        parent::__construct($couleur,$nombrePatte);
        $this->enVie = $enVie;
    }

    public function getEnVie(){return $this->enVie;}

    public function setEnVie($enVie){$this->enVie = $enVie;}

    public function seNourir(){
        echo "Le lapin se nourri \n";
    }

    public function fuir(Lapin $lapin){
        echo "Le lapin {$lapin->getCouleur()} s'enfuie sur ses {$lapin->getNombrePatte()} d'un seul bond ! \n";
    }

}

abstract class Humain{
    private $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }
    public function getNom(){return $this->nom;}
}



class Chasseur extends Humain {
    private $Arme;


    public function __construct($Arme,$nom) {
        parent::__construct($nom);
        $this->Arme =$Arme;
    }

    public function getArme(){return $this->Arme;}

    public function setArme($Arme){$this->Arme = $Arme;}

    public function Chasser(Lapin $lapin){
        
        $lapin->crier();
        $rand = rand(1,6);
        if ($rand == 1 || $rand == 6){
            $lapin->setEnVie(false);
        }
        echo "{$this->getNom()} tire sur le lapin avec son {$this->Arme} et ... ";
        if ($lapin->getEnVie() == false){
            echo "le touche \n";
            echo "Le pauvre petit lapin {$lapin->getCouleur()} est malheureusement mort\n";
        }else{
            echo "le rate \n";
            $lapin->fuir($lapin);
        }
    }

}