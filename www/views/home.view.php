<?php
echo"<h2> page d'accueil</h2>";
// Exemple d'utilisation
foreach ($femmeCelebres as $women) {
    echo "<h2>{$women['prénom']} {$women['nom']}</h2>";
    echo "<p><strong>Date de naissance:</strong> {$women['date_naissance']}</p>";
    echo "<p>{$women['description']}</p>";
    echo "<p><strong>Domaine:</strong> {$women['domaine']}</p>";
    echo "<img src='{$women['image']}' alt='{$women['prénom']} {$women['nom']}' style='max-width: 200px;'>";
    echo "<hr>";
}
?>