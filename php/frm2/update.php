<?php
    include_once("../conexion.php");
    
    if ($_SERVER['REQUEST_METHOD']=='GET') {
            $id = $_REQUEST['id'];
    
            $select = "SELECT * FROM datos_form2 WHERE id=$id";
    
            $result = mysqli_query($conn_practicaphp, $select);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                while ($row=mysqli_fetch_assoc($result)) {
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
    <title>Formulario 2 - Depto. Vinculación Laboral</title>
    <link rel="icon" type="image/png" href="../multimedia/cropped-ipisa.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2</title>
</head>
<body>
    <header> 
        
    <nav class="navbar navbar-expand-lg bg-warning">
         <div class="container-fluid">
    <a class="navbar-brand" href="../../index.html">Instituto Politécnico industrial de Santiago</a>
               <nav class="navbar bg-light">
</nav>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../index.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../pasantia.html">Pasantia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../colaboradores.html">Colaboradores</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Saber más 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../../familia.html">Familia</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../../Redirectfrm.html">Índice de formularios</a></li>

          </ul>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
    </header>
    <img src="multimedia/cropped-ipisa.png" class="mx-auto d-block" alt="" width="300px">
    <main class="container o-container">
    <div class="container-md" id="who">
        <h1>Información de Empresas </h1>
        <form method="get" action="edit.php">
            <label for="id">ID</label>
            <input type="text" id="id" name="id" value="7" class="form-control" readonly>

            <label for="nom_empresa">Nombre de la empresa</label>
            <input type="text" name="nom_empresa" id="nom_empresa" class="form-control" value="<?php echo $row['nombre_empresa'];?>">
            <br>

            <label for="RNC">RNC</label>
            <input type="text" name="RNC" id="RNC" class="form-control" value="<?php echo $row['RNC'];?>">
            <br>

            <label for="identidad_empresa">Identidad empresa</label>
            <input type="text" name="identidad_empresa" id="identidad_empresa" class="form-control" value="<?php echo $row['identidad_empresa'];?>">

            <br>
            <label for="departamento_formacion">Departamento formacion</label>
            <input type="text" name="departamento_formacion" id="departamento_formacion" class="form-control" value="<?php echo $row['departamento_formacion'];?>">

            <br>
            </div>
            <br><br>
   
            <label for="alcance_empresa">alcance empresa</label>
            <input type="text" name="alcance_empresa" id="alcance_empresa" class="form-control" placeholder="" value="<?php echo $row['alcance_empresa'];?>">
            <br>
            <label for="func_pue">actividad economica</label>
            <input type="text" name="actividad_economica" id="actividad_economica" class="form-control" value="<?php echo $row['actividad_econonomica'];?>">

            <br>
            <div class="form-group"> 
              <label for="state_id" class="control-label">Industria</label><br>
              <select class="form-control" id="industria" name="industria" required value = "<?php echo $row['industria'];?>">
                  <option value="ind">Industrial</option>
                  <option value="serv">servicio</option><br>
              </select>

                  <br>

          <div class="form-group"> 
              <label for="tamaño_empresa" class="control-label">Capacidad de la empresa</label><br>
  

              <select class="form-control" id="tamaño_empresa" name="tamaño_empresa" required value="<?php echo $row['tamaño_empresa'];?>">

                  <option value="grande">Grande</option>
                  <option value="Peq">Pequeña</option>
              </select>
                  
                  <br>
          <label for="direccion" class="control-label">Dirección </label><br>
          <input type="textbox" name="direccion" class="form-control" id="direccion" required value="<?php echo $row['direccion'];?>">

          
          <label for="sector" class="control-label">Sector </label> <br>
          <input type="textbox" name="sector" class="form-control" id="sector" required value="<?php echo $row['sector'];?>">
<br>
          
          <label for="seccion" class="control-label">Sección</label> <br>
          <input type="textbox" name="seccion" class="form-control" id="seccion" required value="<?php echo $row['seccion'];?>">
<br>
          
          <label for="municipio" class="control-label">Municipio</label> <br>
          <input type="textbox" name="municipio" class="form-control" id="municipio" required value="<?php echo $row['municipio'];?>">
<br>

          <label for="provincia" class="control-label">Provincia</label> <br>
          <input type="textbox" name="provincia" class="form-control" id="provincia" required value="<?php echo $row['provincia'];?>">


          <br><br>
          <label for="pais_operacion" class="control-label">País donde opera</label><br>
          <select class="form-control" id="pais_operacion" name="pais_operacion" required value="<?php echo $row['pais_operacion'];?>">

              <option value="RD">República Dominicana</option>            
          </select>
          <br>
          <label for="email" class="control-label">Correo</label> 
          <br>
          <input type="email" name="email" class="form-control" id="email" required value="<?php echo $row['email'];?>">
      
          <br>
          <label for="contraseña" class="control-label">Clave</label> 
          <br>
          <input type="password" name="contraseña" class="form-control" id="contraseña" required value="<?php echo $row['contraseña'];?>">

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
          <input type="textbox" name="telefono_pri" class="form-control" id="telefono_pri" placeholder="000-000-000" required value="<?php echo $row['telefono_pri'];?>">
       

          <br>
          <label for="telefono_di" class="control-label">Teléfono directo</label> 
          <br>
          <input type="textbox" name="telefono_di" class="form-control" id="telefono_di" placeholder="000-000-0000" required value="<?php echo $row['telefono_di'];?>">
   
          <br>
          <br>
          <label for="cont_empr" class="control-label">Contacto empresa</label> 
          <br>
          <input type="textbox" name="cont_empr" class="form-control" id="cont_empr" required value="<?php echo $row['contacto_empresa'];?>">
  
          <br>
          <label for="tel_ext" class="control-label">Teléfono y extensión</label> 
          <br>
          <input type="textbox" name="tel_ext" class="form-control" id="tel_ext" placeholder="000-000-0000" required value="<?php echo $row['tel_ext'];?>">
  
  <br>       

          <br>

            <div class="d-grid gap-2 col-6 mx-auto">
                <input class="btn btn-primary" type="submit" value="Editar"></a>
            </div>
        </form>

        <br><br>
        <footer class="o-footer text-center">
            <div class="inline">
                <a href="https://www.facebook.com/ipi.salesianos" class="icon" target="_blank"><img src="../../multimedia/facebook.png" alt="" width="50px"></a>
                <a href="https://instagram.com/ipisasdb" class="icon" target="_blank"><img src="../../multimedia/instagram.png" alt="" width="50px"></a>
            </div>
            <p class="float-end"><a href="#"><img src="../../multimedia/up-arrow.png" alt="" width="30px" height="30px"></a></p>
            <p>© 2017–2022 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>
    </main>
      <!-- FOOTER -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
                
                
                <?php

                }
            }
            
    
        }

?>
