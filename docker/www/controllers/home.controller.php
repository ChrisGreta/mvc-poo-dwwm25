<?php
    require "./models/model.woman.php";

    function index(){
        try {
            $title = "Page d'accueil";


            ob_start();
            $femmesCelebres = getWomen();
            require "./views/home.view.php";
            $content_view = ob_get_clean();
    
            require "./views/base.view.php";
            //code...
        } catch (\Throwable $th) {
            //throw $th;
            echo "erreur lors de l'affichage";
            exit();
        }

    }
