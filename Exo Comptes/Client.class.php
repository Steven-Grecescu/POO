<?php 

class Client{

public function __construct(private string $identifiant,private string $compte){

}

public function afficherSesInfos(){
    echo "Nom : ".$this->identifiant , $this->compte;
}


}