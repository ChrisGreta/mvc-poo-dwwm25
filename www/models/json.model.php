<?php
class Json
{
    private $url;
    const DEFAULT_JSON = "_include/json/women.json";

    public function __construct($url = self::DEFAULT_JSON)
    {
        $this->url = $url;
    }

    /**
     * Récupère et décode un fichier JSON depuis une URL.
     *
     * @param bool $assoc Si true, retourne un tableau associatif. Sinon, retourne un objet.
     * @return mixed Le contenu décodé du fichier JSON, ou false en cas d'erreur.
     */
    public function getJsonContent($assoc = true)
    {
        $jsonContent = file_get_contents($this->url);

        if ($jsonContent === false) {
            return false;
        }

        $decodedContent = json_decode($jsonContent, $assoc);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return false;
        }

        return $decodedContent;
    }

    /**
     * Récupère une femme célèbre par son index.
     *
     * @param int $index L'index de la femme dans le tableau JSON. (L'ID demandé)
     * @return array|null Retourne les informations de la femme ou null si non trouvée.
     */


    public function getWomanById($index)
    {
        $jsonContent = $this->getJsonContent(true); // Récupère le contenu JSON sous forme de tableau associatif

        if ($jsonContent === false || !isset($jsonContent['femmes_celebres'][$index])) {
            return null; // Retourne null si l'index n'existe pas (l'id demandé par ex)
        }

        return $jsonContent['femmes_celebres'][$index]; // Retourne les informations de la femme
    }
}
