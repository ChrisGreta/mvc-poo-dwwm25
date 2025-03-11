<?php

//paramètre de routage
$route = isset($_GET['route']) ? $_GET['route'] : 'home';

switch ($route) {
    case 'home':
        require_once('controllers/home.controller.php');
        index();
        break;
    default:
        echo "Page non trouvé";
        break;
}
