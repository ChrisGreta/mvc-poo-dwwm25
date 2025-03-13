<div class="container my-5">

    <div class="row mt-4">
        <div class="col-md-4 text-center">
            <img src="<?= ($woman->image) ?>" 
                alt="Portrait de <?= ($woman->prenom) ?> <?= ($woman->nom) ?>" 
                class="img-fluid rounded shadow">
        </div>

        <div class="col-md-8">
            <h2 class="my-4"><?= $woman->getNomPrenom() ?></h2>
            <p><strong>Date de naissance :</strong> <?= ($woman->date_naissance) ?></p>

            <?php if (!empty($woman->date_deces)) : ?>
                <p><strong>Date de décès :</strong> <?= ($woman->date_deces) ?></p>
            <?php endif; ?>

            <p><strong>Âge :</strong> <?= $woman->getAge() ?></p>
            
            <p><strong>Domaine :</strong> <?= ($woman->domaine) ?></p>

            <div class="mt-3">
                <p><?= ($woman->description) ?></p>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h3>Faits marquants :</h3>
            <ul class="list-group">
                <?php foreach ($woman->faits as $fait) : ?>
                    <li class="list-group-item"><?= ($fait) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div> 