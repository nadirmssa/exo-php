<?php
$age = readline("Quel est votre âge ? ");
$accident = readline("Avez-vous déjà eu un accident ? Tapez 0, 1 ou 2 pour le nombre d'accidents : ");
$permis = readline("Année de permis ? ");
$anciennete = readline("Depuis combien de temps êtes-vous dans la maison ? ");

$cptPoint = 0;

if ($age > 25) {
    $cptPoint += 1;
}

if ($accident == 0) {
    $cptPoint += 1;
} else if ($accident > 2) {
		echo "Vous etes refusé";

} else {

if ($permis >= 2) {
    $cptPoint += 1;
}

if ($anciennete > 5) {
    $cptPoint += 1;
}

if ($cptPoint >= 4) {
    echo "Tarif bleu";
} elseif ($cptPoint == 3) {
    echo "Tarif vert";
} elseif ($cptPoint == 2) {
    echo "Tarif orange";
} elseif ($age < 25 && $permis < 2 && $accident > 0) {
    echo "Vous êtes refusé";
} else {
    echo "Tarif rouge";
}

}
?>
