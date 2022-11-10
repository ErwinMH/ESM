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
            <li><a class="dropdown-item" href="formulario3.php">Formulario de vacantes</a></li>
            <li><a class="dropdown-item" href="formulario2.php">Formulario de empresas</a></li>
            <li><a class="dropdown-item" href="formulario1.php">Formulario de Estudiantes</a></li>
            <li><hr class="dropdown-divider"></li>
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
        <form>
            
        <div class="form-group"> <!-- Full Name -->
            <label for="full_name_id" class="control-label">Nombre de la empresa</label>
            <input type="text" class="form-control" id="full_empresa_id" name="nombre" placeholder="Nombre">
        </div>    

        <div class="form-group"> <!-- Street 1 -->
            <label for="street1_id" class="control-label">RNC</label>
            <input type="text" class="form-control" id="street1_id" name="street1" placeholder="0022541898">
        </div>
        <br>
        <label for="full_name_id" class="control-label">¿Desea que se conozca la identidad de su empresa?</label> <br>

        <input type="radio" class="form-check-input" name="extras[]" value="si">
        <label class="form-check-label" for="">Sí</label>
        <br>
        <input type="radio" class="form-check-input" name="extras[]" value="no"> 
        <label class="form-check-label" for="">No</label>
        <br><br>

        <label for="full_name_id" class="control-label">¿Dispone su empresa de un Departamento de Formación dentro de la empresa?</label> <br>

        <input type="radio" class="form-check-input" name="extras[]" value="si">
        <label class="form-check-label" for="">Sí</label>
        <br>
        <input type="radio" class="form-check-input" name="extras[]" value="no">
        <label class="form-check-label" for="">No</label>
        <br><br>

        <label for="full_name_id" class="control-label">Alcance de la empresa </label> <br>

        <input type="radio" class="form-check-input" name="extras[]" value="nac" id="nac">
        <label class="form-check-label" for="nac">Nacional</label>
        <br>
        <input type="radio" class="form-check-input" name="extras[]" value="loc" id="loc">
        <label class="form-check-label" for="loc">Local</label>

        <br>
        <br>
        <label for="full_name_id" class="control-label">Actividad económica a la que se dedica la empresa </label> <br>
        <input type="textbox" name = "extras[]" class="form-control" value=""><br>

        <div class="form-group"> 
            <label for="state_id" class="control-label">Industria</label><br>

            <select class="form-control" id="state_id">
                <option value="AL">Industrial</option>
                <option value="AK">servicio</option><br>
            </select>

                <br>

        <div class="form-group"> 
            <label for="state_id" class="control-label">Capacidad de la empresa</label><br>

            <select class="form-control" id="state_id">
                <option value="AL">Grande</option>
                <option value="AK">Pequeña</option>
            </select>
                
                <br>
        <label for="full_name_id" class="control-label">Dirección </label><br>
        <input type="textbox" name="extras[]" value="" class="form-control"><br>
        
        <label for="full_name_id" class="control-label">Sector </label> <br>
        <input type="textbox" name="extras[]" value="" class="form-control"><br>
        
        <label for="full_name_id" class="control-label">Sección</label> <br>
        <input type="textbox" name="extras[]" value="" class="form-control"><br>

        <label for="full_name_id" class="control-label">Provincia</label> <br>
        <input type="textbox" name="extras[]" value="" class="form-control">

        <br><br>
        <label for="state_id" class="control-label">País donde opera</label><br>
        <select class="form-control" id="state_id">
            <option value="AL">República Dominicana</option>            
        </select>
        <br>
        <label for="full_name_id" class="control-label">Teléfono principal</label> 
        <br>
        <input type="textbox" name="extras[]" value="" class="form-control">       

        <br>
        <label for="full_name_id" class="control-label">Teléfono directo</label> 
        <br>
        <input type="textbox" name="extras[]" value="" class="form-control">   
        <br>


       
        <br>
        <div class="d-grid gap-2 col-6 mx-auto"> 
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>     
        </div>
        </form>
        <footer class="o-footer text-center">
          <div class="inline">
            <a href="https://www.facebook.com/ipi.salesianos" class="icon" target="_blank"><img src="multimedia/facebook.png" alt="" width="50px"></a>
            <a href="https://instagram.com/ipisasdb" class="icon" target="_blank"><img src="multimedia/instagram.png" alt="" width="50px"></a>
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