<?php
require_once 'celebrity.model.php';

class Men extends Celebrity {
    public $mustache;

    public function __construct($nom, $prenom, $date_naissance, $description, $url_image, $domaine, $date_deces, $faits_historiques_3, $mustache) {
        parent::__construct($nom, $prenom, $description, $url_image, $date_naissance, $date_deces, $domaine, $faits_historiques_3);
        $this->mustache = $mustache;
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