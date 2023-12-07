<?php

require_once "function.php";

$lapin1 = new Lapin(true, 'Blanc', 4);
$chasseur = new Chasseur('Fusil', 'Jean');
echo "Le Lapin " . $lapin1->getCouleur(), " à " . $lapin1->getNombrePatte() . " pattes a été créer \n";
echo "Le chasseur " . $chasseur->getNom(), " a été créer avec un " . $chasseur->getArme() . "\n";

while ($lapin1->getEnVie() == 1) {
    echo $chasseur->getNom() . " avance avec son " . $chasseur->getArme() . "\n";
    $chasseur->Chasser($lapin1);
}
