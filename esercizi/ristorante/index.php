<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menù ristorante Bruno Barbieri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: beige;">
<nav class="navbar" style="background-color: #6f263d;">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">
      <img src="https://brunobarbieri.blog/wp-content/uploads/2023/09/bruno-barbieri-header.png" alt="Logo" width="30" class="d-inline-block align-text-top nav text-white">
      Ristorante Bruno Barbieri
    </a>
  </div>
</nav>
<div class="p-5 text-white text-center" style="background-color:#6f263d"; >
            <img src="https://brunobarbieri.blog/wp-content/uploads/2023/09/la-mia-storia-header.png" style="width: 200px;" alt="Logo ristorante">
            <h1>Menù Ristorante Bruno Barbieri</h1>
            <p>The sun still rises on my kitchen</p> 
          </div>
  <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.ytimg.com/vi/hBISM7fQTjI/maxresdefault.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Primi</h5>
        <p>Spaghetti all'Amatriciana</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.wineandfoodtour.it/wp-content/uploads/2023/04/Polpette-di-Bruno-Barbieri-.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Secondi</h5>
        <p>Polpette al sugo</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://i.ytimg.com/vi/jZlFXwrfqlI/sddefault.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Dolci</h5>
        <p>Panettone</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<?php
$Primi=array("Riso allo zafferano"=>"7,00€", "Spaghetti all'Amatriciana"=>"7,50€", "Lasagne alla Bolognese"=>"6,50€");
$Secondi=array("Polpette al sugo"=>"7,00€", "Spezzatino di vitello"=>"8,70€", "Salsiccia e patate al forno"=>"7,50€");
$Dolce=array("Tiramisù"=>"5,00€", "Panettone"=>"4,50€", "Tortino di cioccolato con cuore fondente"=>"6,00€");
?>
<table class="table" style="background-color: beige;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">1</th>
      <th scope="col">2</th>
      <th scope="col">3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Primi</th>
      <?php
      foreach($Primi as $Nome=>$Prezzo)
      {
        echo "<td>".$Nome. "<br>".$Prezzo. "</td>";
      }
      ?>
    </tr>
    <tr>
      <th scope="row">Secondi</th>
       <?php
      foreach($Secondi as $Nome=>$Prezzo)
      {
        echo "<td>".$Nome. "<br>".$Prezzo. "</td>";
      }
      ?>
    </tr>
    <tr>
      <th scope="row">Dolci</th>
      <?php
      foreach($Dolce as $Nome=>$Prezzo)
      {
        echo "<td>".$Nome. "<br>".$Prezzo. "</td>";
      }
      ?>
    </tr>
  </tbody>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>