<?php
require_once 'models/woman.model.php';
require_once 'models/json.model.php';


function index(){
    
    try{
        $objJson = new Json('include/json/women.json');
        $title = 'Accueil';
        $datafemme = $objJson->getJsonContent(false);
        $femmesCelebres = $datafemme->femmes_celebres;
        
        ob_start();
        require './view/home.view.php';
        $content = ob_get_clean();
        require './view/base.view.php';

    }catch(Exception $e){
        echo 'Erreur : ' . $e->getMessage();
    }
}