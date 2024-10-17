<?php

// Initialisation du stock

$articles = ["🧦 Chaussettes", "👕 T-shirts", "👟 Chaussures", "🧢 Casquettes", "👗 Robes"];
$quantites = [10, 5, 8, 3, 12];
$ventes = [0, 0, 0, 0, 0];

// Afficher le menu

echo "\nMenu 🛒 :\n";
echo "1. 📋 Afficher les articles disponibles\n";
echo "2. 📦 Afficher les quantités en stock\n";
echo "3. 🛍️ Réaliser une vente\n";
echo "4. ➕ Réapprovisionner un article\n";
echo "5. 📊 Afficher l'état actuel du stock\n";
echo "6. 📈 Suivre les ventes totales par article\n";
echo "7. ❌ Supprimer un article\n";
echo "8. 🚪 Quitter\n";

// Initialisation du choix par l'user 

$choix = intval(readline("Choisissez une option : "));

// Vérification du choix 

while($choix < 1 || $choix > 8){
    echo "Erreur option inconnu veuillez saisr une option comprise entre 1 et 8 !";
    $choix = intval(readline("Choisissez une option : "));
}