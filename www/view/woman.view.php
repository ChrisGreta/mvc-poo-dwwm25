<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="<?=$femme->image?>" alt="image de la femme célèbre" class="img-fluid rounded">
        </div>
        <div class="col-md-4">
            <h1><strong>Nom Prénom:</strong><?=$femme->nom?> <?=$femme->prenom?></h1>
            <p><strong>Date de naissance : </strong><?=$femme->date_naissance?></p>
            <p><strong>Domaine : </strong><?=$femme->domaine?></p>
            <p><strong>Description : </strong><?=$femme->description?></p>
            <?php if($femme->date_deces !== NULL):?>
            <p><strong>Mort à : </strong>
            <?= $femme->getAgeDeces()?>
            <?php else :?>
                <p>toujours en vie</p>
            </p>
            <?php endif;?>
        </div>
        <div class="col-md-4">
            <p><strong>Faits historiques :</strong><br>
                <ul>
                    <?php foreach($femme->faits_histroriques as $fait):?>
                        <li><?=$fait?></li>
                    <?php endforeach;?>
                </ul>
            </p>
        </div>
            
</div>