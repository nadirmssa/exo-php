<?php

// demander un nombre a l'utilisateur, ce nombre determinera la longueur du tableau, 
// generer des valeur aleatoire et diviser le tableau en deux, si le chiffre n'est pas pair,
// on demande a l'utilisaeur de saisir un autre chiffre.


$longueur = readline("Combien d'éléments voulez-vous dans le tableau ? ");

$tableau = [];

$tab1 = [];
$tab2 = [];




while ($longueur %2 !== 0) {

    $longueur = readline("Veuillez saisir un chiffre pair : ");


}
for ($i = 0; $i < $longueur; $i++) {

$tableau[$i] = rand(0, 1000);



if ($i < $longueur / 2) {

    $tab1[] = $tableau[$i];

} else {

    $tab2[] = $tableau[$i];



}


}

print_r($tab1);

print_r($tab2);


?>