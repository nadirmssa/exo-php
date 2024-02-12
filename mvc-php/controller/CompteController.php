<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "service" . DIRECTORY_SEPARATOR . "CompteService.php";
require_once "../mapper/CompteMapper.php";
class CompteController
{
    private CompteService $compteService;
    public function __construct()
    {
        $this->compteService = new CompteService();
    }

    public function create($montant)
    {
        $this->compteService->create($montant);
    }

    public function getById($id){
        return $this->compteService->getById($id) == null ? 'Compte introuvable' : $this->compteService->getById($id);
    }

    public function getAll(){
        return CompteMapper::compteArrayToCompteDtoArray($this->compteService->getAll());
    }

    public function verserment($id, $montant) {
        $this->compteService->versement($id, $montant);
    }

    public function retrait($id, $montant) {
        $this->compteService->retrait($id, $montant);
    }



}