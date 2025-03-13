<h2>Bienvenue ! 😁</h2>

<div class="card" style="width: 18rem;">
    <img src="<?= $woman->image ?>" class="card-img-top" alt="Image de <?= $woman->prenom ?> <?= $woman->nom ?>">
    <div class="card-body">
        <h5 class="card-title"><?= $woman->prenom ?> <?= $woman->nom ?></h5>
        <p class="card-text"><?= $woman->description ?></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?= $woman->date_naissance ?></li>
        <li class="list-group-item"><?= $woman->domaine ?></li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">En savoir plus...</a>
    </div>
</div>
