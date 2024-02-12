<?php
// require 'compte.php';

class Operation {

    private static $idCompteur = 1;

    private $compte;
    public $id;
    private $montant;
    private $type;
    private $date;

    public function __construct($id,$montant, $type, $date) {
        $this->id = self::$idCompteur++;
        $this->montant = $montant;
        $this->type = $type;
        $this->date = $date;
    }


    public function setCompte(Compte $compte) {
        $this->compte = $compte;
    }


    public function getId() {
        return $this->id;
    }
    public function getMontant() {
        return $this->montant;
    }
    
    public function setMontant($montant) {
        $this->montant = $montant;
    }
    
    public function getType() {
        return $this->type;
    }
    
    public function setType($type) {
        $this->type = $type;
    }
    
    public function getDate() {
        return $this->date;
    }
    
    public function setDate($date) {
        $this->date = $date;
    }




}








?>