<?php
// paramètre de routage
$route = isset($_GET['route']) ?$_GET['route'] : 'home';

switch ($route) {
    case 'home':
        require './controllers/home.controller.php';
        index();
        break;
    case 'read':
        require './controllers/women.controller.php';
        readWomen();
        break;
    default:
        echo 'page non trouvée';
        break;
}