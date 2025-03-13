<h2>Bienvenue ! 😁</h2>

<?php

    // Exemple d'utilisation
    foreach ($femmesCelebres as $femme) {
        ?>

        <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $femme['prenom']?> <?= $femme['nom']?></h5>
            <p class="card-text"><?= $femme['description']?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $femme['date_naissance']?></li>
            <li class="list-group-item"><?= $femme['domaine']?></li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">En savoir plus...</a>
        </div>
        </div>


        <?php
    }

?>