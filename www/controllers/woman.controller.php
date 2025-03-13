<?php
require_once 'models/woman.model.php';

function readWoman() {
    $femmesCelebres = Woman::getAll();
    $id = $_GET['id'] ?? null;

    // Trouver la femme correspondante
    $femme = null;
    foreach ($femmesCelebres as $f) {
        if (strtolower(str_replace(' ', '-', $f->getNomPrenom())) === $id) {
            $femme = $f;
            break;
        }
    }

    // Passer les données à la vue
    $view = "views/woman.view.php";
    include "views/base.view.php";
}
?>