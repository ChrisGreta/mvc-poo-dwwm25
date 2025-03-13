
<h2>Bon 8 mars</h2>

<?php
foreach ($femmesCelebres as $femme) {
    echo "<h2>{$femme['prenom']} {$femme['nom']}</h2>";
    echo "<p><strong>Date de naissance:</strong> {$femme['date_naissance']}</p>";
    echo "<p>{$femme['description']}</p>";
    echo "<p><strong>Domaine:</strong> {$femme['domaine']}</p>";
    echo "<img src='{$femme['image']}' alt='{$femme['prenom']} {$femme['nom']}' style='max-width: 200px;'>";
    echo "<hr>";
}