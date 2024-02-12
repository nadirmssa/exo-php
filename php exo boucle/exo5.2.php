<?php

$number = 0;

while ($number < 10 || $number > 20) {

    echo "Veuillez saisir un nombre entre 10 et 20 : ";
    $number = readline();

    if ($number < 10) {
        echo "Plus grand !  ";
    } else if ($number > 20) {
        echo "Plus petit !  ";
    
    } else {

        echo "Bien joué!";
        
    }
}

?> 