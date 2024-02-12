<?php

//fonction qui permet de génrer un tableau de taille $pNb avec des valeurs aléatoires
function generateRandomValueTab($pNb){
	$tab = array();
	for($i=0;$i<$pNb;$i++){
	     $tab[$i]  = rand(-1000,1000);
     }
	 sort($tab);
return $tab;
}

function rechercheDico($tab,$indexMin,$indexMax,$valeur){
	global $nbIteration;
	global $indexMid;
	$indexMid = intval(($indexMin + $indexMax) /2);
	if($tab[$indexMid] == $valeur){
		return true;
	}elseif($indexMin >= $indexMax){
		return false;
	}else{
		$nbIteration++;
		if($valeur < $tab[$indexMid]){
			return rechercheDico($tab,$indexMin,$indexMid - 1,$valeur);
		
	} elseif($valeur > $tab[$indexMid]){
		
		    return rechercheDico($tab,$indexMid + 1,$indexMax,$valeur);
	}
	
	}
}

$tailleTab = readline("Veillez renseigner la taille : ");
$tab = generateRandomValueTab($tailleTab);
print_r($tab);
$valeur = readline("Veillez renseigner la valeur recherchée : ");
$indexMin = 0;
$indexMax = count($tab) - 1;
$indexMid = intval(($indexMin + $indexMax) /2);
$nbIteration =0;



$isTrouvee = rechercheDico($tab,$indexMin,$indexMax,$valeur);


if($isTrouvee){
	echo "La valeur ".$valeur." a été retrouvée à l'index ".$indexMid." avec un nombre d'itération de ".$nbIteration;
}else{
	echo "La valeur recherchée n'existe pas !";
}




?>