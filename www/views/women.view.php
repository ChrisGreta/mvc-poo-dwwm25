<div class="container my-5">
    <div class="row g-4">
        <?php if (isset($index) && $index !== null): ?>
            <?php $femme = $womenCelebres[$index]; ?>
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="<?php echo $femme['url_image']; ?>" class="img-fluid rounded mb-3" style="max-width: 200px;" alt="<?php echo $femme['nom']; ?>">
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
        <?php else: ?>
            <?php $index = 0; ?>
            <?php foreach ($womenCelebres as $femme): ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?= $femme['url_image'] ?>" class="card-img-top" alt="<?= $femme['nom'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $femme['prenom'] ?> <?= $femme['nom'] ?></h5>
                            <p class="card-text"><?= $femme['description'] ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Date of Birth: <?= $femme['date_naissance'] ?></li>
                            <li class="list-group-item">Domain: <?= $femme['domaine'] ?></li>
                        </ul>
                        <div class="card-body text-center">
                            <a href="index.php?route=readWomen&index=<?= $index; ?>" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <?php $index++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>