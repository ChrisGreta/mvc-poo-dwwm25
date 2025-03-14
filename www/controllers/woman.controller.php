<?php
require_once "models/json.model.php";

function readWoman($index)
{
    try {
        $title = "Détails de la femme célèbre";

        // Crée une instance de Json pour les femmes
        $json = new Json("women"); // Spécifie que nous utilisons le fichier JSON des femmes

        // Récupère les informations de la femme par son index
        $woman = $json->getWomanById($index);

        if ($woman) {
            ob_start(); // Démarre la temporisation de sortie
            require "views/woman.view.php"; // Charge la vue avec les données de la femme
            $content_view = ob_get_clean(); // Récupère le contenu généré
            require "views/base.view.php"; // Charge le template de base
        } else {
            echo "Aucune femme trouvée avec cet index.";
        }
    } catch (\Throwable $th) {
        echo "Erreur lors de l'affichage de la page de la femme célèbre : " . $th->getMessage();
        exit();
    }
}
