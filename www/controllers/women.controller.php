<?php
require_once "models/women.model.php";
require_once "models/json.model.php";

function readWomen(){
    try {
        $womenCelebres = Women::getWomen();
        $index = isset($_GET['women']) ? (int)$_GET['women'] : 0;
        echo '<pre>';
        $womenData = $womenCelebres[$index];
        // var_dump($womenData['nom'] );
        echo '</pre>';
        $title = "femme célèbres";
        $description = "Marie Curie était une physicienne et chimiste polonaise naturalisée française. Elle est surtout connue pour ses travaux pionniers sur la radioactivité. Elle est la première femme à avoir reçu un prix Nobel, la première personne et la seule femme à l'avoir reçu deux fois, et la seule personne à l'avoir reçu dans deux domaines scientifiques différents (physique et chimie).";
        $image = "https://th.bing.com/th/id/OIP.6kfCkyLvTe-dd2rDDwP87QHaGy?w=653&h=599&rs=1&pid=ImgDetMain";
        $faitsHistoriques = [
            "Première femme à recevoir un prix Nobel : Marie Curie a été la première femme à recevoir un prix Nobel en 1903, partagé avec son mari Pierre Curie et Henri Becquerel, pour leurs recherches sur les radiations.",
            "Double lauréate du prix Nobel : Elle est la seule personne à avoir reçu deux prix Nobel dans deux domaines scientifiques différents : en physique en 1903 et en chimie en 1911, pour la découverte du radium et du polonium.",
            "Contribution à la médecine pendant la Première Guerre mondiale : Marie Curie a joué un rôle crucial en développant des unités de radiologie mobiles pour aider à soigner les soldats blessés pendant la Première Guerre mondiale, ce qui a marqué le début de l'utilisation des rayons X en médecine de guerre."
        ];
        $women = new Women($womenData['nom'], $womenData['prenom'], $womenData['date_naissance'],$womenData['description'],$womenData['url_image'],$womenData['domaine'],$womenData['date_deces'],$womenData['faits_historiques_3']);

        ob_start();
        require "views/women.view.php";
    
        $content = ob_get_clean();
        require "views/base.view.php";
    } catch (Exception $e) {
        echo "Erreur: " . $e->getMessage();
    }
}



// require_once "models/women.model.php";

// function readWomen(){
//     try {
//         $title = "femme célèbres";


//             $woman = new Women(
//                 $womanData->nom,
//                 $womanData['prenom'],
//                 $womanData['date_naissance'],
//                 $womanData['description'],
//                 $womanData['url_image'],
//                 $womanData['domaine'],
//                 $womanData['date_deces'],
//                 $womanData['faits_historiques_3']
//             );
//         } else {
//             throw new Exception("Invalid index");
//         }

//         ob_start();
//         require "views/women.view.php";
    
//         $content = ob_get_clean();
//         require "views/base.view.php";
//     } catch (Exception $e) {
//         echo "Erreur: " . $e->getMessage();
//     }
// }
?>





