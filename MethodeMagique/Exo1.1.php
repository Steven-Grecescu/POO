<?php

require_once "Exo1.php";

$ob1 = new Employe("Jean",50000);
$ob2 = new Employe("Pierre",80000);
$ob3 = new Employe("Paul",20000);
$ob4 = new Employe("Michelle",65000);

echo $ob1;
echo $ob2;
echo $ob3;
echo $ob4;

$ob2->augmenterSalaire(10);
echo $ob2;


