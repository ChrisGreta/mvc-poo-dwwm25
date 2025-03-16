<?php

function index() {
    try {
        $title = "Hommes et Femmes célèbres";
        $intro = "Bienvenue";

        ob_start();
        require 'views/home.view.php';
        $content_view = ob_get_clean();

        require 'views/base.view.php';
    } catch (\Throwable $th) {
        echo "Erreur lors de l'affichage de la page d'accueil";
        exit();
    }
}
