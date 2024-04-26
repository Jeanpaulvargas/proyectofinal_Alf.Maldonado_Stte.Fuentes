<?php include('header.php'); ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
  body {
    font-family: Arial, sans-serif;
    background-image: url(''); 
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
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
      <h2 class="section-title">Fuerzas de mar de Guatemala</h2>
      <br><br>
      <div id="imageCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/mar1.jpeg" class="d-block w-100" alt="Marina 1">
            <div class="carousel-caption">
              <p>Vigilando las aguas territoriales y costas.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/mar2.jpeg" class="d-block w-100" alt="Marina 2">
            <div class="carousel-caption">
              <p>Protegiendo la soberanía marítima de Guatemala.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/mar3.jpeg" class="d-block w-100" alt="Marina 3">
            <div class="carousel-caption">
              <p>Colaborando en operaciones de seguridad y rescate en el mar.</p>
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

      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0 text-center">
              <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-bullseye"></i> <span class="text-dark">Misión</span>
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <p>Nuestra misión es garantizar la soberanía del espacio marítimo guatemalteco, protegiendo la integridad territorial y contribuyendo a la seguridad nacional.</p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0 text-center">
              <button class="btn btn-link text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="fas fa-eye"></i> <span class="text-dark">Visión</span>
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              <p>Buscamos ser una marina moderna, eficiente y altamente capacitada, reconocida por su profesionalismo y compromiso con Guatemala.</p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0 text-center">
              <button class="btn btn-link text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <i class="fas fa-clipboard-list"></i> <span class="text-dark">Actividades Principales</span>
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <ul>
                <li>Vigilancia de las aguas territoriales y costas.</li>
                <li>Control y prevención de actividades ilegales en el mar, como la pesca no autorizada y el narcotráfico.</li>
                <li>Apoyo en operaciones de búsqueda y rescate marítimo.</li>
                <li>Participación en misiones de seguridad y defensa nacional en el mar.</li>
                <li>Colaboración con otras agencias y países en materia de seguridad marítima.</li>
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