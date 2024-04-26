<?php include('header.php'); ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #000;
  }

  .content-section {
    background-color: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 50px;
  }

  h2.section-title {
    color: #333;
    font-size: 2.4rem;
    margin-bottom: 20px;
    text-align: center;
  }

  p {
    font-size: 1.1rem;
    line-height: 1.8;
    text-align: justify;
    margin-bottom: 20px;
  }

  .mission-vision {
    text-align: center;
  }

  .activities {
    text-align: center;
  }


  .carousel-item img {
    width: 100%;
    height: auto;
  }

  .carousel-caption {
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    padding: 20px;
  }

  .carousel-caption h5,
  .carousel-caption p {
    margin-bottom: 0;
  }
</style>

<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-md-12 content-section">
      <h2 class="section-title">Fuerza de Tierra de Guatemala</h2>
      <br><br>
      <div id="imageCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/tierra1.jpeg" class="d-block w-100" alt="Fuerza de Tierra 1">
            <div class="carousel-caption">
              <p>Protegiendo la integridad territorial.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/tierra2.jpg" class="d-block w-100" alt="Fuerza de Tierra 2">
            <div class="carousel-caption">
              <p>Defendiendo las fronteras del país.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/tierra3.jpg" class="d-block w-100" alt="Fuerza de Tierra 3">
            <div class="carousel-caption">
              <p>Apoyando a la población en situaciones de emergencia.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>


      <div class="accordion" id="accordionExample3">
        <div class="card">
          <div class="card-header" id="headingSeven">
            <h2 class="mb-0 text-center">
              <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                <i class="fas fa-bullseye"></i> <span class="text-dark">Misión</span>
              </button>
            </h2>
          </div>

          <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordionExample3">
            <div class="card-body">
              <p>Nuestra misión es resguardar la integridad territorial y la seguridad de la población guatemalteca, contribuyendo a mantener la paz y el orden en el país.</p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingEight">
            <h2 class="mb-0 text-center">
              <button class="btn btn-link text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                <i class="fas fa-eye"></i> <span class="text-dark">Visión</span>
              </button>
            </h2>
          </div>
          <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample3">
            <div class="card-body">
              <p>Nos esforzamos por ser una fuerza de tierra altamente capacitada, moderna y comprometida con el bienestar de Guatemala.</p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingNine">
            <h2 class="mb-0 text-center">
              <button class="btn btn-link text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                <i class="fas fa-clipboard-list"></i> <span class="text-dark">Actividades Principales</span>
              </button>
            </h2>
          </div>
          <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample3">
            <div class="card-body">
              <ul>
                <li>Patrullaje y vigilancia de fronteras y zonas estratégicas.</li>
                <li>Apoyo en operaciones de seguridad interna y lucha contra el narcotráfico.</li>
                <li>Asistencia en emergencias naturales y desastres.</li>
                <li>Entrenamiento y capacitación continua del personal militar.</li>
                <li>Mantenimiento y operación de equipos y vehículos terrestres.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <?php include('footer.php'); ?>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script>
        $('.carousel').carousel({
          interval: 5000
        });
      </script>