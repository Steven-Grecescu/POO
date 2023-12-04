<?php
require_once "GererStock.class.php";

$Stock1 = new GererStock("Objet1",25,10);

$Stock1->afficherProduit();
$Stock1->ajouterStock(5);
$Stock1->vendreProduit(20);

