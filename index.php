<?php

//paramètre de routage
$route = isset($_GET['route']) ? $_GET['route'] : 'home';

switch ($route) {
    case 'home':
        require_once('controllers/home.controler.php');
        index();
        break;
    case 'ride':
        require_once('controllers/woman.controller.php');
        readWoman();
        break;        
    default:
        echo "Page non trouvé";
        break;
}
