<?php
class Woman {
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $dateDeces;
    private $description;
    private $domaine;
    private $faitsHistoriques;

    public function __construct($nom, $prenom, $dateNaissance, $dateDeces, $description, $domaine, $faitsHistoriques) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->dateDeces = $dateDeces;
        $this->description = $description;
        $this->domaine = $domaine;
        $this->faitsHistoriques = $faitsHistoriques;
    }

    public function getNomPrenom() {
        return $this->prenom . " " . $this->nom;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function getDateDeces() {
        return $this->dateDeces;
    }

    public function getDomaine() {
        return $this->domaine;
    }

    public function getFaitsHistoriques() {
        return $this->faitsHistoriques;
    }

    /**
     * Convertit une date en français (ex: "7 novembre 1867") en un objet DateTime.
     *
     * @param string $date La date en français.
     * @return DateTime|null Retourne un objet DateTime ou null si la conversion échoue.
     */
    private function convertirDateFrancaisVersDateTime($date) {
        $formatter = new IntlDateFormatter(
            'fr_FR', // Locale française
            IntlDateFormatter::FULL, // Format de date complet
            IntlDateFormatter::NONE, // Pas de temps
            null, // Timezone par défaut
            null, // Calendar type (Grégorien par défaut)
            'd MMMM yyyy' // Format de la date en français
        );

        // Convertir la chaîne en timestamp
        $timestamp = $formatter->parse($date);
        if ($timestamp === false) {
            return null;
        }

        // Créer un objet DateTime à partir du timestamp
        return DateTime::createFromFormat('U', $timestamp);
    }

    /**
     * Calcule l'âge au moment du décès.
     *
     * @return int|null Retourne l'âge en années ou null si la conversion de date échoue.
     */
    public function calculerAgeMort() {
        $naissance = $this->convertirDateFrancaisVersDateTime($this->dateNaissance);
        $deces = $this->convertirDateFrancaisVersDateTime($this->dateDeces);

        if ($naissance === null || $deces === null) {
            return null; // Retourne null si la conversion de date échoue
        }

        $interval = $naissance->diff($deces);
        return $interval->y; // Retourne l'âge en années
    }

    public static function getAll() {
        return [
            new Woman(
                "Curie", 
                "Marie", 
                "7 novembre 1867", 
                "4 juillet 1934", 
                "Pionnière en physique et chimie.", 
                "Physique et chimie", 
                [
                    "Première femme à recevoir un prix Nobel : Marie Curie a été la première femme à recevoir un prix Nobel en 1903, partagé avec son mari Pierre Curie et Henri Becquerel, pour leurs recherches sur les radiations.",
                    "Double lauréate du prix Nobel : Elle est la seule personne à avoir reçu deux prix Nobel dans deux domaines scientifiques différents : en physique en 1903 et en chimie en 1911, pour la découverte du radium et du polonium.",
                    "Contribution à la médecine pendant la Première Guerre mondiale : Marie Curie a joué un rôle crucial en développant des unités de radiologie mobiles pour aider à soigner les soldats blessés pendant la Première Guerre mondiale, ce qui a marqué le début de l'utilisation des rayons X en médecine de guerre."
                ]
            ),
            new Woman(
                "Angelou", 
                "Maya", 
                "4 avril 1928", 
                "28 mai 2014", 
                "Écrivaine, poétesse et militante américaine.", 
                "Littérature", 
                [
                    "Autobiographie emblématique : Maya Angelou est surtout connue pour son autobiographie 'Je sais pourquoi chante l'oiseau en cage', qui raconte son enfance et son adolescence marquées par le racisme et les traumatismes.",
                    "Militante des droits civiques : Elle a travaillé aux côtés de Martin Luther King Jr. et Malcolm X dans la lutte pour les droits civiques aux États-Unis.",
                    "Poétesse renommée : Elle a écrit et récité des poèmes pour des événements historiques, comme l'investiture du président Bill Clinton en 1993."
                ]
            ),
            // Ajoutez d'autres femmes célèbres ici...
        ];
    }
}
?>