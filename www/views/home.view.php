<h2>Bienvenue ! 😁</h2>
<div class="container">
    <div class="row">
        <?php

        $index = 0;
        // Parcours des femmes célèbres
        foreach ($femmesCelebres as $femme) {
        ?>
            <div class="col-md-4 d-flex flex-column  justify-content-start">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $femme->url_image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $femme->prenom ?> <?= $femme->nom ?></h5>
                        <p class="card-text"><?= $femme->description ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?= $femme->date_naissance ?></li>
                        <li class="list-group-item"><?= $femme->domaine ?></li>
                    </ul>
                    <div class="card-body">
                        <a href="index.php?route=read&id=<?= $index; ?>" class="card-link">En savoir plus...</a>
                    </div>
                </div>
            </diV>
        <?php
            $index++;
        }
        ?>
    </div> <!-- Row -->
</div> <!-- Container -->