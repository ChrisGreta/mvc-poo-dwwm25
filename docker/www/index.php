<?php

$route = isset($_GET['route']) ? $_GET['route'] : 'home';

switch ($route) {
    case 'home':
        # code...
        require_once('./controllers/home.controller.php');
        index();
        break;
    
    default:
    echo "page non trouvé";
        # code...
        break;
}

echo $route;

