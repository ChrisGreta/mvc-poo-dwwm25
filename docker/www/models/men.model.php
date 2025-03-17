<?php
    class men{
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
