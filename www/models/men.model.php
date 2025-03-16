<?php
require_once 'Celebrity.model.php';

class Men extends Celebrity
{
    
    public $moustache;  // Ajout de l'attribut moustache
    public $url_wikipedia;

    // Ajout du paramètre moustache dans le constructeur
    public function __construct($nom, $prenom, $description, $url_image, $date_naissance, $date_deces, $domaine, $faits_historiques_3, $moustache, $url_wikipedia)
    {
        // Appel du constructeur parent pour initialiser les autres attributs
        parent::__construct($nom, $prenom, $description, $url_image, $date_naissance, $date_deces, $domaine, $faits_historiques_3, $url_wikipedia);
        $this->moustache = $moustache;  // Initialisation de l'attribut moustache
    }

    // Méthode pour obtenir l'état de la moustache
    public function hasMoustache()
    {
        return $this->moustache ? 'Oui' : 'Non';
    }
}
