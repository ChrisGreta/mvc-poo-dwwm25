<?php
// Inclusion des contrôleurs
require_once 'controllers/home.controller.php';
require_once 'controllers/woman.controller.php';

// Définition des routes autorisées
$allowed_routes = ['home', 'readWoman'];
$route = isset($_GET['route']) && in_array($_GET['route'], $allowed_routes) ? $_GET['route'] : 'home';

// Gestion du routage
switch ($route) {
    case 'home':
        index();
        break;
    case 'readWoman':
        readWoman();
        break;
    default:
        include 'views/404.php';
        break;
}
?>