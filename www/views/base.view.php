<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4"><?= $title ?></h1>

        <!-- Switch Button -->
        <div class="text-center mb-4">
            <button id="hommes-button" class="btn btn-primary">Hommes 🚹</button>
            <button id="femmes-button" class="btn btn-primary">Femmes 🚺</button>
        </div>

        <main>
            <?= $content ?>
        </main>

        <footer class="text-center mt-5">
            <!-- 2025 dwwm.allright -->
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('hommes-button').addEventListener('click', function() {
            window.location.href = 'index.php?route=readMen&type=men';
        });

        document.getElementById('femmes-button').addEventListener('click', function() {
            window.location.href = 'index.php?route=readWomen&type=women';
        });
    </script>
</body>
</html>