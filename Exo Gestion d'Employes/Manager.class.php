<?php

class Manager extends Employe{
    protected int $employesGeres;

    public function __construct(string $identifiant, string $compte, array $employesGeres )
    {
        parent::__construct($identifiant,$compte);
        $this->employesGeres = $employesGeres;
    }
}