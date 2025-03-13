<?php
    class woman{
        public $id;
        public $nom;
        public $prenom;
        public $date_naissance;
        public $date_deces;
        public $description;
        public $image;
        public $domaine;
        public $faits_historiques;
        

        public function __construct($id, $nom, $prenom, $date_naissance, $date_deces, $description, $image, $faits_historiques = [], $domaine = "informatique") {
            $this->id                 = $id; // ✅ Affectation correcte
            $this->nom                = $nom;
            $this->prenom             = $prenom;
            $this->date_naissance     = $date_naissance;
            $this->date_deces         = $date_deces;
            $this->description        = $description;
            $this->image              = $image;
            $this->domaine            = $domaine;
            $this->faits_historiques  = $faits_historiques; // ✅ Affectation correcte
        }
        public function calculerAgeDeces() {
            if ($this->date_deces) {
                $dateNaissance = new DateTime($this->date_naissance);
                $dateDeces = new DateTime($this->date_deces);
                $age = $dateNaissance->diff($dateDeces)->y;
                return $age . " ans";
            } else {
                return "Toujours en vie";
            }
        }
    public function getNomPrenom(){
        return "Nom Prénom".$this->prenom." ".$this->nom;
    }
}
    function getWomen(){
        $womenCelebs = [
            [
                "nom" => "Curie",
                "prenom" => "Marie",
                "date_naissance" => "1867-11-07",
                "date_deces" => "1954-04-15",
                "description" => "Marie Curie était une physicienne et chimiste polonaise naturalisée française. Elle est surtout connue pour ses travaux pionniers sur la radioactivité. Elle est la première femme à avoir reçu un prix Nobel, la première personne et la seule femme à l'avoir reçu deux fois, et la seule personne à l'avoir reçu dans deux domaines scientifiques différents (physique et chimie).",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/a/a9/Marie_Curie_c1920.jpg",
                "domaine" => "Science",
                "faits_historiques" => [
                    "Première femme à recevoir un prix Nobel en 1903.",
                    "Seule personne à avoir reçu deux prix Nobel dans deux domaines scientifiques différents.",
                    "A contribué au développement de la radiologie mobile pendant la Première Guerre mondiale."
                ]
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
        return $womenCelebs;
    }