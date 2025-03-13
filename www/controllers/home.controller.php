<?php
 require_once 'models/woman.model.php';
 require_once 'models/json.model.php';
 
 function readWomen(){
     try{
         $title = 'Femme célèbre';
         $id = isset($_GET['women']) ?$_GET['women'] : '';
         $femme = Woman::getWomenById($id);
 
         $faits = ['Première femme à recevoir un prix Nobel : Marie Curie a été la première femme à recevoir un prix Nobel en 1903, partagé avec son mari Pierre Curie et Henri Becquerel, pour leurs recherches sur les radiations.','Double lauréate du prix Nobel : Elle est la seule personne à avoir reçu deux prix Nobel dans deux domaines scientifiques différents : en physique en 1903 et en chimie en 1911, pour la découverte du radium et du polonium.','Contribution à la médecine pendant la Première Guerre mondiale : Marie Curie a joué un rôle crucial en développant des unités de radiologie mobiles pour aider à soigner les soldats blessés pendant la Première Guerre mondiale, ce qui a marqué le début de l\'utilisation des rayons X en médecine de guerre.'];
 
 
         $women = new Woman('Marie','Curie','7 novembre 1867', 'Marie Curie était une physicienne et chimiste polonaise naturalisée française. Elle est surtout connue pour ses travaux pionniers sur la radioactivité. Elle est la première femme à avoir reçu un prix Nobel, la première personne et la seule femme à l\'avoir reçu deux fois, et la seule personne à l\'avoir reçu dans deux domaines scientifiques différents (physique et chimie).','https://cdn.pixabay.com/photo/2024/08/31/20/15/ai-generated-9012240_640.png', $faits, '4 juillet 1934', 'physique et chimie');
 
         ob_start();
         
         require './view/woman.view.php';
         $content = ob_get_clean();
         require './view/base.view.php';
 
     }catch(Exception $e){
         echo 'Erreur : ' . $e->getMessage();
         exit();
     }

