<?php
require_once "Stagiaire.class.php";

$Stagiaire1 = new Stagiaire("Jean",[18,14,15,18,20,5,8]);

$Stagiaire1->calculerMoyenne();
$Stagiaire1->trouverMin();
$Stagiaire1->trouverMax();