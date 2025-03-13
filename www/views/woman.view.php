<div class="container mt-5">
    <div class="row">
        <div class="col">
            <img src="<?= $woman->image; ?>" class="img-fluid rounded" alt="Photo de la célébrité">
        </div>
        <div class="col-md-8">
            <h1><?= $woman->nom; ?> <?= $woman->prenom; ?></h1>
            <p><strong>Date de naissance :</strong> <?= $woman->date_naissance; ?></p>
            <p><strong>Date de décès :</strong> <?= $woman->date_deces; ?> a l'age de <?= $woman->getAge(); ?> ans</p>
            <p><strong>Domaine :</strong> <?= $woman->domaine; ?></p>
            <p><?= $woman->description; ?></p>

            <h3>Faits historiques :</h3>
            <ul>
                <?php foreach ($woman->faits_historiques as $fait) : ?>
                    <li><?= $fait; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>