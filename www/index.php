<?php
// Inclusion des contrôleurs
require_once 'controllers/woman.controller.php';

// Définition des routes autorisées
$allowed_routes = ['home'];
$route = isset($_GET['route']) && in_array($_GET['route'], $allowed_routes) ? $_GET['route'] : 'home';

// Gestion du routage
switch ($route) {
    case 'home':
        index(); // Affiche la page d'accueil avec les femmes célèbres
        break;
    default:
        echo "Page non trouvée"; // Page par défaut
        break;
}
?>

