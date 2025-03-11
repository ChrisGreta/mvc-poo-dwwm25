<?php
echo "<h2>Bienvenue !</h2>";
// Exemple d'utilisation
foreach ($femmesCelebres as $femme) {
    echo "<h2>{$femme['prénom']} {$femme['nom']}</h2>";
    echo "<p><strong>Date de naissance:</strong> {$femme['date_naissance']}</p>";
    echo "<p>{$femme['description']}</p>";
    echo "<p><strong>Domaine:</strong> {$femme['domaine']}</p>";
    echo "<img src='{$femme['image']}' alt='{$femme['prénom']} {$femme['nom']}' style='max-width: 200px;'>";
    echo "<hr>";
}