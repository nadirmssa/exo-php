<?php

require 'compte.php';
require 'operation.php';
$comptes = [];
do {

    echo "Bonjour quel opération voulez-vous effectué ?" . "\n";
    echo "Tapez 1 pour créer un compte" . "\n";
    echo "Tapez 2 pour listé les comptes" . "\n";
    echo "Tapez 3 pour listé les opérations" . "\n";
    echo "Tapez 4 pour retirer ou verser de l'argent" . "\n";
    echo "Tapez 0 pour quitter" . "\n";

    $choix = readline("");
    $bool = true;
    switch ($choix) {
        case "1":
            $compte = new Compte();
            $versement = readline("Combien d'argent voulez-vous verser ? ");
            $compte->setSolde($versement);
            $comptes[] = $compte;
            $id = $compte->getId();
            $type = "Versement";
            $date = date("F j, Y, g:i a");
            $operation = new Operation($id, $versement, $type, $date);
            $operation->setCompte($compte);

            $compte->ajoutOperation($operation);

            $bool = true;
            break;

        case "2":
            $nbComptes = count($comptes);
            for ($i = 0; $i < $nbComptes; $i++) {
                echo "le compte n° " . $comptes[$i]->getId() . " contient : " . $comptes[$i]->getSolde() . "€" . PHP_EOL;
            }
            $bool = true;
            break;

        case "3":


            foreach ($comptes as $compte) {
                $operations = $compte->getOperations();

                foreach ($operations as $operation) {
                    echo "Le compte n° " . $compte->getId() . " a effectué l'opération : " . $operation->getType() . PHP_EOL;
                    echo "Montant : " . $operation->getMontant() . "€" . PHP_EOL;
                    echo "Date : " . $operation->getDate() . PHP_EOL;
                }
            }
            $bool = true;
            break;

        case "4":
            $compteSelectionner = 0;
            $choixCompte = readline("Sélectionner un compte(entrez son numéro : \n");

            foreach ($comptes as $compte) {
                if ($compte->getId() == $choixCompte) {
                    $selectedAccount = $compte;
                    echo "Vous avez selectionnée le compte n° " . $choixCompte . "\n";
                    break;
                }
            }

            if ($compteSelectionner !== null) {
                $choixType = readline("Voulez-vous effectuer un versement ou un retrait (V/R) ?\n");
                $montant = readline("Quel montant : \n");


                if ($choixType === "V") {
                    $type = "Versement";
                    $date = date("F j, Y, g:i a");
                    $operation = new Operation($choixCompte, $montant, $type, $date);
                    $operation->setCompte($selectedAccount);
                    $selectedAccount->ajoutOperation($operation);
                    $selectedAccount->ajouterSolde($montant);
                    

                    echo "Versement de " . $montant . "€ effectué avec succès sur le compte n° " . $choixCompte . PHP_EOL;
                } else if ($choixType === "R") {

                    $type = "Retrait";
                    $date = date("F j, Y, g:i a");
                    $operation = new Operation($choixCompte, $montant, $type, $date);
                    $operation->setCompte($selectedAccount);
                    $selectedAccount->ajoutOperation($operation);
                    $selectedAccount->retirerSolde($montant);
                   

                    echo "Retrait de " . $montant . "€ effectué avec succès sur le compte n° " . $choixCompte . PHP_EOL;
                } else {

                    echo "Le compte sélectionné n'existe pas.";
                }
            }
            $bool = true;

            break;



        case "0":
            echo "Vous avez quitté le programme";
            $bool = false;
            break;
    }
} while ($bool);
