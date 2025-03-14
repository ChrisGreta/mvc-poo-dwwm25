<div class="container">
    <div class="row justify-content-center">
        <?php foreach ($menObjects as $man): ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <img src="<?= $man->url_image ?>" class="card-img-top" alt="<?= $man->prenom ?> <?= $man->nom ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $man->prenom ?> <?= $man->nom ?></h5>
                        <p class="card-text"><?= $man->description ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Naissance :</strong> <?= $man->formatDate($man->date_naissance) ?></li>
                        <?php if ($man->date_deces): ?>
                            <li class="list-group-item"><strong>Décès :</strong> <?= $man->formatDate($man->date_deces) ?></li>
                        <?php endif; ?>
                        <li class="list-group-item">
                            <strong>Âge :</strong>
                            <?php if ($man->date_deces): ?>
                                <?= $man->calculateAge($man->date_naissance, $man->date_deces) ?> (à la date du décès)
                            <?php else: ?>
                                <?= $man->calculateAge($man->date_naissance) ?> (actuel)
                            <?php endif; ?>
                        </li>
                        <li class="list-group-item"><strong>Domaine :</strong> <?= $man->domaine ?></li>
                        <li class="list-group-item">
                            <strong>Faits marquants :</strong>
                            <ul>
                                <?php foreach ($man->faits_historiques_3 as $fait): ?>
                                    <li><?= $fait ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="man.php?id=<?= $man->id ?>" class="card-link">En savoir plus</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
