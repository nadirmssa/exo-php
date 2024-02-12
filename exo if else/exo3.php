<?php 


 $age = readline ("veuillez saisir votre age");
 
 
 if ($age >= 6 && $age <= 7) {
	 
	 echo " categorie poussin " ;
	 
 } else if ($age >= 8 && $age <= 9) {
	 
	 echo " categorie pupille " ;
	 
 } else if ($age >= 10 && $age <= 11) {
	 
	echo " categorie minime " ; 
	 
 } else if ($age >= 11 && $age <= 12) {
	 
	echo " categorie cadet ";

 } else {
	 
	 echo " trop jeune ou trop vieux ";
 
 }

?> 