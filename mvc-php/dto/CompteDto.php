<?php

class CompteDto {
    public $id;
    public $solde;

    public function setId($id) {
        $this->id = $id;
    }
    public function getId($compte){
        return $this->id;
    }

    public function setSolde($solde){
        $this->solde = $solde;
    }
    public function getSolde(){
        return $this->solde;
    }
}