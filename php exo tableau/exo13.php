
<?php

//  Ecrivez un algorithme qui permette à l’utilisateur de supprimer une valeur d’un tableau préalablement saisi.
//  L’utilisateur donnera l’indice de la valeur qu’il souhaite supprimer.

$tab = [1, 2, 3, 4, 5, 6,];
$supprIndice = 2;
$newTab = [];
if ($supprIndice >= 0 && count($tab) > $supprIndice) {
  

for ($i = 0; $i < count($tab); $i++) {

if ($i !== $supprIndice) {

    $newTab[] = $tab[$i];

}
}

foreach ($newTab as $value) {

    echo $value. " ";

}

}








?>