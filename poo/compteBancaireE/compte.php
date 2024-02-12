<?php
// require 'operation.php';
 abstract class Compte {

    protected static $idGlobal = 0;
    protected $id;
    protected $solde = 0;
    protected $operationArray = [];
   
    public function __construct() {

        self::$idGlobal++;
        $this->id = self::$idGlobal;

    }
    
 

    public function ajoutOperation(Operation $operation) {
        $this->operationArray[] = $operation;
    }

    public function getOperations() {
        return $this->operationArray;
    }


    public function getSolde() {
        return $this->solde;
    }

    public function setSolde($solde) {
        $this->solde = $solde;
    }

    public function getId() {
        return $this->id;
    }
    

    public function ajouterSolde($solde) {

        $this->solde += $solde;


    }
    
    public function retirerSolde ($solde) {

        $this->solde -= $solde;

    }

}

class CompteEpargne extends Compte {

    private $tauxInteret;

    public function __construct ($tauxInteret) {

        $this->tauxInteret = $tauxInteret;

        parent::__construct();


    }



}


class CompteCourant extends Compte {



 private $tauxDecouvert;

    public function __construct ($tauxDecouvert) {

        $this->tauxDecouvert = $tauxDecouvert;

        parent::__construct();


    }



}


  // public function retrait($montant) {



    //     $this->ajoutOperation();

    // }


// _serialize
// _unserialize 


















?>