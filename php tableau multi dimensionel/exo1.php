<?php

function generateRandomValueTab($pNb) {
    $tab = [];
    for ($i = 0; $i < $pNb; $i++) {
        $tab[$i] = rand(1, 5);
    }
    return $tab;
}

function generateRandomValueTabNotes($pLigne, $pColonnes) {
    $tab = [];
    for ($i = 0; $i < $pLigne; $i++) {
        for ($j = 0; $j < $pColonnes; $j++) {
            $tab[$i][$j] = rand(1, 20);
        }
    }
    return $tab;
}

function getName($pN) {
    $prenom = ["Pierre", "Paul", "Yacine", "Henry", "Hicham", "Jean", "Tony", "Frederic"];
    $tab = [];

    for ($i = 0; $i < $pN; $i++) {
        $indexAleatoire = array_rand($prenom);
        $tab[$i] = $prenom[$indexAleatoire];
    }

    return $tab;
}

function getMoyenneAvecCoefficients($valeurs, $coefficients) {
   
        $sum = 0;
        $totalCoefficients = 0;

        for ($i = 0; $i < count($valeurs); $i++) {
            $sum += $valeurs[$i] * $coefficients[$i];
            $totalCoefficients += $coefficients[$i];
        }

        if ($totalCoefficients > 0) {
            $moyenne = $sum / $totalCoefficients;
            return $moyenne;
        }
    

    return 0;
}

function getMoyenneClasse($tabNotes, $tabCoef) {
    $sum = 0;
    $totalCoefficients = 0;

    for ($i = 0; $i < count($tabNotes); $i++) {
        for ($j = 0; $j < count($tabNotes[$i]); $j++) {
            $sum += $tabNotes[$i][$j] * $tabCoef[$j];
            $totalCoefficients += $tabCoef[$j];
        }
    }

    if ($totalCoefficients > 0) {
        $moyenneClasse = $sum / $totalCoefficients;
        return $moyenneClasse;
    } else {
        return 0;
    }
}


// PROGRAMME PRINCIPAL :

$lenghtCoef = intval(readline("Veuillez saisir le nombre de matières(Coef) : "));
$tabCoef = generateRandomValueTab($lenghtCoef);

$notes = intval(readline("Veuillez saisir le nombre de notes : "));
$matieres = intval(readline("Veuillez saisir le nombre d'élèves : "));
$tabNotes = generateRandomValueTabNotes($matieres, $notes);

$nbNom = $matieres;
$tabNom = getName($nbNom);

echo "Coefficients des matières : ";
print_r($tabCoef);

echo "Notes des élèves : ";
print_r($tabNotes);

echo "Liste des élèves : ";
print_r($tabNom);

for ($i = 0; $i < $matieres; $i++) {
    $moyenneEleve = getMoyenneAvecCoefficients($tabNotes[$i], $tabCoef);
    echo "Moyenne de l'élève {$tabNom[$i]} : " . $moyenneEleve . "\n";
}

$moyenneClasse = getMoyenneClasse($tabNotes, $tabCoef);

echo "Moyenne de la classe : " . $moyenneClasse . "\n";


?>
