<?php
//
require_once "models/women.model.php";
require_once "models/json.model.php";

function index(){
    echo "appel du controller home";
try {
    $title = "Page d'accueil";
    
    // $femmesCelebres = getWomen();
    ob_start();
    //instanciation de notre fichier json
    $json = new Json('include/json/women.json');
    //récupération du contenu du fichier
    $data_women = $json->getJsonContent(false);
    //récupération des femmes célèbres
    $femmesCelebres = $data_women->femmes_celebres;

    require "views/home.view.php";

    $content = ob_get_clean();
    require "views/base.view.php";
    }catch (Exception $e) {
        echo "Erreur: " . $e->getMessage();
    }
}
