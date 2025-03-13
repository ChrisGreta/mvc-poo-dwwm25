<?php
    class Woman {
        public $nom;
        public $prenom;
        public $date_naissance;
        public $date_deces;
        public $description;
        public $image;
        public $domaine;
        public $faits;

        public function __construct($nom, $prenom, $description, $image , $date_naissance, $date_deces, $domaine, $faits)
        {
            $this->nom               = $nom;
            $this->prenom            = $prenom;
            $this->date_naissance    = $date_naissance;
            $this->date_deces        = $date_deces;
            $this->description       = $description;
            $this->image             = $image;
            $this->domaine           = $domaine;
            $this->faits             = $faits;
        }

        public function getNomPrenom(){
            return "Nom Prénom: ".$this->nom." ".$this->prenom;
        }

        public function getAge() {
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


    function getWoman(){
    $womenCelebs = [
        [
            "nom" => "Curie",
            "prénom" => "Marie",
            "date_naissance" => "1867-11-07",
            "description" => "Marie Curie était une physicienne et chimiste polonaise naturalisée française. Elle est surtout connue pour ses travaux pionniers sur la radioactivité. Elle est la première femme à avoir reçu un prix Nobel, la première personne et la seule femme à l'avoir reçu deux fois, et la seule personne à l'avoir reçu dans deux domaines scientifiques différents (physique et chimie).",
            "image" => "https://www.monuments-nationaux.fr/var/cmn_inter/storage/images/_aliases/image_text_webp/3/2/8/6/120766823-1-fre-FR/cb6ef8c49c53-portrait-maria-sklodowska-curie-1903-c-cmn.webp.webp",
            "domaine" => "Science"
        ],
        [
            "nom" => "Hopper",
            "prénom" => "Grace",
            "date_naissance" => "1906-12-09",
            "description" => "Grace Hopper était une informaticienne et militaire américaine. Elle est surtout connue pour avoir développé le premier compilateur pour un langage de programmation. Elle a également popularisé l'idée de domain-specific languages, ce qui a conduit au développement de COBOL, l'un des premiers langages de programmation de haut niveau.",
            "image" => "https://www.silkhom.com/wp-content/uploads/2024/10/Grace-Hopper.jpg",
            "domaine" => "Informatique"
        ],
        [
            "nom" => "Angelou",
            "prénom" => "Maya",
            "date_naissance" => "1928-04-04",
            "description" => "Maya Angelou était une poétesse, écrivaine et militante des droits civiques américaine. Elle est surtout connue pour son autobiographie 'Je sais pourquoi chante l\'oiseau en cage', qui explore les thèmes du racisme et de l'identité. Elle a reçu plus de 50 doctorats honorifiques et a été récompensée par la médaille présidentielle de la liberté.",
            "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPgkQri-k_WsnaHYFniUjvfCIMhiu6WxcX6wBMEkNRRYi484dx",
            "domaine" => "Littérature"
        ],
        [
            "nom" => "Williams",
            "prénom" => "Serena",
            "date_naissance" => "1981-09-26",
            "description" => "Serena Williams est une joueuse de tennis américaine. Elle est considérée comme l'une des plus grandes joueuses de tous les temps, ayant remporté 23 titres du Grand Chelem en simple. Elle a également été classée numéro un mondiale à plusieurs reprises et a remporté quatre médailles d'or olympiques.",
            "image" => "https://www.leparisien.fr/resizer/DxyUPs02X4Ioao7jmPo1nqJ3axw=/932x582/cloudfront-eu-central-1.images.arcpublishing.com/leparisien/FS2OPEZNBNAJ5IWBWYGRKWILUQ.jpg",
            "domaine" => "Sports"
        ]
    ];
    return $womenCelebs;
}