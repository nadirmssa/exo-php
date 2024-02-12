<?php


//fonction qui permet de génrer un tableau de taille $pNb avec des valeurs aléatoires
function generateRandomValueTab($pNb){
	$tab = array();
	for($i=0;$i<$pNb;$i++){
	$tab[$i]  = rand(0,10);
     }
return $tab;
}


//fonction qui permet d'afficher le tableau sous format [elm1, elm2, elm3, ....., elmN]

function afficherTab($pTab){
	echo "[$pTab[0], ";
	for($i=1;$i<count($pTab)-1;$i++){
		echo " $pTab[$i], ";
	}
	echo $pTab[count($pTab)-1]."]\n";
}



//programme principal


$tailleTab1 = readline("Veillez renseigner la taille du tableau 1: ");

$tailleTab2 = readline("Veillez renseigner la taille du tableau 2: ");

$tab1 = generateRandomValueTab($tailleTab1);
afficherTab($tab1);
$tab2 = generateRandomValueTab($tailleTab2);
afficherTab($tab2);

$sctrf = 0;

for($i = 0; $i< count($tab1);  $i++){
	for($j = 0; $j < count($tab2); $j++){
		$sctrf = $sctrf + ($tab1[$i] * $tab2[$j]);
	}
}


echo $sctrf;



?>