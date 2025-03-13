<?php
class Woman
{

    public $id;
    public $nom;
    public $prenom;
    public $date_naissance;
    public $date_deces;
    public $description;
    public $faits_historiques_3 = array();
    public $image;
    public $domaine;

    public function __construct($id, $nom, $prenom, $date_naissance, $date_deces, $description, $faits_historiques_3, $image, $domaine = "informatique")
    {
        $this->id                  = $id;
        $this->nom                 = $nom;
        $this->prenom              = $prenom;
        $this->date_naissance      = $date_naissance;
        $this->date_deces          = $date_deces;
        $this->description         = $description;
        $this->faits_historiques_3 = $faits_historiques_3;
        $this->image               = $image;
        $this->domaine             = $domaine;
    }

    public function getNomPrenom()
    {
        return "Nom Prénom:" . $this->nom . " " . $this->prenom;
    }

    public function getAge()
    {
        $naissance = new DateTime($this->date_naissance);

        if (!empty($this->date_deces)) {
            $deces = new DateTime($this->date_deces);
            $age = $naissance->diff($deces)->y;
            return "$age ans (au décès)";
        } else {
            $now = new DateTime();
            $age = $naissance->diff($now)->y;
            return "$age ans";
        }
    }
}
