<?php
//
require_once "models/women.model.php";

function index(){
    echo "appel du controller home";
try {
    $title = "Page d'accueil";
    
    $femmeCelebres = getWomen();
    ob_start();

    require "views/home.view.php";

    $content = ob_get_clean();
    require "views/base.view.php";
    }catch (Exception $e) {
        echo "Erreur: " . $e->getMessage();
    }
}
