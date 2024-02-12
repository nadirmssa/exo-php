<?php 
$sexe = readline("Quel est votre sexe ? Tapez 1 si vous êtes un homme, 2 si vous êtes une femme: ");
$age = readline("Quel est votre âge: ");

if ($sexe == 1 && $age > 20) {
    echo "Vous êtes imposable.";
    
  

} elseif ($sexe == 2 && $age > 18 && $age < 35) {
    echo "Vous êtes imposable.";
    
	

	
} else {
    echo "vous etes non imposable";
}






?>