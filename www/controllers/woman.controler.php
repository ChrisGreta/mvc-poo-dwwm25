<?php

    //inclus les modèles qui seront utilisés par mon controller
    require_once "models/woman.model.php";

    // fonction appelé par défaut pour le controlleur Woman
    function readWoman(){
        try {
            $title = "Femme célèbre";
            $intro = "";
            $description = "Marie Curie était une physicienne et chimiste polonaise naturalisée française. Elle est surtout connue pour ses travaux pionniers sur la radioactivité. Elle est la première femme à avoir reçu un prix Nobel, la première personne et la seule femme à l'avoir reçu deux fois, et la seule personne à l'avoir reçu dans deux domaines scientifiques différents (physique et chimie).";
            $image = "https://www.monuments-nationaux.fr/var/cmn_inter/storage/images/_aliases/image_text_webp/3/2/8/6/120766823-1-fre-FR/cb6ef8c49c53-portrait-maria-sklodowska-curie-1903-c-cmn.webp.webp";
            $date_naissance = "1867-11-07";
            $date_deces = "1934-07-04";
            $domaine = "Physique / Chimie";

        // Tableau de faits marquants
        $faits = [
            "Première femme à recevoir un prix Nobel : Marie Curie a été la première femme à recevoir un prix Nobel en 1903, partagé avec son mari Pierre Curie et Henri Becquerel, pour leurs recherches sur les radiations.",
            "Double lauréate du prix Nobel : Elle est la seule personne à avoir reçu deux prix Nobel dans deux domaines scientifiques différents : en physique en 1903 et en chimie en 1911, pour la découverte du radium et du polonium.",
            "Contribution à la médecine pendant la Première Guerre mondiale : Marie Curie a joué un rôle crucial en développant des unités de radiologie mobiles pour aider à soigner les soldats blessés pendant la Première Guerre mondiale, ce qui a marqué le début de l'utilisation des rayons X en médecine de guerre."
        ];


        $woman = new Woman("Curie", "Marie", $description, $image, $date_naissance, $date_deces, $domaine, $faits);
            ob_start();
            require 'views/woman.view.php';

            $content_view = ob_get_clean();

            require 'views/base.view.php';

        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
