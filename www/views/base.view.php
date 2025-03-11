<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini projet MVC - POO - Les femmes célèbres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTK7yJjPPEj5v5iWaRl9OF">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-VyPcrYf6tY3lJHBO6NNkmC5s9fDVZLESa"></script>
</head>
<body>
    <h1 class="text-center"><?= $title ?></h1>
    <main class="container">
        <!-- appel du contenu de la vue -->
        <?= $content_view ?>
    </main>
    <div class="text-center">
        © 2025 DWMM. All rights reserved.
    </div>
</body>
</html>
