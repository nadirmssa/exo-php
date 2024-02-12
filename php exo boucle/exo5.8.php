<?php


// Initialiser la variable pour stocker le plus grand nombre


$plusGrand = 1; 

// Demander à l'utilisateur d'entrer 20 nombres
for ($i = 1; $i <= 20; $i++) {
    // Demander à l'utilisateur d'entrer un nombre
    
    echo "Entrez le nombre numéro $i : ";
    $nombre = trim(fgets(STDIN)); // Lire l'entrée de l'utilisateur depuis la console

    // Convertir l'entrée en nombre (flottant)
    $nombre = floatval($nombre);

    // Vérifier si le nombre est plus grand que le plus grand trouvé jusqu'à présent
    if ($nombre > $plusGrand) {
        $plusGrand = $nombre;
    }
}

// Afficher le plus grand nombre parmi les 20 entrés
echo "Le plus grand nombre parmi les 20 entrés est : $plusGrand\n";
?>






