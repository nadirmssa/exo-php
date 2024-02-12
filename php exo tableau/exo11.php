<!-- Toujours et encore sur le même principe, écrivez un algorithme permettant, à l’utilisateur de saisir les notes d'une classe. Le programme, 
une fois la saisie terminée, renvoie le nombre de ces notes supérieures à la moyenne de la classe. -->


<?php

echo "Veuillez saisir le nombre de notes que vous avez obtenue : ";

$notes = intval(readline());

$tab = [];
$supMoyenne = 0;
$nombre = 0;


for ($i = 1; $i <= $notes; $i++) {
    
    echo "Veuillez saisir la note n° $i : ";
    
    $tab[$i] = intval(readline());

if ($tab[$i] > 10) {

    $supMoyenne = $tab[$i];
    $nombre++;

}


}


echo "Vous avez $nombre notes supérieures à la moyenne . ";



?>