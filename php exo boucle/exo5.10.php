<?php

 $totalApayer;
 $monnaieClient;
 $aRendre;
 $nbr10euros;
 $nbr5euros;
 $nbr1euro;      



$totalApayer = readline("Vous devez payer : ");
$totalApayer = intval($totalApayer);
$monnaieClient = readline("Le montant insérée est de : ");
$monnaieClient = intval($monnaieClient);

$aRendre = $monnaieClient - $totalApayer;

    $nbr10euros = 0;
    $nbr5euros = 0;


    while ($aRendre >= 10) {
       
        $nbr10euros = $nbr10euros + 1; 
          
        $aRendre = $aRendre - 10;
    }

    // Boucle pour compter le nombre de billets de 5 euros
    while ($aRendre >= 5) {
        
            $nbr5euros = $nbr5euros + 1;
        
        $aRendre = $aRendre - 5;
    }

    $nbr1euro = $aRendre;

    echo " $nbr10euros 10€ ". "\n";
    echo " $nbr5euros 5€ ". "\n";
    echo " $nbr1euro 1€ ". "\n";


?>