<div class="container">
    <div class="row justify-content-center">
        <?php foreach ($women as $woman): ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <img src="<?= $woman->url_image ?>" class="card-img-top" alt="Portrait de <?= $woman->prenom ?> <?= $woman->nom ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $woman->prenom ?> <?= $woman->nom ?></h5>
                        <p class="card-text"><?= $woman->description ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Naissance :</strong> <?= $woman->formatDate($woman->date_naissance) ?></li>
                        <?php if ($woman->date_deces): ?>
                            <li class="list-group-item"><strong>Décès :</strong> <?= $woman->formatDate($woman->date_deces) ?>
                            </li>
                        <?php endif; ?>
                        <li class="list-group-item">
                            <strong>Âge :</strong>
                            <?php if ($woman->date_deces): ?>
                                <?= $woman->calculateAge($woman->date_naissance, $woman->date_deces) ?> (à la date du décès)
                            <?php else: ?>
                                <?= $woman->calculateAge($woman->date_naissance) ?> (actuel)
                            <?php endif; ?>
                        </li>
                        <li class="list-group-item"><strong>Domaine :</strong> <?= $woman->domaine ?></li>
                        <li class="list-group-item">
                            <strong>Faits marquants :</strong>
                            <ul>
                                <?php foreach ($woman->faits_historiques_3 as $fait): ?>
                                    <li><?= $fait ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="woman.php?id=<?= $woman->id ?>" class="card-link">En savoir plus</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
