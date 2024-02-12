<?php

require 'Personnage.php';

$merlin = new Personnage("merlin");
$harry = new Personnage("harry");

$merlin->attaque($harry);
$merlin->attaque($harry);
$merlin->attaque($harry);
$harry->regenerer();
if($harry->mort()) {

echo 'harry est mort';

} else {

    echo 'harry a survecu avec ' .$harry->vie . 'pdv'; 

}