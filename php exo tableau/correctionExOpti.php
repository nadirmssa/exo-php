<?php





//fonction qui permet de récuperer la valeur en input avec vérication qu'il est pair
function checkInputValue(){
	do{
$nb = readline("Veillez renseigner la taille du tableau en pair: ");
}
while($nb % 2 !=0);

return $nb;
}


//fonction qui permet de génrer un tableau de taille $pNb avec des valeurs aléatoires
function generateRandomValueTab($pNb){
	$tab = array();
	for($i=0;$i<$pNb;$i++){
	$tab[$i]  = rand(-100,100);
     }
return $tab;
}

//fonction qui permet de diviser un tableau en 2 tableaux
function sliceTab($pTab){
	global $tab1;
    global $tab2;
	for($i=0;$i<count($pTab)/2;$i++){
		$tab1[$i] = $pTab[$i];
		$tab2[$i] = $pTab[$i+ count($pTab)/2];
	}
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
 $tab1 = array();
 $tab2 = array();
 
$nb = checkInputValue();
$tab = generateRandomValueTab($nb);

sliceTab($tab);



afficherTab($tab);
afficherTab($tab1);
afficherTab($tab2);







?>