<?php

// Inclure le modèle
require_once "models/men.model.php";

// Fonction appelée par le contrôleur
function readAllMen()
{
    try {
    // Charger les données
    $jsonData = file_get_contents('_include/json/men.json');
    $menArray = json_decode($jsonData, true);
    $menObjects = [];


    $title = "Hommes Celebres";
    $intro = "Bienvenue";

    // Créer un tableau d'objets Men
    foreach ($menArray as $data) {
        $menObjects[] = new Men(
            $data['nom'],
            $data['prenom'],
            $data['description'],
            $data['url_image'],
            $data['date_naissance'],
            $data['date_deces'],
            $data['domaine'],
            $data['faits_historiques_3']
        );
    }

    // Vue
    ob_start();
    require 'views/men.view.php';
    $content_view = ob_get_clean();

    require 'views/base.view.php';

    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
