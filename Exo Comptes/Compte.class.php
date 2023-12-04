<?php

class Compte extends Client{
    protected int $numeroCompte;
    protected int $sold;

    public function __construct(string $identifiant, string $compte,int $numeroCompte,int $sold)
    {
        parent::__construct($identifiant,$compte);
        $this->numeroCompte = $numeroCompte;
        $this->$sold = $sold;
    }


public function afficherInformationCompte(){
    echo $this->numeroCompte;
    echo $this->sold;
}


public function getNumeroCompte(){return $this->numeroCompte;}
public function getSold(){return $this->sold;}

public function setNumeroCompte($numeroCompte){$this->$numeroCompte = $numeroCompte;}
public function setSold($sold){$this->$sold = $sold;}

public function retrait($somme){
    if($somme<$this->sold){
    echo"Sold Insufisant";
    }
    else {
    $this->sold -= $somme;
}


}
}