<?php
require_once 'models/woman.model.php';
require_once 'models/json.model.php';

function readWomen(){
    try{
        $title = 'Femme célèbre';
        $id = isset($_GET['women']) ?$_GET['women'] : '';
        $femme = Woman::getWomenById($id);

        
        
        
        ob_start();
        
        require './view/woman.view.php';
        $content = ob_get_clean();
        require './view/base.view.php';

    }catch(Exception $e){
        echo 'Erreur : ' . $e->getMessage();
        exit();
    }
}