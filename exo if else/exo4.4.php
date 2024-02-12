<?php
$photocopies = readline("Nombre de photocopies ? ");

if ($photocopies > 20) {
    echo "Le prix à payer est de " . $photocopies * 0.08;
} else if ($photocopies >= 10) {
    echo "Le prix à payer est de " . $photocopies * 0.09;
} else {
    echo "Le prix à payer est de " . $photocopies * 0.10;
}
?>