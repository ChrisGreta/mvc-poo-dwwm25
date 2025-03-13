<?php
    require_once "model/woman.model.php";
    // fonction appelée par défaut pour le controller HOME
    function index(){
        try {
            $title = "Page d'accueil";

            ob_start();
    
            $femmesCelebres = getWomen();
            require "views/home.view.php";
    
            // déchargement de la vue Home et affichage dans la vue principale 
            $content_view = ob_get_clean();
            require "views/base.view.php";
        } catch (\Throwable $th) {
            // throw $th;
            echo "Erreur lors de l'affichage de ma page d'accueil";
            exit();
        }
    }
