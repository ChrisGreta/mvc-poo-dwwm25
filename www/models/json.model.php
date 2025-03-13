<?php

class Json
{
    private $url;
    const DEFAULT_JSON = "_include/json/woman.json";

    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Récupère et décode un fichier JSON depuis une URL.
     *
     * @param bool $assoc Si true, retourne un tableau associatif. Sinon, retourne un objet.
     * @return mixed Le contenu décodé du fichier JSON, ou false en cas d'erreur.
     */


    function getJsonContent($assoc = true)
    {
        // Récupère le contenu du fichier JSON depuis l'URL
        $jsonContent = file_get_contents($this->url);

        if ($jsonContent === false) {
            // Gérer l'erreur si file_get_contents échoue
            echo "Erreur lors de la lecture du fichier JSON.";
            return false;
        }

        // Décode le contenu JSON
        $decodedContent = json_decode($jsonContent, $assoc);

        if (json_last_error() !== JSON_ERROR_NONE) {
            echo "Erreur de décodage JSON : " . json_last_error_msg();
            // Gérer l'erreur si json_decode échoue
            return false;
        }

        return $decodedContent;
    }

    /**
     * Récupère et décode un fichier JSON depuis une URL.
     *
     * @param string $url L'URL du fichier JSON à récupérer.
     * @return mixed Le contenu décodé du fichier JSON, ou false en cas d'erreur.
     */
    public static function getJson($url)
    {
        // Récupère le contenu du fichier JSON depuis l'URL
        $jsonContent = file_get_contents($url);

        if ($jsonContent === false) {
            // Gérer l'erreur si file_get_contents échoue
            return false;
        }
        return json_decode($jsonContent, false);
    }
}
