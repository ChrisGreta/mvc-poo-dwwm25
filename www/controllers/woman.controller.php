<?php
// Inclure les modèles nécessaires
require_once "model/woman.model.php";

// Fonction appelée pour afficher une femme célèbre
function readWoman(){
    try {
        $title = "Femme célèbre";

        $description = "Marie Curie, née Maria Skłodowska, était une physicienne et chimiste d'origine polonaise.";
        $image = "https://th.bing.com/th/id/R.c10410ae338c69a7aa514fbd5b7ebde1?rik=WqCtiGe4M34ZMg&pid=ImgRaw&r=0";
        
        // Création de l'objet Woman
        $woman = new Woman("Curie", "Marie", "1867-11-07", $description, $image, "Physique et chimie");

        // Capture la sortie de la vue
        ob_start();
        require "views/woman.view.php";
        
        // Déchargement de la vue et affichage dans la vue principale
        $content_view = ob_get_clean();
        require "views/base.view.php";

    } catch (\Throwable $th) {
        echo "Erreur lors de l'affichage de la page.";
        exit();
    }
}
