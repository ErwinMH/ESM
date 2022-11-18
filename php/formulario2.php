

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
    <link rel="icon" type="image/png" href="../multimedia/cropped-ipisa.ico">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2 - Depto. Vinculación Laboral</title>
</head>
<body>
    <header> 
        
      <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
        <a class="navbar-brand" href="../index.html">Instituto Politécnico industrial de Santiago</a>
        <nav class="navbar bg-light">
        </nav>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pasantia.html">Pasantia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../colaboradores.html">Colaboradores</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Saber más 
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../familia.html">Familia</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../Redirectfrm.html">Índice de formularios</a></li>
              </ul>
            </li>
            
          </ul>
          
        </div>
      </div>
    </nav>
    
    </header>
    <img src="multimedia/cropped-ipisa.png" class="mx-auto d-block" alt="" width="300px">

    <main class="container o-container">
        <div class="container" id="who">

          <h1>Información necesaria de la empresa</h1>
        <form method="post" action="">
              
          <div class="form-group"> 
              <label for="nom_empresa" class="control-label">Nombre de la empresa</label>
              <input type="text" class="form-control" id="nom_empresa" name="nom_empresa" placeholder="Nombre" required>
          </div>    

          <div class="form-group">
              <label for="RNC" class="control-label">RNC</label>
              <input type="text" class="form-control" id="RNC" name="RNC" placeholder="0022541898" required>
          </div>
          <br>
          <label for="identidad_empresa" class="control-label">¿Desea que se conozca la identidad de su empresa?</label> <br>

          <input type="radio" class="form-check-input" name="identidad_empresa" value="si" id="ident1">
          <label class="form-check-label" for="ident1">Sí</label>
          <br>

          <input type="radio" class="form-check-input" name="ident" value="no" id="ident2"> 
          <label class="form-check-label" for="ident">No</label>
          <br><br>

          <label for="departamento_formacion" class="control-label">¿Dispone su empresa de un Departamento de Formación dentro de la empresa?</label> <br>

          <input type="radio" class="form-check-input" name="departamento_formacion" value="si" id="departamento_formacion">
          <label class="form-check-label" for="departamento_formacion">Sí</label>
          <br>
          <input type="radio" class="form-check-input" name="departamento_formacion" value="no" id="departamento_formacion">
          <label class="form-check-label" for="departamento_formacion">No</label>
          <br><br>

          <label for="alcance_empresa" class="control-label">Alcance de la empresa </label> <br>

          <input type="radio" class="form-check-input" name="alcance_empresa" value="nac" id="nac">
          <label class="form-check-label" for="nac">Nacional</label>
          <br>
          <input type="radio" class="form-check-input" name="alcance" value="loc" id="loc">
          <label class="form-check-label" for="loc">Local</label>

          <br>
          <br>
          <label for="actividad_economica" class="control-label">Actividad económica a la que se dedica la empresa </label> <br>
          <textarea type="textarea" name="actividad_economica" class="form-control" id="actividad_economica" required></textarea><br>

          <div class="form-group"> 
              <label for="state_id" class="control-label">Industria</label><br>

              <select class="form-control" id="industria" name="industria" required>
                  <option value="ind">Industrial</option>
                  <option value="serv">servicio</option><br>
              </select>

                  <br>

          <div class="form-group"> 
              <label for="tamaño_empresa" class="control-label">Capacidad de la empresa</label><br>

              <select class="form-control" id="tamaño_empresa" name="tamaño_empresa" required>
                  <option value="grande">Grande</option>
                  <option value="Peq">Pequeña</option>
              </select>
                  
                  <br>
          <label for="direccion" class="control-label">Dirección </label><br>
          <input type="textbox" name="direccion" class="form-control" id="direccion" required><br>
          
          <label for="sector" class="control-label">Sector </label> <br>
          <input type="textbox" name="sector" class="form-control" id="sector" required><br>
          
          <label for="secc" class="control-label">Sección</label> <br>
          <input type="textbox" name="seccion" class="form-control" id="seccion" required><br>
          
          <label for="municipio" class="control-label">Municipio</label> <br>
          <input type="textbox" name="municipio" class="form-control" id="municipio" required><br>

          <label for="provincia" class="control-label">Provincia</label> <br>
          <input type="textbox" name="provincia" class="form-control" id="provincia" required>

          <br><br>
          <label for="pais_operacion" class="control-label">País donde opera</label><br>
          <select class="form-control" id="pais_operacion" name="pais_operacion" required>
              <option value="RD">República Dominicana</option>            
          </select>
          <br>
          <label for="email" class="control-label">Correo</label> 
          <br>
          <input type="email" name="email" class="form-control" id="email" required>       
          <br>
          <label for="clave" class="control-label">Clave</label> 
          <br>
          <input type="password" name="contraseña" class="form-control" id="contraseña" required>
          <br>      

          <label for="ver_email" class="control-label">Confirmación de correo</label> 
          <br>
          <input type="email" name="ver_email" class="form-control" id="ver_email" required>       
          <br>
          <label for="ver_clave" class="control-label">Confirmación de clave</label> 
          <br>
          <input type="password" name="ver_clave" class="form-control" id="ver_clave" required>
          <br>

          <br>
          <br>
          <br>
          <label for="telefono_pri" class="control-label">Teléfono principal</label> 
          <br>
          <input type="textbox" name="telefono_pri" class="form-control" id="tel_prin" placeholder="000-000-000" required>       

          <br>
          <label for="telefono_di" class="control-label">Teléfono directo</label> 
          <br>
          <input type="textbox" name="telefono_di" class="form-control" id="tel_dr" placeholder="000-000-0000" required>   
          <br>
          <br>
          <label for="cont_empr" class="control-label">Contacto empresa</label> 
          <br>
          <input type="textbox" name="cont_empr" class="form-control" id="cont_empr" required>  
          <br>
          <label for="tel_ext" class="control-label">Teléfono y extensión</label> 
          <br>
          <input type="textbox" name="tel_ext" class="form-control" id="tel_ext" placeholder="000-000-0000" required>       

          <br>


        
          <br>
          <div class="d-grid gap-2 col-6 mx-auto"> 
              <button type="submit" class="btn btn-primary">Enviar</button>
          </div>     
          </div>
        </form>


        <?php

