<?php 

$candidat1 = readline ("Quel est votre score ?");
$candidat2 = readline ("Quel est votre score ?");
$candidat3 = readline ("Quel est votre score ?");
$candidat4 = readline ("Quel est votre score ?");



if ($candidat1 >= 50) {
	
echo "Vous etes élu";	
	
	
} else if ($candidat1 >= 12.5 && ($candidat2 > $candidat1 || $candidat3 > $candidat1 || $candidat4 > $candidat1))	{

echo "Vous pouvez participer au deuxième tour mais vous n'etes pas premier";




} else { 

echo "Vous n'etes pas elu";
}
?>
