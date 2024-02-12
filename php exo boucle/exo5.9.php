<?php

$plusGrand = PHP_INT_MIN; 

while (true) {
    echo "Entrez un nombre (tapez 0 pour arrêter) : ";
    $nombre = trim(fgets(STDIN));

    $nombre = intval($nombre);

    if ($nombre === 0) {
        break; 
    }

    if ($nombre > $plusGrand) {
        $plusGrand = $nombre;
    }
}

echo "Le plus grand nombre parmi les entrés est : $plusGrand\n";

?>
