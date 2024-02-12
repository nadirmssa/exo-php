<?php

// un algorithme qui demande un nombre de départ, et qui calcule sa factorielle.

function factorielle($n) {
    if ($n === 1) {
        return 1;
    } else {
        return $n * factorielle($n - 1);
    }



}



$nombre = readline("saisir un nb : ");
$resultat = factorielle($nombre);

echo "la factorielle de $nombre est : $resultat";

?>