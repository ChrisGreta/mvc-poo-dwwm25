<div class="container mt-5">
    <div class="row">
        <div class="col">
            <img src=" <?= $woman->image; ?>" class="img-fluid rounded" alt="Photo de la célébrité">
        </div>
        <div class="col-md-8">
            <h1><?= $woman->nom; ?> <?= $woman->prenom; ?></h1>
                    <p><strong>Date de naissance :</strong><?= $woman->date_naissance; ?></p>
                    <p><strong>Domaine :</strong> <?= $woman->domaine; ?></p>
                    <p><?= $woman->description; ?></p>
        </div>
    </div>
</div>