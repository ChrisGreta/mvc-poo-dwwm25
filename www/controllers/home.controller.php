<?php
require_once 'models/woman.model.php';

function index() {
    // Récupérer toutes les femmes célèbres
    $femmesCelebres = Woman::getAll();

    // Passer les données à la vue
    $view = "views/home.view.php";
    include "views/base.view.php";
}
?>
