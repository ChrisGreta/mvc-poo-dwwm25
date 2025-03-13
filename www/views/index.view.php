<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Femmes Célèbres</title>
    <link rel="stylesheet" href="include/css/style.css">
</head>
<body>
    <header>
        <h1>Femmes Célèbres dans l'Histoire</h1>
    </header>
    <main>
        <h2>Femmes Célèbres</h2>

        <div class="cards-container">
            <?php
            if (isset($femmesCelebres) && is_array($femmesCelebres)) {
                foreach ($femmesCelebres as $femme) {
                    ?>
                    <div class="card">
                        <img src="include/images/<?= strtolower(str_replace(' ', '-', $femme['nom_prenom'])) ?>.jpg" alt="Image de <?= $femme['nom_prenom'] ?>">
                        <div class="card-content">
                            <h3><?= $femme['nom_prenom'] ?></h3>
                            <p><strong>Domaine :</strong> <?= $femme['domaine'] ?></p>
                            <p><strong>Date de naissance :</strong> <?= $femme['date_naissance'] ?></p>
                            <p><strong>Date de décès :</strong> <?= $femme['date_deces'] ?></p>
                            <p><strong>Âge au moment du décès :</strong> <?= $femme['age_mort'] ?> ans</p>
                            <p><?= $femme['description'] ?></p>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p>Aucune femme célèbre à afficher.</p>";
            }
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; 2023 Femmes Célèbres</p>
    </footer>
    <script src="include/js/script.js"></script>
</body>
</html>



