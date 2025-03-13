<?php
    //inclus les modèles qui seront utilisés par mon controller
    require_once "models/json.model.php";    
    require_once "models/woman.model.php";

    // fonction appelé par défaut pour le controlleur HOME
    function index(){
        //try {
            $title = "Les femmes célèbres";

            ob_start();

            // Instanciation de notre fichier JSON
            $json = new Jason('_include/json/women.json');
            /*echo $json->getUrl();
            
            $json->setUrl('_include/json/men.json');

            echo $json->getUrl();*/
            // récupération du contenu du fichier
            $data_women = $json->getJsonContent(false);

            //$femmesCelebres = Json::getJson('_include/json/women.json');

            //affecté nos données à la variable $femmesCelebres
            $femmesCelebres = $data_women->femmes_celebres;

            //echo $json::DEFAULT_JSON;
            //echo $json->url;
            
            require "views/home.view.php";            
            //déchargement de la vue Home et affichage dans la vue principale 
            $content_view = ob_get_clean();
            require "views/base.view.php";
        /*} catch (\Throwable $th) {
            //throw $th;
            echo "erreur lors de l'affichage de ma page d'accueil";
            exit();
        }*/

    }
