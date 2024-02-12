<?php
require_once "../model/Compte.php";
class CompteDao {

    public function __construct() {
        $this->session();
    }

    public function session()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (!isset($_SESSION['comptes'])) {
            $_SESSION['comptes'] = [];
        }
    }
    public function create($montant){
        $compte = new Compte($montant);
        array_push($_SESSION['comptes'], $compte);
    }
    public function getById($id){
        foreach ($_SESSION['comptes'] as $compte) {
            if($compte->getId() === $id) {
                return $compte;
            }
        }
        return null;
    }

    public function updateSolde($id,$solde){
        $compte = $this->getById($id);
        if($compte != null) {
            $compte->setSolde($solde);
        } else {
            return false;
        }
    }

    public function getAll(){
        return $_SESSION['comptes'];
    }


}