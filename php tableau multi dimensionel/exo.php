<?php

$nbColonne = readline("Nombre de colonne");
$nbLigne = readline("Nombre de ligne");


for ($i = 0; $i < $nbColonne; $i++) {

    for ($j = 0; $j < $nbLigne; $j++) {

        $tab[$i][$j] = rand(50, 100);


    }
    }

print_r($tab);



?>