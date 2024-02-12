<?php

$number = 0;


while ($number < 1 || $number > 3) {

echo "Veuillez saisir un nombre entre 1 et 3 : ";
$number = readline();


if ($number >= 1 && $number <= 3) {

    echo "le nombre saisie est valide, bravo !";

} else {

    echo "le nombre saisie est invalide, erreur!";

}

}

?>