<?php
// faire un tri dichotomique 


$tab = [34,45,67,87,92,95,102];
$fin = $tab[count($tab) - 1];


$mid = intval(count($tab) / 2);
$trouver = false;

 $x = intval(readline("Veuillez saisir un nombre : "));


while ($trouver === false)  {


if ($x === $tab[$mid]) {

$trouver = true;

echo "le chiffre recherché est a l'indice $mid du tableau";

} if ($x < $tab[$mid]) {

for ($i = 0; $i < $mid; $i++)  {

if ($tab[$i] === $x) {

  $trouver = true;

  echo "le chiffre recherché est a l'indice $i du tableau";

  
}
}
}

} if ($x > $tab[$mid]) {

 for ($i = $mid + 1; $i < $fin; $i++ ) {

if ($tab[$i] === $x) {

$trouver = true;

echo "le chiffre recherché est a l'indice $i du tableau";

}

}

}








?>