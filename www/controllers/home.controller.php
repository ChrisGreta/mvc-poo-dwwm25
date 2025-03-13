<?php
//inclus les modèles qui seront utilisés par mon controller
require_once "models/woman.model.php";
require_once "models/json.model.php";

// fonction appelé par défaut pour le controlleur HOME
function index()
{
    try {
        $title = "Les femmes Célèbres";

        ob_start();

        // Instanciation de notre fichier JSON
        $json = new Json('_include/json/women.json');

        // récupération des datas du fichier JSON
        $data_women = $json->getJsonContent(false);

        // affecter data > femmesCelebres
        $femmesCelebres = $data_women->femmes_celebres;

        if ($data_women === false) {
            echo "Erreur lors de la récupération ou du décodage du fichier JSON.";
            exit;
        }

        require "views/home.view.php";

        //déchargement de la vue Home et affichage dans la vue principale 
        $content_view = ob_get_clean();
        require "views/base.view.php";
    } catch (\Throwable $th) {
        //throw $th;
        echo "erreur lors de l'affichage de ma page d'accueil";
        exit();
    }
}
