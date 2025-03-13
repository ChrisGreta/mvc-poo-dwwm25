<?php
require_once 'models/woman.model.php';

function index(){
    
    try{
        $title = 'Accueil';
        $femmesCelebres = Woman::getWomen();
        
        ob_start();
        require './view/home.view.php';
        $content = ob_get_clean();
        require './view/base.view.php';

    }catch(Exception $e){
        echo 'Erreur : ' . $e->getMessage();
    }
}