<?php
// Inclus les modèles qui seront utilisés par mon contrôleur
require_once "models/woman.model.php";

// Fonction appelée par défaut pour le contrôleur Woman
function readWoman()
{
    try {
        $title = "Femme célèbre";

        $description = "Marie Curie, née Maria Skłodowska, était une physicienne et chimiste d'origine polonaise, naturalisée française. Elle est surtout connue pour ses travaux pionniers sur la radioactivité. Elle a été la première femme à recevoir un prix Nobel, la première personne à en recevoir deux, et la seule à en recevoir dans deux domaines scientifiques différents : la physique et la chimie. Elle a découvert le polonium et le radium, et ses recherches ont jeté les bases de la radiothérapie pour le traitement du cancer.";
        $image = "https://img.freepik.com/photos-premium/marie-curie-remporte-prix-nobel-chimie-1911-pour-sa-decouverte-du-polonium_1144359-126.jpg?w=740";
        $woman = new Woman("Curie", "Marie", "7 novembre 1867", $description, $image, "Physique et Chimie");

        // On passe l'objet $woman à la vue
        ob_start();
        require "views/woman.view.php"; // La vue va avoir accès à la variable $woman

        // Déchargement de la vue Home et affichage dans la vue principale
        $content_view = ob_get_clean();
        require "views/base.view.php";
    } catch (\Throwable $th) {
        // Gestion des erreurs
        echo "Erreur lors de l'affichage de ma page d'accueil";
        exit();
    }
}
