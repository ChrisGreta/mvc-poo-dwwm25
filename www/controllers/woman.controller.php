<?php
require_once 'models/json.model.php';

// Fonction pour afficher les femmes célèbres
function index() {
    // Charger les données du fichier JSON
    $json = new Json('_include/json/women.json');
    $femmesCelebres = $json->getJsonContent(); // Récupérer les données des femmes célèbres depuis le JSON

    // Passer les données à la vue
    include 'views/index.view.php';
}
?>

