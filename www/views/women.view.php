<?php if (isset($index) && $index !== null): ?>
    <?php
    $femme = $womenCelebres[$index];
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="width: 100%; margin-bottom: 20px;">
                    <img src="<?php echo $femme['url_image']; ?>" class="card-img-top" alt="<?php echo $femme['nom']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $femme['prenom'] . ' ' . $femme['nom']; ?></h5>
                        <p class="card-text"><?php echo $femme['description']; ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Date of Birth: <?php echo $femme['date_naissance']; ?></li>
                        <li class="list-group-item">Date of Death: <?php echo $femme['date_deces']; ?></li>
                        <li class="list-group-item">Domain: <?php echo $femme['domaine']; ?></li>
                    </ul>
                    <div class="card-body">
                        <h6>Historical Facts:</h6>
                        <ul>
                            <?php foreach ($femme['faits_historiques_3'] as $fait): ?>
                                <li><?php echo $fait; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- Row -->
    </div> <!-- Container -->
<?php else: ?>
    <div class="container">
        <div class="row">
            <?php
            $index = 0;
            // Parcours des femmes célèbres
            foreach ($womenCelebres as $femme) {
            ?>
                <div class="col-md-4 d-flex flex-column  justify-content-start">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $femme['url_image'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $femme['prenom'] ?> <?= $femme['nom'] ?></h5>
                            <p class="card-text"><?= $femme['description'] ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $femme['date_naissance'] ?></li>
                            <li class="list-group-item"><?= $femme['domaine'] ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="index.php?route=readWomen&index=<?= $index;?>" class="card-link">En savoir plus...</a>
                        </div>
                    </div>
                </div>
            <?php
                $index++;
            }
            ?>
        </div> <!-- Row -->
    </div> <!-- Container -->
<?php endif; ?>