require("conexion.php");
    if ($_SERVER['REQUEST_METHOD']=='POST') {
      $nom_empr =$_POST['nom_empresa'];
      $rnc = $_POST['RNC'];
      $id_em = $_POST['identidad_empresa'];
      $dept = $_POST['departamento_formacion'];
      $alcance = $_POST['alcance_empresa'];
      $acti = $_POST['actividad_economica'];
      $indu = $_POST['industria'];
      $tama = $_POST['tamaño_empresa'];
      $direc = $_POST['direccion'];
      $sector = $_POST['sector'];
      $secc = $_POST['seccion'];
      $provincia = $_POST['provincia'];
      $municipio = $_POST['municipio'];
      $pais = $_POST['pais_operacion'];
      $telpri = $_POST['telefono_pri'];
      $telsec = $_POST['telefono_di'];
      $contacto = $_POST['cont_empr'];
      $mail = $_POST['email'];
      $clave = $_POST['contraseña'];
      $tel_ext = $_POST['tel_ext'];

        $ver_clave = $_POST['ver_clave'];
        $ver_correo = $_POST['ver_email'];

        if ($clave == $ver_clave && $mail == $ver_correo) {
          $insert = "INSERT INTO datos_form2 VALUES (0, '$nom_empr','$rnc',' $id_em','$dept','$alcance',
          '$acti','$indu','$tama','$direc','$sector','$secc','$municipio','$provincia','$pais','$telpri','$telsec',
          '$mail','$clave','$contacto','$tel_ext')";
        
          // mysqli_query($conn_practicaphp, $insert);
        
          if ($result = mysqli_query($conn_practicaphp, $insert)) {
            echo "inserted succesfully";
          } else {
            echo "Error";
          }
          $conn_practicaphp->close();
        } else {
          echo "Los datos de la contraseña o correo no coinciden";
        }

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