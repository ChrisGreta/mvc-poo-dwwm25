<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="<?=$women->image?>" alt="image de la femme célèbre" class="img-fluid rounded">
        </div>
        <div class="col-md-4">
            <h1><strong>Nom Prénom:</strong><?=$women->nom?> <?=$women->prenom?></h1>
            <p><strong>Date de naissance : </strong><?=$women->date_naissance?></p>
            <p><strong>Domaine : </strong><?=$women->domaine?></p>
            <p><strong>Description : </strong><?=$women->description?></p>
            <?php if($women->date_deces !== NULL):?>
            <p><strong>Mort à : </strong>
            <?= $women->date_deces?>
            <?= $women->getAgeDeces()?>
            <?php else :?>
                <p>toujours en vie</p>
            </p>
            <?php endif;?>
        </div>
        <div class="col-md-4">
            <p><strong>Faits historiques :</strong><br>
                <ul>
                    <?php foreach($women->faits_histroriques as $fait):?>
                        <li><?=$fait?></li>
                    <?php endforeach;?>
                </ul>
            </p>
        </div>
            
</div>