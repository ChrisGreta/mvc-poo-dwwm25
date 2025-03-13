<h2>Bienvenue ! 😁</h2>
 <div class="container">
         <div class="row">
         <?php
         
         $index = 0;
         // Parcours des femmes célèbres
         foreach ($femmesCelebres as $femme) {
         ?>
             <div class="col-md-4 d-flex flex-column  justify-content-start">
                 <div class="card" style="width: 18rem;">
                     <img src="<?= $femme->url_image ?>" class="card-img-top" alt="...">
                     <div class="card-body">
                         <h5 class="card-title"><?= $femme->prenom ?> <?= $femme->nom ?></h5>
                         <p class="card-text"><?= $femme->description ?></p>
                     </div>
                     <ul class="list-group list-group-flush">
                         <li class="list-group-item"><?= $femme->date_naissance ?></li>
                         <li class="list-group-item"><?= $femme->domaine ?></li>
                     </ul>
                     <div class="card-body">
                         <a href="index.php?route=read&women=<?= $index;?>" class="card-link">En savoir plus...</a>
                     </div>
                 </div>
             </diV>
         <?php
             $index++;
         }
         ?>
         </div> <!-- Row -->
 </div> <!-- Container -->
 
 <h2>Bon 8 mars</h2>
 
 <?php
 foreach ($femmesCelebres as $femme) {
     echo "<h2>{$femme['prenom']} {$femme['nom']}</h2>";
     echo "<p><strong>Date de naissance:</strong> {$femme['date_naissance']}</p>";
     echo "<p>{$femme['description']}</p>";
     echo "<p><strong>Domaine:</strong> {$femme['domaine']}</p>";
     echo "<img src='{$femme['image']}' alt='{$femme['prenom']} {$femme['nom']}' style='max-width: 200px;'>";
     echo "<hr>";
 }