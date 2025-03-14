<?php
// Inclus les modèles qui seront utilisés par mon contrôleur
require_once "models/json.model.php";

// Fonction appelée par défaut pour le contrôleur HOME
function index()
{
    try {
        // Détermine le type de personnes à afficher (femmes ou hommes)
        $type = isset($_GET['type']) ? $_GET['type'] : 'women'; // Par défaut, affiche les femmes
        $title = ($type === 'women') ? "Les femmes célèbres" : "Les hommes célèbres";

        ob_start(); // Démarre la temporisation de sortie

        // Instanciation de notre fichier JSON
        $json = new Json($type); // Utilise le fichier JSON correspondant

        // Récupération des données du fichier JSON
        $data = $json->getJsonContent(false); // false pour obtenir un objet au lieu d'un tableau associatif

        if ($data === false) {
            throw new Exception("Erreur lors de la récupération ou du décodage du fichier JSON.");
        }

        // Affecter data > personnes_celebres
        $personnesCelebres = ($type === 'women') ? $data->femmes_celebres : $data->hommes_celebres;

        // Charge la vue home.view.php avec les données des personnes
        require "views/home.view.php";

        // Déchargement de la vue et affichage dans la vue principale
        $content_view = ob_get_clean();
        require "views/base.view.php";
    } catch (\Throwable $th) {
        // Gestion des erreurs
        echo "Erreur lors de l'affichage de la page d'accueil : " . $th->getMessage();
        exit();
    }
}
