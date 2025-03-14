<?php
$route = isset($_GET['route']) ? $_GET['route'] : 'home';

switch ($route) {
    case 'home':
        // echo "<h2>Welcome to the home page!</h2>";
        require_once('controllers/home.controller.php');
        index();
        break;

    case 'women':
        require_once('controllers/woman.controller.php');
        readWomen();
        break;

    case 'men':
        require_once('controllers/men.controller.php');
        readAllMen();
        break;

    default:
        echo "<h2>404 - Page not found</h2>";
        break;
}
