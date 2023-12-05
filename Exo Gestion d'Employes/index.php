<?php

require_once "Employe.class.php";
require_once "Manager.class.php";

$Employer1 = new Employe("Alice",50000);
$Manager1 = new Manager("Bob",70000,["Alice"]);

$Employer1->afficherDetails();
$Manager1->ajouterEmploye("Alice");
$Manager1->afficherDetails();
