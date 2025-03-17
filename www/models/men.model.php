<?php

echo "nadima";
    class men {
        public $nom;
        public $prenom;
        public $date_naissance;
        public $description;
        public $image;
        public $domaine;
        public $date_deces;
        public $faits_historiques;

    
        public function __construct($nom, $prenom, $date_naissance, $description, $image, $domaine, $date_deces, $faits_historiques) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->date_naissance = $date_naissance;
            $this->description = $description;
            $this->image = $image;
            $this->domaine = $domaine;
            $this->date_deces = $date_deces;
            $this->faits_historiques = $faits_historiques;
        }


        public function calculerAgeDeces() {
            $dateDeces = new DateTime($this->date_deces);
            $dateNaissance = new DateTime($this->date_naissance);
            $age = $dateNaissance->diff($dateDeces);
            return $age->y;
        }


        public function AfficherFaitsHistoriques() {
            $faits = "";
            foreach ($this->faits_historiques as $fait) {
                $faits .= "<li>$fait</li>";
            }
            return $faits;
        }

    }