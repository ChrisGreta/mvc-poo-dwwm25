<?php
//inclus les modèles qui seront utilisés par mon controller
require_once "models/woman.model.php";

// fonction appelé par défaut pour le controlleur Woman
function readWoman()
{
    try {
        $title = "Femme célèbre";

        $description = "Marie Curie, née Maria Skłodowska, était une physicienne et chimiste d'origine polonaise, naturalisée française. Elle est surtout connue pour ses travaux pionniers sur la radioactivité. Elle a été la première femme à recevoir un prix Nobel, la première personne à en recevoir deux, et la seule à en recevoir dans deux domaines scientifiques différents : la physique et la chimie. Elle a découvert le polonium et le radium, et ses recherches ont jeté les bases de la radiothérapie pour le traitement du cancer.";
        $image = "https://img.freepik.com/photos-premium/marie-curie-remporte-prix-nobel-chimie-1911-pour-sa-decouverte-du-polonium_1144359-126.jpg?w=740";
        $woman = new Woman("Curie", "Marie", "7 novembre 1867", $description, $image, "Physique et Chimie");

        /*
            Nom : Curie
            Prénom : Marie
            Date de naissance : 7 novembre 1867
            Description : Marie Curie, née Maria Skłodowska, était une physicienne et chimiste d'origine polonaise, naturalisée française. Elle est surtout connue pour ses travaux pionniers sur la radioactivité. Elle a été la première femme à recevoir un prix Nobel, la première personne à en recevoir deux, et la seule à en recevoir dans deux domaines scientifiques différents : la physique et la chimie. Elle a découvert le polonium et le radium, et ses recherches ont jeté les bases de la radiothérapie pour le traitement du cancer.
            Domaine : Physique et chimie
            */

        ob_start();
        require "views/woman.view.php";

        //déchargement de la vue Home et affichage dans la vue principale 
        $content_view = ob_get_clean();
        require "views/base.view.php";
    } catch (\Throwable $th) {
        //throw $th;
        echo "erreur lors de l'affichage de ma page d'accueil";
        exit();
    }
}
