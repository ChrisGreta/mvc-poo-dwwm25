
<div class="container" style="max-width: 800px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <div class="row">
        <div class="col-md-12 text-center">

        <img src="<?= isset($women->image) ? $women->image : 'default_image_url.jpg'; ?>" alt="<?= isset($women->nom) && isset($women->prenom) ? $women->nom . ' ' . $women->prenom : 'Nom et Prénom'; ?>" class="img-thumbnail" style="border-radius: 50%; width: 150px; height: 150px; object-fit: cover;">
        </div>
        <div class="col-md-12 text-center">
            <h2 style="margin-top: 15px; font-size: 28px; color: #007bff;"><?= isset($women->nom) && isset($women->prenom) ? $women->nom . ' ' . $women->prenom : 'Nom et Prénom'; ?></h2>
            <p style="font-size: 16px; line-height: 1.5;"><strong style="color: #555;">Date de naissance:</strong> <?= isset($women->date_naissance) ? $women->date_naissance : 'Date de naissance non disponible'; ?></p>
            <p style="font-size: 16px; line-height: 1.5;"><strong style="color: #555;">Domaine:</strong> <?= isset($women->domaine) ? $women->domaine : 'Domaine non disponible'; ?></p>
            <p style="font-size: 16px; line-height: 1.5;"><?= isset($women->description) ? $women->description : 'Description non disponible'; ?></p>
            <p style="font-size: 16px; line-height: 1.5;"><strong style="color: #555;">Date de décès:</strong> <?= isset($women->date_deces) ? $women->date_deces : 'N/A'; ?></p>
            <p style="font-size: 16px; line-height: 1.5;"><strong style="color: #555;">Âge au moment du décès:</strong> <?= isset($women->date_deces) ? $women->calculerAgeDeces() : 'N/A'; ?></p>
            <h3 style="font-size: 20px; margin-top: 20px; color: #333;">Faits Historiques</h3>
            <?= isset($women->faits_historiques) ? $women->afficherFaitsHistoriques() : 'Pas de faits historiques disponibles'; ?>
            <hr style="border: 0; height: 1px; background: #ddd; margin: 20px 0;">
        </div>
    </div>
</div>
