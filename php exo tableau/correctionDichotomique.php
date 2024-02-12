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

$tailleTab = readline("Veillez renseigner la taille : ");
$tab = generateRandomValueTab($tailleTab);
print_r($tab);
$valeur = readline("Veillez renseigner la valeur recherchée : ");
$indexMin = 0;
$indexMax = count($tab) - 1;
$indexMid = intval(($indexMin + $indexMax) /2);
$nbIteration =0;

while($tab[$indexMid] !=$valeur && $indexMin < $indexMax){
	
	if($valeur < $tab[$indexMid]){
		$indexMax = $indexMid - 1;
	} elseif($valeur > $tab[$indexMid]){
		$indexMin = $indexMid + 1;
	}
	$indexMid = intval(($indexMin + $indexMax) /2);
	$nbIteration ++;
}


if($tab[$indexMid] ==$valeur){
	echo "La valeur ".$valeur." a été retrouvée à l'index ".$indexMid." avec un nombre d'itération de ".$nbIteration;
}else{
	echo "La valeur recherchée n'existe pas !";
}




?>