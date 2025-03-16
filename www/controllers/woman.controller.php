<?php
require_once "models/woman.model.php";

function readWomen()
{
    try {
        // Lecture du fichier JSON
        $json = file_get_contents('_include/json/woman.json');

        if ($json === false) {
            throw new Exception("Erreur lors de la lecture du fichier JSON.");
        }

        // décode le contenu JSON, on veux un tableau pas un objet
        $data = json_decode($json, true);

        // vérifié si le décodage JSON
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception("Erreur de décodage JSON : " . json_last_error_msg());
        }

        $title = "Femmes Célèbres";
        $intro = "Bienvenue";

        $colors = ['#FFB6C1', '#FFD700', '#E6E6FA', '#ADD8E6', '#F08080'];
        $index = 0;


        // Création des objets Woman
        $women = [];

        foreach ($data['femmesCelebres'] as $womanData) {
            $color = $colors[$index % count($colors)];
            $index++;

            $women[] = new Woman(
                $womanData['nom'],
                $womanData['prenom'],
                $womanData['description'],
                $womanData['url_image'],
                $womanData['date_naissance'],
                $womanData['date_deces'],
                $womanData['domaine'],
                $womanData['faits_historiques_3'],
                $womanData['url_wikipedia'],
                $color
            );
        }

        // ob_start() commence une mise en mémoire tampon de la sortie. 
        // Cela permet de capturer le contenu généré par la vue woman.view.php sans l'afficher immédiatement.
        ob_start();
        require 'views/woman.view.php';

        // ob_get_clean() capture le contenu de la mise en mémoire tampon et le stocke dans la variable $content_view.
        $content_view = ob_get_clean();

        //  la page de base est incluse incluant la structure HTML générale
        require 'views/base.view.php';
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
