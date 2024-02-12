<?php

require_once "../dao/CompteDao.php";

class CompteService {
    private $compteDao;

    public function __construct() {
        $this->compteDao = new CompteDao();
    }

    public function create($montant){
        $this->compteDao->create($montant);
    }

    public function getById($id){
        return $this->compteDao->getById($id);
    }

    public function getAll(){
        return $this->compteDao->getAll();
    }

    public function versement($id, $montant){
        $compte = $this->getById($id);
        $compte->setSolde($compte->getSolde() + $montant);
    }

    public function retrait($id, $montant){
        $compte = $this->getById($id);
        $compte->setSolde($compte->getSolde() - $montant);
    }


}