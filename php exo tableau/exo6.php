 <!-- Ecrivez un algorithme calculant la somme des valeurs d’un tableau.
 On suppose que le tableau a été préalablement saisi. -->

<?php


 $tab = [5, 6, 7,];
$somme = 0;


for ($i=0; $i < count($tab); $i++) { 

$somme += $tab[$i];


}

print_r($somme);

?>

