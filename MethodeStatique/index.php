<?php

class Utilisateur {

    private $information;
    private static $totalOperations = 0;

    public function __construct($information) {

        $this->information = $information;
    }

    public function getInformation(){return $this->information;}

    public function setInformation($information){$this->information = $information;}

    public static function addition($a,$b){
        $c = $a+$b;
        self::$totalOperations++;
        return $c;

    }
    public static function multiplication($a,$b){
        $c = $a*$b;
        self::$totalOperations ++;
        return $c;


    }
    public static function getTotalOperation(){
        echo "Nombre d'opérations : ". self::$totalOperations;
    }

}