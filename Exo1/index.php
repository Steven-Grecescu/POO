<?php
require_once "Voiture.class.php";

$Voiture1 = new Voiture("Audi","modele",2000,"verte",25);
$Voiture1->afficherInfos();
$Voiture1->accelerer(25);
$Voiture1->afficherInfos();