<?php
// Demander à l'utilisateur le nombre de chevaux partants et le nombre de chevaux joués
echo "Nombre de chevaux partants : ";
$n = intval(readline());
echo "Nombre de chevaux joués : ";
$p = intval(readline());

// Calculer X (dans l'ordre)
$x = factorial($n) / factorial($n - $p);

// Calculer Y (dans le désordre)
$y = factorial($n) / (factorial($p) * factorial($n - $p));

// Afficher les résultats
echo "Dans l'ordre : une chance sur $x de gagner\n";
echo "Dans le désordre : une chance sur $y de gagner\n";

// Fonction pour calculer la factorielle d'un nombre
function factorial($num) {
    if ($num <= 1) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}
?>








