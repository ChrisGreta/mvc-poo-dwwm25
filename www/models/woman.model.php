<?php
class Woman
{
    public $nom;
    public $prenom;
    public $date_naissance;
    public $date_deces;
    public $description;
    public $image;
    public $domaine;
    public $faits_historiques; // Tableau contenant 3 faits historiques

    public function __construct($nom, $prenom, $date_naissance, $date_deces, $description, $image, $faits_historiques, $domaine = "informatique")
    {
        $this->nom                  = $nom;
        $this->prenom               = $prenom;
        $this->date_naissance       = $date_naissance;
        $this->date_deces           = $date_deces;
        $this->description          = $description;
        $this->image                = $image;
        $this->faits_historiques    = $faits_historiques;
        $this->domaine              = $domaine;
    }

    public function getNomPrenom()
    {
        return "Nom Prénom: " . $this->nom . " " . $this->prenom;
    }

    public function getAge()
    {

        $dateDeces = $this->date_deces ?? date("Y-m-d");


        $ageDece = date_diff(date_create($this->date_naissance), date_create($dateDeces))->y;

        return $ageDece;
    }
}

/* TODO :

            ==> ajouter un attribut 
            
Date de décès
Tableau contenant 3 faits historiques

                ==> Première femme à recevoir un prix Nobel : Marie Curie a été la première femme à recevoir un prix Nobel en 1903, partagé avec son mari Pierre Curie et Henri Becquerel, pour leurs recherches sur les radiations.
                ==>Double lauréate du prix Nobel : Elle est la seule personne à avoir reçu deux prix Nobel dans deux domaines scientifiques différents : en physique en 1903 et en chimie en 1911, pour la découverte du radium et du polonium.
                ==> Contribution à la médecine pendant la Première Guerre mondiale : Marie Curie a joué un rôle crucial en développant des unités de radiologie mobiles pour aider à soigner les soldats blessés pendant la Première Guerre mondiale, ce qui a marqué le début de l'utilisation des rayons X en médecine de guerre.

            ==> Ajouter une méthode pour calculer l'âge à sa mort


            Afficher ces informations dans la vue woman.view.php
        */