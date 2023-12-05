<?php

class Manager extends Employe {
    protected $employesGeres = [];

    public function __construct($nom, $salaire, $employesGeres = []) {
        parent::__construct($nom, $salaire);
        $this->employesGeres = $employesGeres;
    }

    public function ajouterEmploye(Employe $employe) {
        $this->employesGeres[] = $employe;
    }

    public function afficherDetails() {
        parent::afficherDetails();
        echo "Liste des employés gérés par le manager {$this->getNom()}:<br>";
        foreach ($this->employesGeres as $employe) {
            $employe->afficherDetails();
        }
    }
}