<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" type="text/css" href="../static/css/style.css">
      <link rel="stylesheet" type="text/css" href="../static/css/reset.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <meta name="viewport" content="width=device-width, charset=utf-8 initial-scale=1" http-equiv="Content-Type">
      <link rel="icon" href="../static/img/favicon.ico" type="image/x-icon"/>
      <link rel="icon" href="../static/img/favicon.ico" type="image/x-icon"/>
      <title>TI - Prefeitura de Vargem Grande do Sul</title>
  </head>
  <body>
    <?php
      include "nav.php";
    ?>
<div id="carouselExampleCaptions" class="carousel slide slide-home" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../static/img/carrossel/email.png" class="d-block w-100 imagem-carrossel " alt="...">
      <div class="carousel-caption d-none d-md-block">
      <a class="link-carrossel" href="https://docs.google.com/spreadsheets/d/1LL9LgOwtFtxgAGIjdUApb8JKpEU8KMUGHFZDnj_wqvA/edit?usp=sharing">
        <h5 class="legenda-carrossel">Endereços Eletrônicos</h5>
        <p class="legenda-carrossel">Veja a lista de endereços eletrônicos institucionais individuais.</p>
      </a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../static/img/carrossel/lei.png" class="d-block w-100 imagem-carrossel " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a class="link-carrossel" href="legislacao.php">
          <h5 class="legenda-carrossel">Legislação Digital</h5>
          <p class="legenda-carrossel">Confira as leis e decretos municipais relacionados à Tecnologia da Informação.</p>
        </a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../static/img/carrossel/ata.png" class="d-block w-100 imagem-carrossel " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a class="link-carrossel" href="arps.php">
        <h5 class="legenda-carrossel">Atas de Registro de Preços</h5>
        <p class="legenda-carrossel">Acesse aqui as ARPs de itens relacionados à informática.</p>
        </a>
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
<?php include 'footer.php';?>
  </body>
</html>









