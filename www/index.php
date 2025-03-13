<?php

//paramètre de routage
$route = isset($_GET['route']) ? $_GET['route'] : 'home';

switch ($route) {
    case 'home':
        require_once('controllers/home.controller.php');
        index();
        break;
    case 'read':
        require_once('controllers/woman.controller.php');
        readWoman();
        break;
    default:
        echo "Page non trouvé";
        break;
}
