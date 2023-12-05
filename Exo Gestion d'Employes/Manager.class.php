<?php

class Manager extends Employe{
    protected int $employesGeres;

    public function __construct(string $nom, int $salaire, array $employesGeres )
    {
        parent::__construct($nom,$salaire);
        $this->employesGeres[] = $employesGeres;
    }

    public function getEmployesGeres(){return $this->employesGeres;}

    public function setEmployesGeres($employesGeres){$this->$employesGeres = $employesGeres;}

    public function ajouterEmploye($employe){
        $employesGeres[] = $employe;
    }

    public function afficherDetails(){
        parent::afficherDetails();
        echo $this->employesGeres;
    }
}