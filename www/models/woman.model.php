<?php
require_once 'json.model.php';

class Woman{
    public $nom;
    public $prenom;
    public $date_naissance;
    public $description;
    public $image;
    public $domaine;
    public $date_deces;
    public $faits_histroriques;

    /**
     * constructeur objet Women function
     *
     * @param string $nom
     * @param string $prenom
     * @param string $date_naissance
     * @param string $description
     * @param string $image
     * @param array $faits_histroriques
     * @param string $date_deces
     * @param string $domaine
     */

    public function __construct($nom, $prenom, $date_naissance, $description, $image, $faits_histroriques, $date_deces = 'vivant', $domaine="informatique"){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->description = $description;
        $this->image = $image;
        $this->domaine = $domaine;
        $this->date_deces = $date_deces;
        $this->faits_histroriques = $faits_histroriques;
    }

    public function getAgeDeces(){
        if($this->date_deces){
            $dateNaisArray = explode('-', $this->date_naissance);
            $dateDecesArray = explode('-', $this->date_deces);
            $age = intVal($dateDecesArray[0]) - intVal($dateNaisArray[0]).' ans';
        }else{
            $age = 'vivant';
        }
        return $age;
    }

    public static function getWomenById($id){
        $objJson = new Json('include/json/women.json');
        $datafemme = $objJson->getJsonContent(false);
        $femmesCelebres = $datafemme->femmes_celebres;
        $woman = new Woman($femmesCelebres[$id]->nom, $femmesCelebres[$id]->prenom, $femmesCelebres[$id]->date_naissance, $femmesCelebres[$id]->description, $femmesCelebres[$id]->url_image, $femmesCelebres[$id]->faits_historiques_3,$femmesCelebres[$id]->date_deces,$femmesCelebres[$id]->domaine);
        return $woman;
    }

    public static function getWomen(){
        $femmesCelebres = [
            [
                "nom" => "Curie",
                "prenom" => "Marie",
                "date_naissance" => "1867-11-07",
                "description" => "Marie Curie était une physicienne et chimiste polonaise naturalisée française. Elle est surtout connue pour ses travaux pionniers sur la radioactivité. Elle est la première femme à avoir reçu un prix Nobel, la première personne et la seule femme à l'avoir reçu deux fois, et la seule personne à l'avoir reçu dans deux domaines scientifiques différents (physique et chimie).",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/a/a9/Marie_Curie_c1920.jpg",
                "domaine" => "Science"
            ],
            [
                "nom" => "Hopper",
                "prenom" => "Grace",
                "date_naissance" => "1906-12-09",
                "description" => "Grace Hopper était une informaticienne et militaire américaine. Elle est surtout connue pour avoir développé le premier compilateur pour un langage de programmation. Elle a également popularisé l'idée de domain-specific languages, ce qui a conduit au développement de COBOL, l'un des premiers langages de programmation de haut niveau.",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/5/55/Grace_Hopper_and_UNIVAC.jpg",
                "domaine" => "Informatique"
            ],
            [
                "nom" => "Angelou",
                "prenom" => "Maya",
                "date_naissance" => "1928-04-04",
                "description" => "Maya Angelou était une poétesse, écrivaine et militante des droits civiques américaine. Elle est surtout connue pour son autobiographie 'Je sais pourquoi chante l\'oiseau en cage', qui explore les thèmes du racisme et de l'identité. Elle a reçu plus de 50 doctorats honorifiques et a été récompensée par la médaille présidentielle de la liberté.",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/b/b4/Maya_Angelou_NMAJH_2010.jpg",
                "domaine" => "Littérature"
            ],
            [
                "nom" => "Williams",
                "prenom" => "Serena",
                "date_naissance" => "1981-09-26",
                "description" => "Serena Williams est une joueuse de tennis américaine. Elle est considérée comme l'une des plus grandes joueuses de tous les temps, ayant remporté 23 titres du Grand Chelem en simple. Elle a également été classée numéro un mondiale à plusieurs reprises et a remporté quatre médailles d'or olympiques.",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/b/b3/Serena_Williams_2019_%28cropped%29.jpg",
                "domaine" => "Sports"
            ]
        ];
        return $femmesCelebres;
    }
}

