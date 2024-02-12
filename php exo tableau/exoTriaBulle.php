<?php

// faire un tri a bulle 

$tab = [1000,456,76,9,4567];



for ($i = 0; $i < count($tab) - 1; ) {
   
if ($tab[$i] > $tab[$i + 1]) {

$perm = $tab[$i]; 

$tab[$i] = $tab[$i + 1]; 

$tab[$i + 1] = $perm;

$i = 0;

} else {
$i++;
}

}





// autre  version tri a bulle :


// $swapped = true;
// while ($swapped) {
//     $swapped = false;
//     for ($i = 0; $i < count($tab1) - 1; $i++) {
//         if ($tab1[$i] > $tab1[$i + 1]) {
//             $perm = $tab1[$i];
//             $tab1[$i] = $tab1[$i + 1];
//             $tab1[$i + 1] = $perm;
//             $swapped = true;
//         }
//     }
// }



print_r($tab);













?>