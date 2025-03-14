<?php
class Json
{
    // Constantes pour les chemins des fichiers JSON
    const JSON_WOMEN = "_include/json/women.json";
    const JSON_MEN = "_include/json/men.json";

    private $url;

    /**
     * Constructeur de la classe Json.
     *
     * @param string $type Le type de fichier JSON à utiliser ("women" ou "men").
     */
    public function __construct($type = "women")
    {
        // Détermine le fichier JSON en fonction du type
        switch ($type) {
            case "women":
                $this->url = self::JSON_WOMEN;
                break;
            case "men":
                $this->url = self::JSON_MEN;
                break;
            default:
                throw new InvalidArgumentException("Type de fichier JSON non valide. Utilisez 'women' ou 'men'.");
        }
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
     * @param int $index L'index de la femme dans le tableau JSON.
     * @return array|null Retourne les informations de la femme ou null si non trouvée.
     */
    public function getWomanById($index)
    {
        // Utilise le fichier JSON des femmes
        $this->url = self::JSON_WOMEN;
        $jsonContent = $this->getJsonContent(true);

        if ($jsonContent === false || !isset($jsonContent['femmes_celebres'][$index])) {
            return null; // Retourne null si l'index n'existe pas
        }

        return $jsonContent['femmes_celebres'][$index]; // Retourne les informations de la femme
    }

    /**
     * Récupère un homme célèbre par son index.
     *
     * @param int $index L'index de l'homme dans le tableau JSON.
     * @return array|null Retourne les informations de l'homme ou null si non trouvé.
     */
    public function getManById($index)
    {
        // Utilise le fichier JSON des hommes
        $this->url = self::JSON_MEN;
        $jsonContent = $this->getJsonContent(true);

        if ($jsonContent === false || !isset($jsonContent['hommes_celebres'][$index])) {
            return null; // Retourne null si l'index n'existe pas
        }

        return $jsonContent['hommes_celebres'][$index]; // Retourne les informations de l'homme
    }
}
