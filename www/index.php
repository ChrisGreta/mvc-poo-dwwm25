<?php
// echo "hello nadima";

// parametre de routage
$route = isset($_GET['route']) ? $_GET['route'] : 'home';

switch ($route) {
    case 'home':
        # code...
        require_once('controllers/home.controller.php');
        index();
        break;
    case 'read';
        require_once('controllers/women.controller.php');
        readWomen();
        break;
    default:
        # code...
        echo "404 - Page not found";
        break;
}
// echo $route;
?> 
