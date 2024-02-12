<?php

$min = 1;
$max = 3;

do { 
 echo "Veuillez entrer un nombre compris entre $min et $max : ";
 
 $number = readline();

if ($number >= $min && $number <= $max) {

    echo "Merci, vous avez saisi un nombre valide : $number";

 } else {

    echo "Veuillez entrer un nombre compris entre $min et $max : ";

 }


} while ($number < $min || $number > $max);
?>