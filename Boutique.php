<?php

// Initialisation du stock

$articles = ["🧦 Chaussettes", "👕 T-shirts", "👟 Chaussures", "🧢 Casquettes", "👗 Robes"];
$quantites = [10, 5, 8, 3, 12];
$ventes = [0, 0, 0, 0, 0];

// Initialisation de la variable "choix"
$choix = 0;


while ($choix != 7) {

    // Afficher le menu

    echo "\nMenu 🛒 :\n";
    echo "1. 📋 Afficher les articles disponibles et leurs quantités\n";
    echo "2. 🛍️ Réaliser une vente\n";
    echo "3. ➕ Réapprovisionner un article\n";
    echo "4. 📊 Afficher l'état actuel du stock\n";
    echo "5. 📈 Suivre les ventes totales par article\n";
    echo "6. ❌ Supprimer un article\n";
    echo "7. 🚪 Quitter\n";

    // Initialisation du choix par l'user 

    $choix = intval(readline("Choisissez une option : "));

    // Vérification du choix 

    while($choix < 1 || $choix > 8){
        echo "Erreur option inconnu veuillez saisir une option comprise entre 1 et 8 ! \n";
        $choix = intval(readline("Choisissez une option : "));
    }


    // Si le choix est le choix est le numéro 1 alors on affiche les articles disponibles dans la boutique 

    if ($choix == 1) {
        echo "\nArticles disponibles avec leurs quantités :\n";
        for ($i = 0; $i < count($articles); $i++) {
            echo "$i: $articles[$i] - Quantité : $quantites[$i]\n";
        }
    }


    // Si le choix est le choix est le numéro 2 alors on réalise une vente dans la boutique 

    if ($choix == 2) {

        // Affichage du stock et de la quantité

        echo "\nArticles disponibles avec leurs quantités :\n";
        for ($i = 0; $i < count($articles); $i++) {
            echo "$i: $articles[$i] - Quantité : $quantites[$i]\n";
        }

        $index = intval(readline("Choisissez l'index de l'article à vendre : "));
        $quantiteVendue = intval(readline("Quantité vendue : "));

        if ($index >= 0 && $index < count($articles)) {
            if ($quantites[$index] >= $quantiteVendue) {
                $quantites[$index] -= $quantiteVendue; // Enlève la quantité vendue
                $ventes[$index] += $quantiteVendue; // Ajoute les nouvelles ventes 
                echo "Vente confirmée ✅ : $quantiteVendue $articles[$index]\n";
            } else {
                echo "Stock insuffisant ❌ pour $articles[$index].\n";
            }
        } else {
            echo "Index invalide.\n";
        }
    }

    if ($choix == 3) {
        echo "\nArticles disponibles avec leurs quantités :\n";
        for ($i = 0; $i < count($articles); $i++) {
            echo "$i: $articles[$i] - Quantité : $quantites[$i]\n";
        }

        $index = intval(readline("Choisissez l'index de l'article à réapprovisionner : "));
        $quantiteAjoutee = intval(readline("Quantité à ajouter : "));
    }
}

// Message de sortie
echo "Merci et à bientôt !\n";
