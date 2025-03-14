<?php

function index() {
    try {
        $title = "Page d'accueil";
        $intro = "Bienvenue sur le site des hommes et femmes célèbres";

        ob_start();
        require 'views/home.view.php';
        $content_view = ob_get_clean();

        require 'views/base.view.php';
    } catch (\Throwable $th) {
        echo "Erreur lors de l'affichage de la page d'accueil";
        exit();
    }
}
