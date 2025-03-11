<?php

// Inclusion du fichier de modèle
require_once "models/woman.model.php";

// Fonction pour configurer la vue de la page d'accueil
function index() {
    $title = "Page d'accueil";
    ob_start();
    $femmesCelebres = getWomen();
    require "views/home.view.php";
    $content_view = ob_get_clean();
    require "views/base.view.php";
}

// Appel de la fonction index pour afficher la page d'accueil
try {
    index();
} catch (\Throwable $th) {
    echo "erreur lors de l'affichage de la page d'accueil";
}


