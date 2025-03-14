<?php
class Men
{
    public $nom;
    public $prenom;
    public $date_naissance;
    public $date_deces;
    public $description;
    public $url_image;
    public $domaine;
    public $faits_historiques_3;

    public function __construct($nom, $prenom, $description, $url_image, $date_naissance, $date_deces, $domaine, $faits_historiques_3)
    {
        $this->nom             = $nom;
        $this->prenom          = $prenom;
        $this->date_naissance  = $date_naissance;
        $this->date_deces      = $date_deces;
        $this->description     = $description;
        $this->url_image       = $url_image;
        $this->domaine         = $domaine;
        $this->faits_historiques_3    = $faits_historiques_3;
    }



    public function formatDate($date)
    {
        return date('d-m-Y', strtotime($date));
    }


    public function getNomPrenom()
    {
        return "Nom Prénom: " . $this->nom . " " . $this->prenom;
    }


    // Méthode publique pour calculer l'âge
    public function calculateAge($birthDate = null, $deathDate = null)
    {
        // Si les dates ne sont pas passées en paramètres, on utilise celles de l'objet
        $birthDate = $birthDate ? new DateTime($birthDate) : new DateTime($this->date_naissance);
        $currentDate = new DateTime(); // Date actuelle

        // Si la date de décès est fournie, on l'utilise
        if ($deathDate) {
            $deathDate = new DateTime($deathDate); // Crée un objet DateTime pour la date de décès
            $interval = $deathDate->diff($birthDate); // Calcule la différence entre la date de décès et la date de naissance
        } else {
            // Sinon, on calcule l'âge jusqu'à aujourd'hui
            $interval = $currentDate->diff($birthDate); // Calcule la différence entre la date actuelle et la date de naissance
        }

        return $interval->y; // Retourne l'âge en années
    }

    // Méthode pour récupérer l'âge, sans paramètre
    public function getAge()
    {
        return $this->calculateAge(); // Appelle la méthode calculateAge sans paramètre pour l'objet actuel
    }
}
