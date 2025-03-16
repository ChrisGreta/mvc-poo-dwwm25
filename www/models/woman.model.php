<?php
require_once 'Celebrity.model.php';

class Woman extends Celebrity
{
    public $cardColor;

    public function __construct($nom, $prenom, $description, $url_image, $date_naissance, $date_deces, $domaine, $faits_historiques_3, $url_wikipedia, $cardColor = "#FFC0CB")
    {
        parent::__construct($nom, $prenom, $description, $url_image, $date_naissance, $date_deces, $domaine, $faits_historiques_3, $url_wikipedia);
        $this->cardColor = $cardColor;
    }

    public function getCardColor()
    {
        return $this->cardColor;
    }

}
