<?php 
require("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/estilos.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--Aos-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 3 - Depto. Vinculación Laboral</title>
    <link rel="icon" type="image/png" href="../multimedia/cropped-ipisa.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2</title>
</head>
<body>
    <header> 
        
      <nav class="navbar navbar-expand-lg bg-warning o-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" id="title" href="#">Instituto Politécnico Industrial de Santiago</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="../index.html">Inicio</a>
              <a class="nav-link" href="../pasantia.html">Pasantía</a>
              <a class="nav-link" href="../colaboradores.html">Colaboradores</a>
              <a class="nav-link" href="../familia.html">Familia</a>
              <a class="nav-link" href="formulario1.php">Formulario 1</a>
              <a class="nav-link" href="formulario2.php">Formulario 2</a>
              <a class="nav-link" href="formulario3.php">Formulario 3</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <img src="multimedia/cropped-ipisa.png" class="mx-auto d-block" alt="" width="300px">
    <main class="container o-container">
    <div class="container-md" id="who">
        <h1>Información de vacante</h1>
        <form method="post" action="">
            <label for="nom_emp">Nombre de la empresa</label>
            <input type="text" name="nom_emp" id="nom_emp" class="form-control">
            <br>

            <label for="nom_emp">Nombre del puesto</label>
            <input type="text" name="nom_pue" id="nom_pue" class="form-control">
            <br>

            <label for="func_pue">Función/perfil del puesto</label>
            <input type="text" name="func_pue" id="func_pue" class="form-control">

            <br>
            <div class="row g-2 align-items-center">
                <div class="col-auto">
                    <label for="sueldo" class="col-form-label">Sueldo</label>
                </div>
                <div class="col-auto">
                    <input type="number" name="sueldo" id="sueldo" class="form-control" placeholder="0000.00">
                </div>
            </div>
            <br><br>
   
            <label for="ubic">Ubicación</label>
            <input type="text" name="ubic" id="ubic" class="form-control" placeholder="31000, Santiago, XXXX">
            <br>

            <span>Tipo de contrato</span>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_con" id="tipo_con1" value="temp">
                <label class="form-check-label" for="tipo_con1">
                    Temporal
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_con" id="tipo_con2" value="fijo">
                <label class="form-check-label" for="tipo_con2">
                    Fijo
                </label>
            </div>
            <br>

            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="hor">Horario</label>
                </div>
                <div class="col-auto">
                    <select name="hor" id="hor" class="form-select">
                        <option selected>Seleccione...</option>
                        <option value="">a</option>
                        <option value="">a</option>
                        <option value="">a</option>
                    </select>
                </div>
            </div>
            
            <br>
            <label for="email">Correo a enviar los currículum</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="ejemplo@gmail.com">
            <br>

            <label for="cont">Persona de contacto</label>
            <input type="text" name="cont" id="cont" class="form-control">
            <br>

            <label for="tel">Teléfono</label>
            <input type="tel" name="tel" id="tel" class="form-control" placeholder="XXX-XXX-XXXX">
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </form>


        <?php
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $nom_emp = $_REQUEST['nom_emp'];
            $nom_pue = $_REQUEST['nom_pue'];
            $func_pue = $_REQUEST['func_pue'];
            $sueldo = $_REQUEST['sueldo'];
            $ubic = $_REQUEST['ubic'];
            $hor = $_REQUEST['hor'];
            $tipo_con = $_REQUEST['tipo_con'];
            $email = $_REQUEST['email'];
            $cont = $_REQUEST['cont'];
            $tel = $_REQUEST['tel'];

        }

        ?>
    
        <footer class="o-footer text-center">
            <div class="inline">
                <a href="https://www.facebook.com/ipi.salesianos" class="icon" target="_blank"><img src="../multimedia/facebook.png" alt="" width="50px"></a>
                <a href="https://instagram.com/ipisasdb" class="icon" target="_blank"><img src="../multimedia/instagram.png" alt="" width="50px"></a>
            </div>
            <p class="float-end"><a href="#"><img src="../multimedia/up-arrow.png" alt="" width="30px" height="30px"></a></p>
            <p>© 2017–2022 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>
    </main>
      <!-- FOOTER -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>