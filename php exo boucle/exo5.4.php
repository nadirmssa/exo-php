<?php

//  un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix nombres suivants.

$nombre = readline("Saisir un nombre de depart : ");


for ($i = $nombre + 1; $i <= $nombre + 10; $i++) {
    echo $i . " ";
}


?>
