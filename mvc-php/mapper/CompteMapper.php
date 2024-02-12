<?php
require_once "../dto/CompteDto.php";

class CompteMapper {
    public static function compteToCompteDta(Compte $compte){
        $compteDto = new CompteDto();
        $compteDto->setId($compte->getId());
        $compteDto->setSolde($compte->getSolde());
        return $compteDto;
    }

    public static function compteArrayToCompteDtoArray(array $compteArray){
        $compteDtoArr = [];
        foreach($compteArray as $compte){
            array_push($compteDtoArr, self::compteToCompteDta($compte));
        }
        return $compteDtoArr;
    }
}