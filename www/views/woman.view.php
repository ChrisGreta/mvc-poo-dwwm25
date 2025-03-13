<?php
if (isset($femme)) {
    ?>
    <div class="card-detail">
        <img src="include/images/<?= strtolower(str_replace(' ', '-', $femme->getNomPrenom())) ?>.jpg" alt="Image de <?= $femme->getNomPrenom() ?>">
        <div class="card-content">
            <h3><?= $femme->getNomPrenom() ?></h3>
            <p><strong>Domaine :</strong> <?= $femme->getDomaine() ?></p>
            <p><strong>Date de naissance :</strong> <?= $femme->getDateNaissance() ?></p>
            <p><strong>Date de décès :</strong> <?= $femme->getDateDeces() ?></p>
            <p><strong>Âge au moment du décès :</strong> <?= $femme->calculerAgeMort() ?> ans</p>
            <p><?= $femme->getDescription() ?></p>
            <h4>Faits historiques :</h4>
            <ul>
                <?php foreach ($femme->getFaitsHistoriques() as $fait) { ?>
                    <li><?= $fait ?></li>
                <?php } ?>
            </ul>
            <a href="index.php?route=home" class="btn">Retour à l'accueil</a>
        </div>
    </div>
    <?php
} else {
    echo "<p>Aucune information disponible.</p>";
}
?>