<?php
require_once "models/json.model.php";

function readMan($index)
{
    try {
        $title = "Détails de l'homme célèbre";

        // Crée une instance de Json pour les hommes
        $json = new Json("men"); // Spécifie que nous utilisons le fichier JSON des hommes

        // Récupère les informations de l'homme par son index
        $man = $json->getManById($index);

        if ($man) {
            ob_start(); // Démarre la temporisation de sortie
            require "views/man.view.php"; // Charge la vue avec les données de l'homme
            $content_view = ob_get_clean(); // Récupère le contenu généré
            require "views/base.view.php"; // Charge le template de base
        } else {
            echo "Aucun homme trouvé avec cet index.";
        }
    } catch (\Throwable $th) {
        echo "Erreur lors de l'affichage de la page de l'homme célèbre : " . $th->getMessage();
        exit();
    }
}
