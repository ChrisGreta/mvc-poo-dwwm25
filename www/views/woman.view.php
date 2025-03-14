<div class="container mt-5">
    <div class="row">
        <div class="col">
            <!-- Affiche l'image de la femme -->
            <img src="<?= $woman['url_image']; ?>" class="img-fluid rounded" alt="Photo de <?= $woman['prenom'] . ' ' . $woman['nom']; ?>">
        </div>
        <div class="col-md-8">
            <!-- Affiche le nom et le prénom -->
            <h1><?= $woman['prenom']; ?> <?= $woman['nom']; ?></h1>

            <!-- Affiche la date de naissance -->
            <p><strong>Date de naissance :</strong> <?= $woman['date_naissance']; ?></p>

            <!-- Affiche la date de décès si elle existe -->
            <?php if ($woman['date_deces']) : ?>
                <p><strong>Date de décès :</strong> <?= $woman['date_deces']; ?></p>
            <?php endif; ?>

            <!-- Affiche le domaine d'activité -->
            <p><strong>Domaine :</strong> <?= $woman['domaine']; ?></p>

            <!-- Affiche la description -->
            <p><?= $woman['description']; ?></p>

            <!-- Affiche les faits historiques -->
            <h3>Faits historiques :</h3>
            <ul>
                <?php foreach ($woman['faits_historiques_3'] as $fait) : ?>
                    <li><?= $fait; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>