<!-- 
nome repo: php-dischi-json

Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi 
presente nel nostro server.

Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP

Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end)
riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.

Bonus
Al click su un disco, recuperare e mostrare i dati del disco selezionato.

ULTRA BONUS
aggiungere un form dove poter inserire i dati di un nuovo disco, 
Al submit, tramite axios, inviare i dati al server, e questo li prende 
e li salva nel file json dei dischi.
-->

<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- THIRD PARTY LIBRARIES -->
  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- FONTAWESOME CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- VUE CDN -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- AXIOS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- My css link -->
  <link rel="stylesheet" href="css/style.css">
  <title>PHP | JSON Disks</title>
</head>
<body>
  <div class="container-fluid py-4 bg-dark bg-opacity-75 shadow-lg">
    <div class="row justify-content-center">
      <div class="col-12 d-flex flex-column mx-auto">
        <div class="col d-flex flex-column justify-content-start mb-2">
          <img src="./imgs/vuejs-logo.png" alt="" width="60" height="45">
        </div>
        <div class="row row-cols-3 bg-success bg-opacity-50 g-5 mt-2 pb-5">
          <div class="col d-flex flex-column justify-content-center align-items-center text-center">
            <div class="card bg-dark bg-opacity-25">
              <img src="./imgs/vuejs-logo.png" class="card-img-top border" alt="card-img-top">
              <div class="card-body border">
                <h5 class="card-title border">Card title</h5>
                <h6 class="card-text border">Author</h6>
                <h5 class="card-text border"><small>Year</small></h5>
              </div>
            </div>
          </div>

          <div class="col d-flex flex-column justify-content-center align-items-center text-center">
            <div class="card bg-dark bg-opacity-25">
              <img src="./imgs/vuejs-logo.png" class="card-img-top border" alt="card-img-top">
              <div class="card-body border">
                <h5 class="card-title border">Card title</h5>
                <h6 class="card-text border">Author</h6>
                <h5 class="card-text border"><small>Year</small></h5>
              </div>
            </div>
          </div>

          <div class="col d-flex flex-column justify-content-center align-items-center text-center">
            <div class="card bg-dark bg-opacity-25">
              <img src="./imgs/vuejs-logo.png" class="card-img-top border" alt="card-img-top">
              <div class="card-body border">
                <h5 class="card-title border">Card title</h5>
                <h6 class="card-text border">Author</h6>
                <h5 class="card-text border"><small>Year</small></h5>
              </div>
            </div>
          </div>

          <div class="col d-flex flex-column justify-content-center align-items-center text-center">
            <div class="card bg-dark bg-opacity-25">
              <img src="./imgs/vuejs-logo.png" class="card-img-top border" alt="card-img-top">
              <div class="card-body border">
                <h5 class="card-title border">Card title</h5>
                <h6 class="card-text border">Author</h6>
                <h5 class="card-text border"><small>Year</small></h5>
              </div>
            </div>
          </div>

          <div class="col d-flex flex-column justify-content-center align-items-center text-center">
            <div class="card bg-dark bg-opacity-25">
              <img src="./imgs/vuejs-logo.png" class="card-img-top border" alt="card-img-top">
              <div class="card-body border">
                <h5 class="card-title border">Card title</h5>
                <h6 class="card-text border">Author</h6>
                <h5 class="card-text border"><small>Year</small></h5>
              </div>
            </div>
          </div>

          <div class="col d-flex flex-column justify-content-center align-items-center text-center">
            <div class="card bg-dark bg-opacity-25">
              <img src="./imgs/vuejs-logo.png" class="card-img-top border" alt="card-img-top">
              <div class="card-body border">
                <h5 class="card-title border">Card title</h5>
                <h6 class="card-text border">Author</h6>
                <h5 class="card-text border"><small>Year</small></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- My JS file -->
  <script src="js/main.js"></script>
  <!-- Bootstrap JS file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
</body>
</html>