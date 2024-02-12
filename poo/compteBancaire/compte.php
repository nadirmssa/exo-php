<?php
// require 'operation.php';
class Compte {

    private static $idGlobal = 0;
    private $id;
    private $solde = 0;
    private $operationArray = [];

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

    // public function ajoutOperation($pOperation) {


    // }











}





  // public function retrait($montant) {



    //     $this->ajoutOperation();

    // }





















?>