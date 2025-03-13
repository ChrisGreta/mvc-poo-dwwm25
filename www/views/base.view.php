<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Femmes Célèbres' ?></title>
    <link rel="stylesheet" href="include/css/style.css">
</head>
<body>
    <header>
        <h1><?= isset($title) ? $title : 'Femmes Célèbres' ?></h1>
    </header>
    <main>
        <?= $content_view; ?>
    </main>
    <footer>
        <p>&copy; 2023 Femmes Célèbres</p>
    </footer>
    <script src="include/js/script.js"></script>
</body>
</html>
