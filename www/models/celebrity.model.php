<?php

class Celebrity {
    public $nom;
    public $prenom;
    public $description;
    public $url_image;
    public $date_naissance;
    public $date_deces;
    public $domaine;
    public $faits_historiques_3;

    public function __construct($nom, $prenom, $description, $url_image, $date_naissance, $date_deces, $domaine, $faits_historiques_3) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->description = $description;
        $this->url_image = $url_image;
        $this->date_naissance = $date_naissance;
        $this->date_deces = $date_deces;
        $this->domaine = $domaine;
        $this->faits_historiques_3 = $faits_historiques_3;
    }
}
?>