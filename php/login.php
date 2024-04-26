<?php include('header.php'); ?>

<style>
  body {
    font-family: Arial, sans-serif;
    background-image: url('./images/fondo.jpg'); 
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .content-section {
    background-color: rgba(255, 255, 255, 0.8); 
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 50px;
  }

  h2.section-title,
  h3.section-title {
    color: #333366;
    font-size: 2.4rem;
    margin-bottom: 20px;
    text-align: center;
  }

  p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #555;
    text-align: justify;
    margin-bottom: 20px;
  }

  ul {
    line-height: 1.8;
    padding-left: 20px;
  }

  ul li {
    margin-bottom: 10px;
  }

  .card {
    border-radius: 8px;
    margin-bottom: 30px;
  }

  .card-body {
    text-align: justify;
  }

  .carousel-caption {
    color: #fff;
    bottom: 10px;
  }

  .carousel-caption h5,
  .carousel-caption p {
    color: #fff;
  }


  .card-title {
    text-align: center;
    margin-bottom: 15px;
  }

  .card-title i {
    margin-right: 5px;
  }

  .card-title .d-inline-block {
    vertical-align: middle;
  }


  .carousel-title {
    color: #000;
    font-size: 2rem;
    margin-bottom: 20px;
    text-align: center;
  }

  .carousel-description {
    color: #555;
    font-size: 1.1rem;
    margin-bottom: 20px;
    text-align: justify;
  }
</style>

<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10 content-section">

      <h2 class="carousel-title text-center">EJERCITO DE GUATEMALA</h2>
      <br>
      <p class="carousel-description">El Ejército de Guatemala tiene su origen en el periodo colonial donde el territorio guatemalteco, al ser una capitanía general, requirió una mayor presencia militar organizada. Ya hacia 1750 existía en Guatemala ejército regular, con oficiales españoles formados en Europa o criollos formados en otras colonias americanas como Chile, donde también era relevante la presencia militar hispana Luego de la independencia, Guatemala estuvo gobernada por Gabino Gaínza, exgobernador militar de Chile durante el periodo de reconquista española durante la independencia del país austral. Gaínza, como militar profesional, tomó medidas para comenzar la profesionalización del naciente ejército nacional guatemalteco, medida que fue continuada por los gobernantes que le siguieron. Hacia 1870 se creó la Escuela Politécnica (Academia Militar); para su creación y desarrollo se contrató a un general español y un grupo de oficiales españoles.</p>
      <br>

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/tierra.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Ejército de Tierra</h5>
              <p>El Ejército de Tierra de Guatemala es la principal fuerza terrestre encargada de la defensa del país.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/aerea.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Fuerza Aérea</h5>
              <p>La Fuerza Aérea de Guatemala protege el espacio aéreo nacional y contribuye a la seguridad del país.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/naval.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Marina</h5>
              <p>La Marina de Guatemala vela por la seguridad en las aguas territoriales y costas del país.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
      <br><br><br>

      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-shield-alt"></i> <span class="d-inline-block">Ejército de Tierra</span></h5>
              <p class="card-text">El Ejército de Tierra o las Fuerzas de Tierra son el cuerpo militar más antiguo del Ejército de Guatemala y ha evolucionado en función de las necesidades del Estado. A mediados del siglo xix, el General Rafael Carrera lo impulsa con el triunfo en la Batalla de San José La Arada, librada el 2 de febrero de 1851, fecha que se conmemora como día de estas fuerzas.</p>
              <a href="./tierra.php" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-plane"></i> <span class="d-inline-block">Fuerza Aérea</span></h5>
              <p class="card-text">Conducir operaciones aéreas para mantener y garantizar la soberanía del espacio aéreo de Guatemala, realizar la batalla aérea y disuadir, así como apoyar a las unidades militares de superficie, con el propósito de neutralizar cualquier amenaza contra los objetivos nacionales. También coopera con las instituciones del estado en el esfuerzo nacional.</p>
              <a href="./aerea.php" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-anchor"></i> <span class="d-inline-block">Marina</span></h5>
              <p class="card-text">La Armada de Guatemala o Marina de la Defensa Nacional, constituye la Fuerza de Mar del Ejército de Guatemala.1​ Está organizada, equipada y entrenada para planificar, conducir y ejecutar las acciones que impone la Constitución de la República en materia de Seguridad y Defensa Militar del Estado, en lo referente al empleo del poder marítimo.</p>
              <a href="./naval.php" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
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
    interval: 2000
  });
</script>
