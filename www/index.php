<?php
// Paramètre de routage
$route = isset($_GET['route']) ? $_GET['route'] : 'home';

switch ($route) {
    case 'home':
        require_once('controllers/home.controller.php');
        index();
        break;
    case 'readWomen':
        require_once('controllers/women.controller.php');
        readWomen();
        break;
    case 'readMen': // Vérifiez bien le point-virgule ici
        require_once('controllers/men.controller.php');
        readMen();
        break;
    default:
        echo "404 - Page not found";
        break;
}
?>
