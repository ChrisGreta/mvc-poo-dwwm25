<?php

require_once "models/woman.model.php";
function index()
{
    try {

        $title = "Page d'accueil";
        $intro = "Bienvenue sur la page d'accueil";

        ob_start();

        // 🔽 Appel à la fonction du modèle pour récupérer les femmes célèbres
        $femmesCelebres = getWoman();

        require 'views/home.view.php';

        $content_view = ob_get_clean();

        require 'views/base.view.php';

    } catch (\Throwable $th) {
        //throw $th;
        echo "erreur lors de l'affichage de ma page d'accueil";
        exit();
    }
}
