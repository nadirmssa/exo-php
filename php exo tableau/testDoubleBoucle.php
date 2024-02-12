<?php

// $nb = readline("Saisir un nombre : ");


// for ($i = 0; $i < $nb ; $i++) {

// echo "i = *\n";
// for ($j = 0; $j < $i; $j++) {

//     echo "j = *\n";

// }

// }

$nb = 5;

echo "Table de multiplication jusqu'à $nb:\n";

for ($i = 1; $i <= $nb; $i++) {
    for ($j = 1; $j <= $nb; $j++) {
        echo "$i x $j = " . ($i * $j) . "\t";
    }
    echo "\n";
}

?>