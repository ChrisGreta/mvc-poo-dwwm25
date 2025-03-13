<?php
    //inclus les modèles qui seront utilisés par mon controller
    require_once "models/woman.model.php";
    require_once "models/json.model.php";

    // fonction appelé par défaut pour le controlleur HOME
    function index(){
        try {
            $title = "Page d'accueil";

            ob_start();
            $json = new Json('include/json/women.json');
            $data_women =$json->getJsonContent(false);
            $femmesCelebres = $data_women->femmes_celebres;

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