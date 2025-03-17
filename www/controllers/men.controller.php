<?php
// require_once 'models/json.model.php';

// function readMen() {
//     // Fetch data from men.json
//     $menCelebres = Json::readMen();

//     if ($menCelebres === false) {
//         echo "Error reading men.json";
//         exit;
//     }

//     // Use $menCelebres data as needed
//     foreach ($menCelebres->hommes_celebres as $homme) {
//         echo $homme->prenom . ' ' . $homme->nom . '<br>';
//     }
// }


// require_once 'models/json.model.php';

// function readMen() {
//     // Fetch data from men.json
//     $menCelebres = Json::readMen();

//     if ($menCelebres === false) {
//         echo "Error reading men.json";
//         exit;
//     }

//     // Use $menCelebres data as needed
//     foreach ($menCelebres->hommes_celebres as $homme) {
//         echo '<div class="card" style="width: 18rem; margin-bottom: 20px;">';
//         echo '<img src="' . $homme->url_image . '" class="card-img-top" alt="' . $homme->nom . '">';
//         echo '<div class="card-body">';
//         echo '<h5 class="card-title">' . $homme->prenom . ' ' . $homme->nom . '</h5>';
//         echo '<p class="card-text">' . $homme->description . '</p>';
//         echo '</div>';
//         echo '<ul class="list-group list-group-flush">';
//         echo '<li class="list-group-item">Date de naissance: ' . $homme->date_naissance . '</li>';
//         echo '<li class="list-group-item">Date de décès: ' . $homme->date_deces . '</li>';
//         echo '<li class="list-group-item">Domaine: ' . $homme->domaine . '</li>';
//         echo '</ul>';
//         echo '<div class="card-body">';
//         echo '<h6>Faits historiques:</h6>';
//         echo '<ul>';
//         foreach ($homme->faits_historiques_3 as $fait) {
//             echo '<li>' . $fait . '</li>';
//         }
//         echo '</ul>';
//         echo '</div>';
//         echo '</div>';
//     }
// 


require_once 'models/json.model.php';

function readMen() {
    // Fetch data from men.json
    $menCelebres = Json::readMen();

    if ($menCelebres === false) {
        echo "Error reading men.json";
        exit;
    }
  // Pass data to the view
    $title = "Hommes Celebres";
    ob_start();
    require_once 'views/men.view.php';
    $content = ob_get_clean();
    require_once 'views/base.view.php';
    }

