<?php

// Ecrivez un algorithme permettant à l’utilisateur de saisir un nombre quelconque de valeurs, 
// qui devront être stockées dans un tableau. 
// L’utilisateur doit donc commencer par entrer le nombre de valeurs qu’il compte saisir. 
// Il effectuera ensuite cette saisie. Enfin, une fois la saisie terminée, 
// le programme affichera le nombre de valeurs négatives et le nombre de valeurs positives.


$val = [];

$lenght = intval(readline("Combien de valeurs voulez vous saisir? "));

$negatives = 0;
$positives = 0;




for ($i = 1; $i <= $lenght; $i++) {

    $val[$i] = intval(readline("Valeur n ° $i : "));


if ($val[$i] < 0) {

    $negatives++;


} else {

    $positives++;

}

}


echo "Valeurs positives : $positives \n";

echo "Valeurs négatives : $negatives \n";








?>