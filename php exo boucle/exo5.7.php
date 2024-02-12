<?php

// un algorithme qui demande un nombre de départ, et qui calcule sa factorielle.

echo "Veuillez saisir un nombre : ";
$number = readline();

$fact = 1;
for ($i = 1; $i <= $number; $i++) {

$fact *= $i;
}


echo "La factorielle de  $number est : $fact ";


?>