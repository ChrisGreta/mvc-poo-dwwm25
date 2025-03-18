<?php
require_once 'celebrity.model.php';

class Women extends Celebrity {
    public $color;

    public function __construct($nom, $prenom, $date_naissance, $description, $url_image, $domaine, $date_deces, $faits_historiques_3, $color) {
        parent::__construct($nom, $prenom, $description, $url_image, $date_naissance, $date_deces, $domaine, $faits_historiques_3);
        $this->color = $color;
    }

    public static function getWomen() {
        $filePath = __DIR__ . '/../include/json/women.json';
        if (!file_exists($filePath)) {
            throw new Exception("File not found: $filePath");
        }

        $json = file_get_contents($filePath);
        if ($json === false) {
            throw new Exception("Failed to read file: $filePath");
        }

        $data = json_decode($json, true);
        if ($data === null) {
            throw new Exception("Invalid JSON data in file: $filePath");
        }

        $women = [];
        foreach ($data['femmes_celebres'] as $item) {
            $women[] = new Women(
                $item['nom'],
                $item['prenom'],
                $item['date_naissance'],
                $item['description'],
                $item['url_image'],
                $item['domaine'],
                $item['date_deces'],
                $item['faits_historiques_3'],
                isset($item['color']) ? $item['color'] : '#ffffff' // Default color if not set
            );
        }
        return $women;
    }

    public function calculerAgeDeces() {
        $dateDeces = new DateTime($this->date_deces);
        $dateNaissance = new DateTime($this->date_naissance);
        $age = $dateNaissance->diff($dateDeces);
        return $age->y;
    }

    public function AfficherFaitsHistoriques() {
        $faits = "";
        foreach ($this->faits_historiques_3 as $fait) {
            $faits .= "<li>$fait</li>";
        }
        return $faits;
    }
}
?>