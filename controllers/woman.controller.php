<?php
    //inclus les modèles qui seront utilisés par mon controller
    require_once "models/json.model.php";
    require_once "models/woman.model.php";

    // fonction appelé par défaut pour le controlleur Woman
    function readWoman(){
        //try {
            $title = "Femme célèbre";
            ob_start();

            $id = isset($_GET['women']) ?$_GET['women'] : '';
            $yeah_man = Woman::getWomenById($id);
            require "views/woman.view.php";
            //déchargement de la vue Home et affichage dans la vue principale 
            $content_view = ob_get_clean();
            require "views/base.view.php";
        /*} catch (\Throwable $th) {
            //throw $th;
            echo "erreur lors de l'affichage de ma page d'accueil";
            exit();
        }*/

    }