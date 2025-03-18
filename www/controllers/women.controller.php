<?php
require_once 'models/women.model.php';
require_once 'models/json.model.php';

function readWomen() {
    try {
        $womenCelebres = Women::getWomen();
        $index = isset($_GET['index']) ? (int)$_GET['index'] : null;

        if ($index !== null) {
            $womenData = $womenCelebres[$index];
            $title = "Détails de " . $womenData->prenom . " " . $womenData->nom;
        } else {
            $title = "Femmes célèbres";
        }

        ob_start();
        require 'views/women.view.php';
        $content = ob_get_clean();
        require 'views/base.view.php';
    } catch (Exception $e) {
        echo "Erreur: " . $e->getMessage();
    }
}
?>