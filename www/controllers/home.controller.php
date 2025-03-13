<?php

require_once "models/woman.model.php";
require_once 'models/json.model.php';

function calculateAge($birthDate, $deathDate = null) {
    $birthDate = new DateTime($birthDate); // Crée un objet DateTime pour la date de naissance
    $currentDate = new DateTime(); // Crée un objet DateTime pour la date actuelle

    // Si la date de décès est fournie, on l'utilise
    if ($deathDate) {
        $deathDate = new DateTime($deathDate); // Crée un objet DateTime pour la date de décès
        $interval = $deathDate->diff($birthDate); // Calcule la différence entre la date de décès et la date de naissance
    } else {
        $interval = $currentDate->diff($birthDate); // Calcule la différence entre la date actuelle et la date de naissance
    }
    return $interval->y; // Retourne l'âge en années
}


function index()
{
    try {

    $title = "Page d'accueil";
    $intro = "Bienvenue sur la page d'accueil";

    ob_start();
    // instanciation du Json
    $json = new Json('_include/json/woman.json');

    // recuperation du contenu 
    $data_women = $json->getJsonContent(false);

    $femmesCelebres = $data_women->femmesCelebres;

    require 'views/home.view.php';

    $content_view = ob_get_clean();

    require 'views/base.view.php';

    } catch (\Throwable $th) {
        //throw $th;
        echo "erreur lors de l'affichage de ma page d'accueil";
        exit();
    }


}
