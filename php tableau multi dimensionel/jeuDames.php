
<?php



function afficherMatrice($pMatrice) {
    for ($i = 0; $i < count($pMatrice); $i++) {
        for ($j = 0; $j < count($pMatrice[$i]); $j++) {
        
        

            echo $pMatrice[$i][$j] . " ";
        }
        echo "\n";
    }
}


//PROGRAMME PRINCIPAL 

$pion = "O";
$temp = "";


$matrice = array(
    array("X","X","X","X","X","X","X","X"),
    array("X","X","X","X","X","X","X","X"),
    array("X","X","X","X","X","X","X","X"),
    array("X","X","X","X","X","X","X","X"),
    array("X","X","X","X","X","X","X","X"),
    array("X","X","X","X","X","X","X","X"),
    array("X","X","X","X","X","X","X","X"),
    array("X","X","X","X","X","X","X","X")
);


afficherMatrice($matrice);

$fin = false;


do {
    $fin = false;

    $colonne = readline ("Dans quelle colonne ce trouve votre pion ? ");
    $ligne = readline ("Sur quelle ligne ce trouve votre pion ? ");



if ($colonne >= 0 && $colonne < count($matrice) && $ligne >= 0 && $ligne < count($matrice)) {
        $matrice[$ligne][$colonne] = "O"; 
        
        afficherMatrice($matrice);

        $fin = true;
} else {

    echo "la saisie n'est pas valide\n";
    
    $fin = false;

}
    } while (!$fin);

    do {

    $saisie = intval(readline("Appuyer sur : 0 (en haut à gauche) :  1(en Haut à droite) : 2(en bas à gauche) : 3(en bas à droite) : 4(stop) : "));

    
     if ($saisie === 0) {
        if (($ligne > 0 && $colonne > 0) && ($ligne < 7 && $colonne < 7)) {
            $temp = $matrice[$ligne][$colonne];
            $matrice[$ligne][$colonne] = "X";
            $ligne--;
            $colonne--;
            $matrice[$ligne][$colonne] = $temp;
            afficherMatrice($matrice);

            $fin = false;

        } else {

            echo "Error";
            $fin = true;

        }

    
     }  elseif ($saisie === 1) {
        if (($ligne > 0 && $colonne > 0) && ($ligne < 7 && $colonne < 7)) {
            $temp = $matrice[$ligne][$colonne];
            $matrice[$ligne][$colonne] = "X";
            $ligne--;
            $colonne++;
            $matrice[$ligne][$colonne] = $temp;
            afficherMatrice($matrice);
    
            $fin = false;
          
        
        } else {

            echo "Error";
            $fin = true;

        }


        }   elseif ($saisie === 2) {
             if (($ligne > 0 && $colonne > 0) && ($ligne < 7 && $colonne < 7)) {
                $temp = $matrice[$ligne][$colonne];
                $matrice[$ligne][$colonne] = "X";
                $ligne++;
                $colonne--;
                $matrice[$ligne][$colonne] = $temp;
                afficherMatrice($matrice);
        
                $fin = false;
            } else {

                echo "Error";
                $fin = true;
    
            }



        }  elseif ($saisie === 3) {
            if (($ligne > 0 && $colonne > 0) && ($ligne < 7 && $colonne < 7)) {
                $temp = $matrice[$ligne][$colonne];
                $matrice[$ligne][$colonne] = "X";
                $ligne++;
                $colonne++;
                $matrice[$ligne][$colonne] = $temp;
                afficherMatrice($matrice);
        
                $fin = false;
            } else {

                echo "Error";
                $fin = true;
    
            }


        }  elseif ($saisie === 4) {

    $fin = true;
    
    echo "Stop";



}



} while (!$fin);
?>

