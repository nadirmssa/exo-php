<?php

// Ecrivez un algorithme permettant, toujours sur le même principe, à l’utilisateur de saisir un nombre déterminé de valeurs. 
// Le programme, une fois la saisie terminée, renvoie la plus grande valeur en précisant quelle position elle occupe dans le tableau.
// On prendra soin d’effectuer la saisie dans un premier temps, et la recherche de la plus grande valeur du tableau dans un second temps.



echo "Veuillez saisir le nombre de valeurs que vous voulez saisir : ";

$nb = intval(readline());
$tab = [];
$max = 0;
$indice = 0;


for ($i = 1; $i <= $nb; $i++) {
    echo "Veuillez saisir la valeur $i : ";
    $tab[$i] = intval(readline());

    if ($tab[$i] > $max) {
        $max = $tab[$i];
        $indice = $i;
    } 

}

echo "La valeur la plus grande est : $max\n et son indice est : $indice\n";















?>