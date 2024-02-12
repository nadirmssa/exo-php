<?php 


// Écrivez un algorithme qui fusionne deux tableaux (déjà existants) dans un troisième, qui devra être trié.

function mergeSortedArrays($arr1, $arr2) {
    $mergedArray = [];
    $i = 0; // Indice pour le tableau 1
    $j = 0; // Indice pour le tableau 2

    while ($i < count($arr1) && $j < count($arr2)) {
        if ($arr1[$i] < $arr2[$j]) {
            $mergedArray[] = $arr1[$i];
            $i++;
        } else {
            $mergedArray[] = $arr2[$j];
            $j++;
        }
    }

    // Ajoutez les éléments restants du premier tableau
    while ($i < count($arr1)) {
        $mergedArray[] = $arr1[$i];
        $i++;
    }

    // Ajoutez les éléments restants du deuxième tableau
    while ($j < count($arr2)) {
        $mergedArray[] = $arr2[$j];
        $j++;
    }

    return $mergedArray;
}

// Exemple d'utilisation
$arr1 = [45, 78, 32, 7];
$arr2 = [56, 4, 65 , 65];
$merged = mergeSortedArrays($arr1, $arr2);

// Afficher le tableau fusionné
echo "Tableau fusionné : " . implode(", ", $merged);




?>