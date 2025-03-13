<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="<?= $woman->image; ?>" class="img-fluid rounded" alt="Photo de la célébrité">
        </div>
        <div class="col-md-8">
            <h1><?= $woman->nom; ?> <?= $woman->prenom; ?></h1>
            <p><strong>Date de naissance :</strong> <?= $woman->date_naissance; ?></p>
            <p><strong>Date de décès :</strong> <?= $woman->date_deces ?? 'mort en 1934'; ?></p>
            <p><strong>Domaine :</strong> <?= $woman->domaine; ?></p>
            <p><?= $woman->description; ?></p>
            <p><strong>Âge au décès :</strong> <?= $woman->ageAtDeath() !== null ? $woman->ageAtDeath() . ' ans' : ''; ?></p>
            <h3>Faits historiques</h3>
            <ul>
                <?php foreach ($woman->historical_facts as $fact) : ?>
                    <li><?= $fact; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

