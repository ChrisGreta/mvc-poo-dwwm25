<?php
class Celebrity
{
    public $nom;
    public $prenom;
    public $date_naissance;
    public $date_deces;
    public $description;
    public $url_image;
    public $domaine;
    public $faits_historiques_3;
    public $url_wikipedia;

    public function __construct($nom, $prenom, $description, $url_image, $date_naissance, $date_deces, $domaine, $faits_historiques_3, $url_wikipedia)
    {
        $this->nom                = $nom;
        $this->prenom             = $prenom;
        $this->date_naissance     = $date_naissance;
        $this->date_deces         = $date_deces;
        $this->description        = $description;
        $this->url_image          = $url_image;
        $this->domaine            = $domaine;
        $this->faits_historiques_3 = $faits_historiques_3;
        $this->url_wikipedia      = $url_wikipedia;
    }

    public function formatDate($date)
    {
        return date('d-m-Y', strtotime($date));
    }

    public function getUrlWikipedia()
    {
        return $this->url_wikipedia;
    }

    public function getNomPrenom()
    {
        return "Nom Prénom: " . $this->nom . " " . $this->prenom;
    }

    public function calculateAge($birthDate = null, $deathDate = null)
    {
        $birthDate = $birthDate ? new DateTime($birthDate) : new DateTime($this->date_naissance);
        $currentDate = new DateTime();

        if ($deathDate) {
            $deathDate = new DateTime($deathDate);
            $interval = $deathDate->diff($birthDate);
        } else {
            $interval = $currentDate->diff($birthDate);
        }

        return $interval->y;
    }

    public function getAge()
    {
        return $this->calculateAge();
    }
}
