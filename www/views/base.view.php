<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini projet MVC PDO</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="_include/css/style.css">


</head>

<body>
    <h1 class="text-center"><?= $title ?></h1>
    <p class="text-center text-muted"><?= $intro ?></p>

    <!-- Navigation - Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <a class="navbar-brand fw-bold clickable" href="index.php?page=home">Accueil</a>
            <button class="navbar-toggler clickable" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link clickable" href="index.php?route=men">Hommes célèbres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link clickable" href="index.php?route=women">Femmes célèbres</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="d-flex justify-content-center flex-wrap">
            <?= $content_view ?>
        </div>
    </main>

    <footer class="text-center py-4 mt-5 border-top">
        <small>© <?= date('Y') ?> - Mini projet MVC PDO</small>
    </footer>
</body>

</html>
