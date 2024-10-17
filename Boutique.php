<?php

// Initialisation du stock

$articles = ["🧦 Chaussettes", "👕 T-shirts", "👟 Chaussures", "🧢 Casquettes", "👗 Robes"];
$quantites = [10, 5, 8, 3, 12];
$ventes = [0, 0, 0, 0, 0];

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
    echo "\nArticles disponibles avec quantités :\n";
    for ($i = 0; $i < count($articles); $i++) {
        echo "$i: $articles[$i] - Quantité : $quantites[$i]\n";
    }
}