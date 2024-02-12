<?php

// Ecrivez la fin de l’exercice 3 
// afin que le calcul de la moyenne des notes soit effectué et affiché à l’écran.



$longueur = readline("Combien voulez vous saisir de notes? ");

$tab = [];

$somme = 0;

for ($i = 1; $i <= $longueur; $i++) {
    

    $tab[$i] = readline("Veuillez saisir vos notes : n°$i : ");

    $somme += $tab[$i];





    $moyenne =  $somme / $longueur;
}

echo "La moyenne des notes est : $moyenne";
