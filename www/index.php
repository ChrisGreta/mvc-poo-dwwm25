<?php
$route = isset($_GET['route']) ? $_GET['route'] : 'home';

switch ($route) {
    case 'home':
        // echo "<h2>Welcome to the home page!</h2>";
        require_once('controllers/home.controller.php');
        index();
        break;

    case 'read':
        require_once('controllers/woman.controler.php');
        readWoman();
        break;

    default:
        echo "<h2>404 - Page not found</h2>";
        break;
}