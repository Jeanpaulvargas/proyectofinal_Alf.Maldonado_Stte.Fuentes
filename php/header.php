<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tu Sitio Web</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
 
    .navbar {
      background-color: #333; 
      padding-top: 10px; 
      padding-bottom: 10px; 
      border-bottom: 3px solid #ff7f0e; 
    }

    .navbar-brand {
      color: #fff !important; 
      font-size: 24px; 
      font-weight: bold; 
    }

    .navbar-nav .nav-link {
      color: #fff !important; 
      font-size: 18px; 
      margin-left: 20px; 
    }

    .navbar-nav .nav-link:hover {
      color: #ff7f0e !important; 
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="./login.php">Inicio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./tierra.php"><i class="fas fa-landmark"></i> Fuerza de Tierra</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./aerea.php"><i class="fas fa-plane"></i> Fuerza Aérea</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./naval.php"><i class="fas fa-anchor"></i> Fuerza de Mar</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./registro.php"><i class="fas fa-user-plus"></i> Registrarse</a> 
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>

</html>
