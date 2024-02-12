<?php

//  un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix nombres suivants.


echo "Veuillez saisir un nombre : ";
$number = readline();
$number = intval($number);



$i = $number;

while ($i <= $number + 9) {
        
    $i++;
    echo $i;
}

?>