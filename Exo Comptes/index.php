<?php

require_once "Client.class.php";
require_once "Compte.class.php";

$Compte1 = new Compte("Jean","list",123456789,100000);


$somme = readline();

$Compte1->retrait($somme);