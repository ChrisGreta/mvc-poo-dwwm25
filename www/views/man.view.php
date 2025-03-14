<div class="container mt-5">
    <div class="row">
        <div class="col">
            <!-- Affiche l'image de l'homme -->
            <img src="<?= $man['url_image']; ?>" class="img-fluid rounded" alt="Photo de <?= $man['prenom'] . ' ' . $man['nom']; ?>">
        </div>
        <div class="col-md-8">
            <!-- Affiche le nom et le prénom -->
            <h1><?= $man['prenom']; ?> <?= $man['nom']; ?></h1>

            <!-- Affiche la date de naissance -->
            <p><strong>Date de naissance :</strong> <?= $man['date_naissance']; ?></p>

            <!-- Affiche la date de décès si elle existe -->
            <?php if ($man['date_deces']) : ?>
                <p><strong>Date de décès :</strong> <?= $man['date_deces']; ?></p>
            <?php endif; ?>

            <!-- Affiche le domaine d'activité -->
            <p><strong>Domaine :</strong> <?= $man['domaine']; ?></p>

            <!-- Affiche la description -->
            <p><?= $man['description']; ?></p>

            <!-- Affiche les faits historiques -->
            <h3>Faits historiques :</h3>
            <ul>
                <?php foreach ($man['faits_historiques_3'] as $fait) : ?>
                    <li><?= $fait; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>