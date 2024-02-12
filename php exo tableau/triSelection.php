<?php

// Tri par selection :



$array = [234,5,789,12345,78];
$length = count($array);

for ($i = 0; $i < $length ; $i++) {
    $minIndex = $i;

    // Trouver l'indice du minimum dans le reste du tableau
    for ($j = $i + 1; $j < $length; $j++) {
        if ($array[$j] < $array[$minIndex]) {
            $minIndex = $j;
        }
    }

    // Échanger l'élément actuel avec l'élément minimum trouvé
    if ($minIndex !== $i) {
        $temp = $array[$i];
        $array[$i] = $array[$minIndex];
        $array[$minIndex] = $temp;
    }
}

echo "Tableau trié : ";
foreach ($array as $value) {
    echo $value . " ";
}



?>







