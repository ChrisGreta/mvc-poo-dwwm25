<?php
// Paramètre de routage
$route = isset($_GET['route']) ? $_GET['route'] : 'home';

switch ($route) {
    case 'home':
        require_once('controllers/home.controller.php');
        index();
        break;
    case 'read':
        require_once('controllers/woman.controller.php');
        if (isset($_GET['id'])) {
            readWoman($_GET['id']); // Passez l'index de la femme à la fonction
        } else {
            echo "ID non spécifié.";
        }
        break;
    default:
        echo "Page non trouvée";
        break;
}
