<?php

class Compte {
    private static $idGlobal = 0;
    private $id;
    private $solde;

    public function __construct($montant) {
        self::$idGlobal++;
        $this->id = self::$idGlobal;
        $this->solde = $montant;
    }

    public function getId() {
        return $this->id;
    }

    public function getSolde() {
        return $this->solde;
    }

    public function setSolde($solde) {
        $this->solde = $solde;
    }
}