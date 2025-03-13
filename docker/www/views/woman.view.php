
<div class="container mt-5">
  <div class="row">
    <div class="col">
      <img src="<?= $woman['url_image']; ?>" class="img-fluid rounded" alt="Photo de <?= $woman['prenom'] . ' ' . $woman['nom']; ?>">
    </div>
    <div class="col-md-8">
      <h1><?= $woman['prenom']; ?> <?= $woman['nom']; ?></h1>
      <p><strong>Date de naissance :</strong> <?= $woman['date_naissance']; ?></p>
      <?php if ($woman['date_deces']) : ?>
        <p><strong>Date de décès :</strong> <?= $woman['date_deces']; ?></p>
      <?php endif; ?>
      <p><strong>Domaine :</strong> <?= $woman['domaine']; ?></p>
      <p><?= $woman['description']; ?></p>
      <h3>Faits historiques :</h3>
      <ul>
        <?php foreach ($woman['faits_historiques_3'] as $fait) : ?>
          <li><?= $fait; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>