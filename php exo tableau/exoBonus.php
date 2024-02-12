
<?php


// generer des tableau aleatoire qui affiche si la premiere valeur est la plus petite , et la plus grande a la fin 
// on affiche a la fin le numero de tableau qui correspond a l'enoncer,on genere des tableaux tant que l'enoncer n'est pas atteint



// Programme : 

$tab = [];
$isValid = true;
$nbTab = 0;
$premier = null;
$dernier = null;

while ($isValid == true) {
    $isValid = false;

    $nbTab++;
    $lenght = 10;

    for ($i = 0; $i < $lenght ; $i++) {
        $tab[] = rand(0, 100);
    }


        $premier = $tab[0];
        $dernier = $tab[$lenght - 1];
        
        
    if ($premier < $dernier) {
        echo "Le tableau n° $nbTab est valide :\n";
        print_r($tab);
        $isValid = true;
    } else {
        echo "Le tableau n° $nbTab n'est pas valide : \n";
    }

   
    if ($isValid) {
        break;
    }
}

?>