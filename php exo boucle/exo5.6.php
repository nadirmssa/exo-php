<?php
// calcule la somme des entiers jusqu’à ce nombre.
echo "Veuillez saisir un nombre : ";
$number = readline();

$somme = 0;
for ($i = 1; $i <= $number; $i++) {

$somme += $i;
}


echo "La somme des entiers de 1 à $number est : $somme ";


?>