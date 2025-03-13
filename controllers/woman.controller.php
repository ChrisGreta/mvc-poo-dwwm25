<?php
    //inclus les modèles qui seront utilisés par mon controller
    require_once "models/woman.model.php";

    // fonction appelé par défaut pour le controlleur Woman
    function readWoman(){
        try {
            $title = "Femme célèbre";

            $description = "Marie Curie, née Maria Skłodowska, était une physicienne et chimiste d'origine polonaise, naturalisée française. Elle est surtout connue pour ses travaux pionniers sur la radioactivité. Elle a été la première femme à recevoir un prix Nobel, la première personne à en recevoir deux, et la seule à en recevoir dans deux domaines scientifiques différents : la physique et la chimie. Elle a découvert le polonium et le radium, et ses recherches ont jeté les bases de la radiothérapie pour le traitement du cancer.";
            $image = "https://th.bing.com/th/id/R.c10410ae338c69a7aa514fbd5b7ebde1?rik=WqCtiGe4M34ZMg&pid=ImgRaw&r=0";
            
            $fait = [
                "Première femme à recevoir un prix Nobel : Marie Curie a été la première femme à recevoir un prix Nobel en 1903, partagé avec son mari Pierre Curie et Henri Becquerel, pour leurs recherches sur les radiations.",
                "Double lauréate du prix Nobel : Elle est la seule personne à avoir reçu deux prix Nobel dans deux domaines scientifiques différents : en physique en 1903 et en chimie en 1911, pour la découverte du radium et du polonium.",
                "Contribution à la médecine pendant la Première Guerre mondiale : Marie Curie a joué un rôle crucial en développant des unités de radiologie mobiles pour aider à soigner les soldats blessés pendant la Première Guerre mondiale, ce qui a marqué le début de l'utilisation des rayons X en médecine de guerre."
            ];
            $woman = new Woman("Curie", "Marie", "1867-11-08", "1934-07-04", $description, $fait, $image ,"Physique et chimie");
            
            ob_start();
            require "views/woman.view.php";
    
            //déchargement de la vue Home et affichage dans la vue principale 
            $content_view = ob_get_clean();
            require "views/base.view.php";
        } catch (\Throwable $th) {
            //throw $th;
            echo "erreur lors de l'affichage de ma page d'accueil";
            exit();
        }

    }