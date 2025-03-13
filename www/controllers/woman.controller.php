<?php

require_once "models/woman.model.php";


function readWoman()
{
    try {
        $title = "Femme célèbre";

        // definir l'instance
        $description = "née Maria Skłodowska, était une physicienne et chimiste d'origine polonaise, naturalisée française. Pionnière de la radioactivité, elle fut la première femme à recevoir un prix Nobel, la première personne à en obtenir deux, et la seule à en décrocher dans deux domaines scientifiques : la physique et la chimie. Elle découvrit le polonium et le radium, et ses recherches fondèrent les bases de la radiothérapie contre le cancer.";
        $image = "https://img.freepik.com/photos-premium/vieille-femme-est-assise-table-dessin-vieille-femme_1217673-162388.jpg?ga=GA1.1.578354866.1741860145&semt=ais_hybrid";
        $faits_historiques = [
            "Première femme à recevoir un prix Nobel en 1903.",
            "Double lauréate du prix Nobel (physique en 1903 et chimie en 1911).",
            "Contribution à la médecine pendant la Première Guerre mondiale."
        ];


        $woman = new Woman("Curie", "Marie", "1867-11-07", "1934-07-04", $description, $image, $faits_historiques, "Physique et Chimie");


        ob_start();
        require "views/woman.view.php";


        $content_view = ob_get_clean();
        require "views/base.view.php";
    } catch (\Throwable $th) {

        echo "Erreur lors de l'affichage de la page de la femme célèbre: " . $th->getMessage();
        exit();
    }
}
