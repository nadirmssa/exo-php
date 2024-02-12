<?php

$age = readline("Veillez renseigner l'âge : ");
$permis = readline("Veillez renseigner la durée du permis : ");
$acc = readline("Veillez renseigner le nombre d'accident : ");
$anneeFidelite = readline("Veillez renseigner le nombre d'année fidelité : ");

$isRouge = ($age<25 && $permis<2 && $acc ==0) || ($acc==1 && (($age>=25 && $permis<2) || ($age<25 && $permis >=2))) || ($age>=25 && $permis >=2 && $acc==2);
$isOrange = (($acc == 0 && (($age<25 && $permis>=2)||($age>25 && $permis<2)))||($acc==1 && $age>=25 && $permis>=2));
$isVert = $age >=25 && $permis>=2 && $acc==0;

$score = 0;

if($isRouge){
	$score = 1;
}elseif($isOrange){
	$score = 2;
}elseif($isVert){
	$score = 3;
}

if($anneeFidelite >=5 && ($isRouge || $isOrange || $isVert)){
	$score = $score +1;
}

if($score==0){
	echo "Refusé !";
}elseif($score ==1){
	echo "Rouge !";
}elseif($score ==2){
	echo "Orange !";
}
elseif($score ==3){
	echo "Vert !";
}
else{
	echo "Bleu !";
}

// remplacer les readline par des inputs en js et afficher la couleur dans une div 
?>