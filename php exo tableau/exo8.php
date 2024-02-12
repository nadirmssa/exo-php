<?php

// Generer un tableau aleatoirement puis afficher la valeur max du tableau.





//fonction qui permet de génerer un tableau de taille $pNb avec des valeurs aléatoires

function generateRandomValueTab($pNb){
	$tab = array();
	for($i=0;$i<$pNb;$i++){
	$tab[$i]  = rand(-100,100);
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



$tab = generateRandomValueTab(5);

afficherTab($tab);

$max = $tab[0];


for($i=0;$i<count($tab);$i++){
	if($max < $tab[$i]){
		$max = $tab[$i];
	}
}

echo "\nmax dans ce tableau ".$max;









