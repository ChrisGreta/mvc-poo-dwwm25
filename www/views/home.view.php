<div class="container">
    <div class="row justify-content-center">
        <?php foreach ($femmesCelebres as $femme): ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <img src="<?= $femme->url_image ?>" class="card-img-top" alt="<?= $femme->prenom ?> <?= $femme->nom ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $femme->prenom ?> <?= $femme->nom ?></h5>
                        <p class="card-text"><?= $femme->description ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Naissance :</strong> <?= $femme->date_naissance ?></li>
                        <?php if ($femme->date_deces): ?>
                            <li class="list-group-item"><strong>Décès :</strong> <?= $femme->date_deces ?></li>
                        <?php endif; ?>
                        <!-- <li class="list-group-item"><strong>Âge :</strong> <?= calculateAge($femme->date_naissance, $femme->date_deces) ?></li> -->
                        <li class="list-group-item">
                            <strong>Âge :</strong>
                            <?php if ($femme->date_deces): ?>
                                <?= calculateAge($femme->date_naissance, $femme->date_deces) ?> (à la date du décès)
                            <?php else: ?>
                                <?= calculateAge($femme->date_naissance) ?> (actuel)
                            <?php endif; ?>
                        </li>
                        <li class="list-group-item"><strong>Domaine :</strong> <?= $femme->domaine ?></li>
                        <li class="list-group-item">
                            <strong>Faits marquants :</strong>
                            <ul>
                                <?php foreach ($femme->faits_historiques_3 as $fait): ?>
                                    <li><?= $fait ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">En savoir plus</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>