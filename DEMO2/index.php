<?php
require_once "Personne.class copy.php";

$personne1 = new Personne("John","DOE");
$personne1->afficherInfos();

echo "Prenom : " . $personne1->getPrenom() . "/r";
echo "Nom : " . $personne1->getNom() . "/r";
$personne1->setPrenom("Jane");

echo "Prenom : " . $personne1->getPrenom() . "/r";
echo "Nom : " . $personne1->getNom() . "/r";