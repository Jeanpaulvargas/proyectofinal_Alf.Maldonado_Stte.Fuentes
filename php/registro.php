<?php include('header.php'); ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    .content-section {
        background-color: #fff;
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

    p,
    .profile-description {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
        text-align: justify;
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
        color: #333;
    }

    .form-control {
        border-radius: 5px;
    }

    .btn-custom {
        background-color: #337ab7;
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
    }

    .btn-custom:hover {
        background-color: #285e8e;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10 content-section">
            <h3 class="section-title">Regístrate para pertenecer a nuestro glorioso ejercito de Guatemala</h3>
            <form action="register.php" method="POST">
                <div class="form-group">
                    <label for="fullName">Nombre Completo:</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="interest">Interés en Servicios:</label>
                    <select class="form-control" id="interest" name="interest">
                        <option value="military service">Servicio Militar</option>
                        <option value="other">Otro</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-custom">Registrarse</button>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
