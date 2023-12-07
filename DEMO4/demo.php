<?php

class maClasse{

    private $attribut1;
    private $attribut2;

    public function __construct($attribut1,$attribut2)
    {
        $this->attribut1 = $attribut1;
        $this->attribut2 = $attribut2;
    }

    public function __get($nomAttr){
        if(property_exists($this,$nomAttr)){
            return $this->$nomAttr;
        }else{
            trigger_error("L'attribut $nomAttr n'existe pas",E_USER_ERROR);
            return null;
        }
    }



}

$objet = new maClasse('val1','val2');

echo $objet->attribut1 . "\n";
echo $objet->attribut2 . "\n";

echo $objet->attribut3 . "\n";