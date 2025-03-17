
<div class="container mt-5">
  <div class="row">
    <div class="col">
      <img src="<?= $man['url_image']; ?>" class="img-fluid rounded" alt="Photo de <?= $man['prenom'] . ' ' . $man['nom']; ?>">
    </div>
    <div class="col-md-8">
      <h1><?= $man['prenom']; ?> <?= $man['nom']; ?></h1>
      <p><strong>Date de naissance :</strong> <?= $man['date_naissance']; ?></p>
      <?php if ($man['date_deces']) : ?>
        <p><strong>Date de décès :</strong> <?= $man['date_deces']; ?></p>
      <?php endif; ?>
      <p><strong>Domaine :</strong> <?= $man['domaine']; ?></p>
      <p><?= $man['description']; ?></p>
      <h3>Faits historiques :</h3>
      <ul>
        <?php foreach ($man['faits_historiques_3'] as $fait) : ?>
          <li><?= $fait; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>