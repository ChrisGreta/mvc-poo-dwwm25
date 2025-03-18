<div class="container my-5">
    <div class="row g-4">
        <?php if (isset($menObjects) && !empty($menObjects)): ?>
            <?php foreach ($menObjects as $homme): ?>
                <div class="col-md-4 d-flex flex-column justify-content-start">
                    <div class="card mb-4">
                        <img src="<?php echo $homme->url_image; ?>" class="card-img-top" alt="<?php echo $homme->nom; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $homme->prenom . ' ' . $homme->nom; ?></h5>
                            <p class="card-text"><?php echo $homme->description; ?></p>
                            <p class="card-text">Mustache: <?php echo $homme->mustache ? 'Yes' : 'No'; ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Date of Birth: <?php echo $homme->date_naissance; ?></li>
                            <li class="list-group-item">Date of Death: <?php echo $homme->date_deces; ?></li>
                            <li class="list-group-item">Domain: <?php echo $homme->domaine; ?></li>
                        </ul>
                        <div class="card-body">
                            <h6>Historical Facts:</h6>
                            <ul>
                                <?php foreach ($homme->faits_historiques_3 as $fait): ?>
                                    <li><?php echo $fait; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No men found.</p>
        <?php endif; ?>
    </div> <!-- Row -->
</div> <!-- Container -->