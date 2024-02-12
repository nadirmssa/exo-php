
<?php




function consecutivité($tab) {

echo "Veuillez saisir un nombre de valeurs : ";
$nb = intval(readline());
$tab = [];

// Saisie des valeurs et stockage dans le tableau
for ($i = 1; $i <= $nb; $i++) {
    echo "Valeur n° $i : ";
    $tab[$i] = intval(readline());
}

$consécutives = true; // Variable pour suivre si les valeurs sont consécutives ou non

// Vérification si les valeurs sont consécutives
for ($i = 2; $i <= $nb; $i++) {
    if ($tab[$i] != $tab[$i - 1] + 1) {
        $consécutives = false;
        break; // Si une non-consecutivité est trouvée, sortez de la boucle
    }
}

// Affichage du résultat
if ($consécutives) {
    echo "Les valeurs sont consécutives\n";
} else {
    echo "Les valeurs ne sont pas consécutives\n";
}


}


$tab =[];

consecutivité($tab);
?>