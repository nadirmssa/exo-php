<?php

// Ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même longueur préalablement saisis.
// Le nouveau tableau sera la somme des éléments des deux tableaux de départ.


$tab1 = [5, 10, 15, 20];
$tab2 = [5, 10, 15, 20];
$tab3 = [];




for ($i = 0; $i < count($tab1) ; $i++) {

 
$tab3[$i] = $tab1[$i] + $tab2[$i];




}


print_r($tab3);

?>