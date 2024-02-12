<?php


// Toujours à partir de deux tableaux précédemment saisis, écrivez un algorithme qui calcule le schtroumpf des deux tableaux. Pour calculer le schtroumpf, 
// il faut multiplier chaque élément du tableau 1 par chaque élément du tableau 2, et additionner le tout. 




function calculerSchtroumpf($tableau1,$tableau2) {
    $schtroumpf = 0;

    // Parcours chaque élément du tableau1
    foreach ($tableau1 as $element1) {
        // Parcours chaque élément du tableau2
        foreach ($tableau2 as $element2) {
            // Multiplie les éléments et ajoute le résultat à schtroumpf
            $schtroumpf += $element1 * $element2;
        }
    }

    return $schtroumpf;
}

// Exemple d'utilisation
$tableau = [1, 2, 3];
$tableau2 = [4, 5, 6];
$resultat = calculerSchtroumpf($tableau, $tableau2);
echo "Le résultat est : " . $resultat; // Le résultat sera 1*4 + 1*5 + 1*6 + 2*4 + 2*5 + 2*6 + 3*4 + 3*5 + 3*6 = 93
?>
