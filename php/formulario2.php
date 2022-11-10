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
    <link rel="icon" type="image/png" href="multimedia/cropped-ipisa.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2 - Depto. Vinculación Laboral</title>
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
        <div class="container" id="who">
            <h1>Información necesaria de la empresa</h1>
        <form>
            
        <div class="form-group"> <!-- Full Name -->
            <label for="full_name_id" class="control-label">NOMBRE DE LA EMPRESA</label>
            <input type="text" class="form-control" id="full_empresa_id" name="NOMBRE" placeholder="NOMBRE">
        </div>    

        <div class="form-group"> <!-- Street 1 -->
            <label for="street1_id" class="control-label">RNC</label>
            <input type="text" class="form-control" id="street1_id" name="street1" placeholder="0022541898">
        </div>                    
        <label for="full_name_id" class="control-label">¿Desea que se conozca la identidad de su empresa?</label> <br>

        si <input type="checkbox" name = "extras[]" value = "Sí" ><br>

        no <input type="checkbox" name = "extras[]" value = "No" > <br>

        <label for="full_name_id" class="control-label">¿Dispone su empresa de un Departamento de Formación dentro de la empresa?</label> <br>

        si <input type="checkbox" name = "extras[]" value = "Sí" ><br>

        no <input type="checkbox" name = "extras[]" value = "No" >
        <br>

        <label for="full_name_id" class="control-label">Alcance de la empresa </label> <br>

        Nacional <input type="checkbox" name = "extras[]" value = "nac" ><br>

        Local <input type="checkbox" name = "extras[]" value = "loc" >
        <br>
        <br>
        <label for="full_name_id" class="control-label">Actividad económica a la que se dedica la empresa </label> <br>
        <br>
        <input type="textbox" name = "extras[]" value = "" ><br>
        <br>

        <div class="form-group"> 
            <label for="state_id" class="control-label">Industria</label><br><br>

            <select class="form-control" id="state_id">
                <option value="AL">Industrial</option>
                <option value="AK">servicio</option><br><br>
                </select>

                <br>

                <div class="form-group"> 
            <label for="state_id" class="control-label">Capacidad de la empresa</label><br><br>

            <select class="form-control" id="state_id">
                <option value="AL">Grande</option>
                <option value="AK">Pequeña</option><br><br>
                </select>
                
                <br>
        <label for="full_name_id" class="control-label">Dirección </label> <br>
        <br>
        <input type="textbox" name = "extras[]" value = "" >

        <br>
        <label for="full_name_id" class="control-label">Sector </label> <br>
        <br>
        <input type="textbox" name = "extras[]" value = "" >

        <br>
        <label for="full_name_id" class="control-label">Sección</label> <br>
        <br>
        <input type="textbox" name = "extras[]" value = "" >

        <br>
        <label for="full_name_id" class="control-label">Provincia</label> <br>
        <br>
        <input type="textbox" name = "extras[]" value = "" >

        <br><br>
        <label for="state_id" class="control-label">País donde opera</label><br>
        <select class="form-control" id="state_id">
                <option value="AL">República Dominicana</option>
                
                </select>
        <br>
                <label for="full_name_id" class="control-label">Teléfono principal</label> 
        <br>
        <input type="textbox" name = "extras[]" value = "" >       

        <br>
                <label for="full_name_id" class="control-label">Teléfono directo</label> 
        <br>
        <input type="textbox" name = "extras[]" value = "" >   



        <div class="form-group"> 
            <label for="zip_id" class="control-label">Correo electrónico</label>
            <input type="text" class="form-control" id="zip_id" name="zip" placeholder="correo">
        </div>        

        <div class="form-group"> 
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