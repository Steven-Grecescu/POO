<?php

require_once "index.php";

$Utilisation = new Utilisateur("Voici l'information");

echo $Utilisation->getInformation()."\n";

echo "Resultat Addition : " . Utilisateur::addition(2,5) ."\n";
echo "Resultat Multiplication : " . Utilisateur::multiplication(47,5)."\n";
echo "Resultat Multiplication : " . Utilisateur::multiplication(7,5)."\n";
echo "Resultat Multiplication : " . Utilisateur::multiplication(4,5)."\n";
echo "Resultat Addition : " . Utilisateur::addition(2,10) ."\n";
echo Utilisateur::getTotalOperation()."\n";