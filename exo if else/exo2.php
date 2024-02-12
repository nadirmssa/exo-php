<?php 

$nb1 = readline("Veuillez saisir un nombre ");
$nb2 = readline ("Veuillez saisir un deuxieme nombre");


if ($nb1 < 0 && $nb2 > 0) {
	
 echo " $nb1 est negatif et $nb2 est positif " ;

 
}  else if ($nb1 > 0 && $nb2 < 0) { 
	
	echo " $nb1 est positif et nb2 est negatif";
	
} else if ($nb1 < 0 && $nb2 < 0) {
	
	
	echo " les deux nombres sont negatif ";
	
} else {
	
	echo " les deux nombres sont positif ";
	
} 





?> 