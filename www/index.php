<?php
// Paramètre de routage
$route = isset($_GET['route']) ? $_GET['route'] : 'home';

switch ($route) {
    case 'home':
        require_once('controllers/home.controller.php');
        index();
        break;
    case 'woman':
        require_once('controllers/woman.controller.php');
        if (isset($_GET['id'])) {
            readWoman($_GET['id']);
        } else {
            echo "ID non spécifié.";
        }
        break;
    case 'man':
        require_once('controllers/man.controller.php');
        if (isset($_GET['id'])) {
            readMan($_GET['id']);
        } else {
            echo "ID non spécifié.";
        }
        break;
    default:
        echo "Page non trouvée";
        break;
}
