<?php


// Ecrire un algorithme qui déclare un tableau de 9 notes,
// dont on fait ensuite saisir les valeurs par l’utilisateur.


$tab = array();

for ($i = 0; $i < 9; $i++) {

    $notes = readline("Saisir vos notes : ");
    $tab[$i] = $notes;

}

print_r($tab);

echo "Done my friend!";
