<?php


$nb = readline("Saisir un nombre : ");




for ($i = 1; $i <= $nb ; $i++) {
  
    for ($j = 1; $j <= $i ; $j++) {

echo "*";


}

echo "\n" ;

}

for ($i = $nb - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

?>