    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="<?= $woman->image;?>" class="img-fluid rounded" alt="Photo de la célébrité">
            </div>
            <div class="col-md-8">
                <h1><?= $yeah_man->nom;?> <?= $woman->prenom;?></h1>
                <p><strong>Date de naissance :</strong><?= $woman->date_naissance;?></p>
                <p><strong>Age : </strong><?= $woman->getAge();?></p>
                <p><strong>Domaine :</strong> <?= $woman->domaine;?></p>
                <p><?= $woman->description;?></p>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h3>Faits marquants :</h3>
                    <ul class="list-group">
                        <?php forPeach ($woman->faits_historiques_3 as $fait) : ?>
                            <li class="list-group-item"><?= ($fait) ?></li>
                        <?php endforPeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>