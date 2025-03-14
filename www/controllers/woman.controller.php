<?php

//inclus les modèles qui seront utilisés par mon controller
require_once "models/woman.model.php";


function readWomen()
{

    try {
        // Charger et décoder le fichier JSON directement
        $json = file_get_contents('_include/json/woman.json');

        if ($json === false) {
            throw new Exception("Erreur lors de la lecture du fichier JSON.");
        }

        $data = json_decode($json, true); // Décoder en tableau associatif

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception("Erreur de décodage JSON : " . json_last_error_msg());
        }

        $title = "Femmes Celebres";
        $intro = "Bienvenue";

        // Créer un tableau pour stocker les objets Woman
        $women = [];
        foreach ($data['femmesCelebres'] as $womanData) {
            $faits = $womanData['faits_historiques_3'];
            $woman = new Woman(
                $womanData['nom'],
                $womanData['prenom'],
                $womanData['description'],
                $womanData['url_image'],
                $womanData['date_naissance'],
                $womanData['date_deces'],
                $womanData['domaine'],
                $faits
            );
            $women[] = $woman;
        }

        // Passer les données à la vue
        ob_start();
        require 'views/woman.view.php';
        $content_view = ob_get_clean();

        require 'views/base.view.php';
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
