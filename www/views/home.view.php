<h2>Femmes Célebre</h2>

<div class="cards-container">
    <?php
    if (isset($femmesCelebres) && is_array($femmesCelebres)) {
        foreach ($femmesCelebres as $femme) {
            ?>
           <div class="card">
    <img src="include/images/marie curie.jpg" alt="Image de Marie Curie">
    <div class="card-content">
        <h3>Marie Curie</h3>
        <p><strong>Domaine :</strong> Physique et chimie</p>
        <p><strong>Date de naissance :</strong> 7 novembre 1867</p>
        <p><strong>Date de décès :</strong> 4 juillet 1934</p>
        <p><strong>Âge au moment du décès :</strong> 66 ans</p>
        <p>Pionnière en physique et chimie.</p>
        <a href="index.php?route=readWoman&id=marie-curie" class="btn">En savoir plus</a>
    </div>
</div>
<div class="card">
    <img src="include/images/maya angelou.jpg" alt="Image de Maya Angelou">
    <div class="card-content">
        <h3>Maya Angelou</h3>
        <p><strong>Domaine :</strong> Littérature</p>
        <p><strong>Date de naissance :</strong> 4 avril 1928</p>
        <p><strong>Date de décès :</strong> 28 mai 2014</p>
        <p><strong>Âge au moment du décès :</strong> 86 ans</p>
        <p>Écrivaine, poétesse et militante américaine.</p>
        <a href="index.php?route=readWoman&id=maya-angelou" class="btn">En savoir plus</a>
    </div>
</div>
            <?php
        }
    } else {
        echo "<p>Aucune femme célèbre à afficher.</p>";
    }
    ?>
</div>