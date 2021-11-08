<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" type="text/css" href="../static/css/style.css">
      <link rel="stylesheet" type="text/css" href="../static/css/reset.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <meta name="viewport" content="width=device-width, charset=utf-8 initial-scale=1" http-equiv="Content-Type">
      <link rel="icon" href="../static/img/favicon.ico" type="image/x-icon"/>
      <title>Avisos - TI Prefeitura de Vargem Grande do Sul</title>
  </head>
  <body>
    <?php include "nav.php"; ?>


    <div class="container container-basico">
    <h6>Quadro de avisos</h6>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            2021
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          2020
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
          </div>
        </div>
      </div>
  </div>
  </div>
  <?php include 'footer.php';?>
</body>
</html>