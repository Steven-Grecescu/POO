<?php
require_once "Animal.class.php";
require_once "Chien.class.php";

$animal = new Animal("Felix",3);
$animal->afficherInfos();

echo "<br>";

$chien = new Chien("Max",2,"Labrador");
$chien->afficherInfos();
$chien->aboyer();