<?php
require_once "models/json.model.php";

function readWoman($index)
{
    try {
        $title = "Détails de la femme célèbre";

        // Récupérer la femme par son index
        $json = new Json();
        $woman = $json->getWomanById($index);

        if ($woman) {
            ob_start();
            require "views/woman.view.php";
            $content_view = ob_get_clean();
            require "views/base.view.php";
        } else {
            echo "Aucune femme trouvée avec cet index.";
        }
    } catch (\Throwable $th) {
        echo "Erreur lors de l'affichage de la page de la femme célèbre : " . $th->getMessage();
        exit();
    }
}
