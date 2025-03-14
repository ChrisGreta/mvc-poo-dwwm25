<h2>Bienvenue ! 😁</h2>
<div class="container">
    <!-- Boutons de sélection -->
    <div class="row mb-4">
        <div class="col text-center">
            <a href="index.php?route=home&type=women" class="btn btn-primary">Voir les femmes célèbres</a>
            <a href="index.php?route=home&type=men" class="btn btn-secondary">Voir les hommes célèbres</a>
        </div>
    </div>

    <!-- Liste des personnes célèbres -->
    <div class="row">
        <?php
        $index = 0;
        // Parcours des personnes célèbres
        foreach ($personnesCelebres as $personne) {
        ?>
            <div class="col-md-4 d-flex flex-column justify-content-start">
                <div class="card" style="width: 18rem;">
                    <!-- Image de la personne -->
                    <img src="<?= $personne->url_image ?>" class="card-img-top" alt="Photo de <?= $personne->prenom ?> <?= $personne->nom ?>">

                    <div class="card-body">
                        <!-- Nom et prénom -->
                        <h5 class="card-title"><?= $personne->prenom ?> <?= $personne->nom ?></h5>
                        <!-- Description -->
                        <p class="card-text"><?= $personne->description ?></p>
                    </div>

                    <ul class="list-group list-group-flush">
                        <!-- Date de naissance -->
                        <li class="list-group-item"><?= $personne->date_naissance ?></li>
                        <!-- Domaine -->
                        <li class="list-group-item"><?= $personne->domaine ?></li>
                    </ul>

                    <div class="card-body">
                        <!-- Lien "En savoir plus" -->
                        <a href="index.php?route=<?= $type === 'women' ? 'woman' : 'man' ?>&id=<?= $index; ?>" class="card-link">En savoir plus...</a>
                    </div>
                </div>
            </div>
        <?php
            $index++;
        }
        ?>
    </div> <!-- Row -->
</div> <!-- Container -->