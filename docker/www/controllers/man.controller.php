<?php
require_once "models/json.model.php";

function readMen($index)
{
    try {
        $title = "Détails de la femme célèbre";

        // Récupérer la femme par son index
        $json = new Json();
        $woman = $json->getWomanById($index);

        if ($men) {
            ob_start();
            require "views/man.view.php";
            $content_view = ob_get_clean();
            require "views/base.view.php";
        } else {
            echo "Aucun homme trouvée avec cet index.";
        }
    } catch (\Throwable $th) {
        echo "Erreur lors de l'affichage de la page de l'homme célèbre : " . $th->getMessage();
        exit();
    }
}