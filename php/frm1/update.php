<?php
    include_once("../conexion.php");
    
    if ($_SERVER['REQUEST_METHOD']=='GET') {
            $id = $_REQUEST['id'];
    
            $select = "SELECT * FROM datos_form1 WHERE id=$id";
    
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
    <title>Formulario 3 - Depto. Vinculación Laboral</title>
    <link rel="icon" type="image/png" href="../../multimedia/cropped-ipisa.ico">
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
        <h1>Información de vacante</h1>
        <form method="get" action="edit.php">
            <label for="id">ID</label>
            <input type="text" id="id" name="id" value="<?php echo $id;?>" class="form-control" readonly><br>
            
            <label for="ano_gra">Año de graduación</label>
            <select name="ano_gra" id="ano_gra" class="form-control">
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
              <option value="1996">1996</option>
              <option value="1997">1997</option>
              <option value="1998">1998</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2003">2003</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
              <option value="2007">2007</option>
              <option value="2008">2008</option>
              <option value="2009">2009</option>
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
            </select>
            </br></br>

            <label for="institucion">Institucion educativa a la que pertenece</label>
            <select name="institucion" id="institucion" class="form-control">
              <option value="IPISA">IPISA</option>
              <option value="Otra">IPIDBOSCO</option>
            </select> 
            </br></br>

            <label for="curso">Curso</label>
            <select name="curso" id="curso"class="form-control">
              <option value="3ro">3ro de secundaria</option>
              <option value="4to">4to de secundaria</option>
              <option value="5to">5to de secundaria</option>
              <option value="6to">6to de secundaria</option>
            </select>
            </br></br>

            <label for="matricula">Matrícula</label>
            <input type="text" name="matricula" id="matricula" class="form-control" value="<?php echo $row['matricula'];?>">
            <br>

            <label for="cedula">Cédula de identidad</label>
            <input type="text" name="cedula" id="cedula" class="form-control" value="<?php echo $row['cedula'];?>">
            <br>

            
            <label for="carr_tec">Carrera Técnica</label>
            <input type="text" name="carr_tec" id="carr_tec" class="form-control" value="<?php echo $row['carrera_tecnica'];?>">
            <br>

            
            <label for="tec_bac">Técnico Básico</label>
            <input type="text" name="tec_bac" id="tecnico_basico" class="form-control" value="<?php echo $row['tecnico_basico'];?>">
            <br>

            <label for="nombres">Nombres</label>
            <input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $row['nombres'];?>">
            <br>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $row['apellidos'];?>">
            <br>

            <label for="fecha_nac">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nac" id="fecha_nac" class="form-control" value="<?php echo $row['fecha_nacimiento'];?>">
            <br>

            <label for="sexo">Sexo</label>
            <select name="sexo" id="sexo" class="form-control">
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
            </select><br>
            <br>

            <label for="seccion">Sección</label>
            <input type="text" name="seccion" id="sector" class="form-control" value="<?php echo $row['seccion'];?>">
            <br>

            <label for="municipio">Municipio</label>
            <input type="text" name="municipio" id="municipio" class="form-control" value="<?php echo $row['municipio'];?>">
            <br>

            <label for="provincia">Provincia</label>
            <input type="text" name="provincia" id="provincia" class="form-control" value="<?php echo $row['provincia'];?>">
            <br>
            
            <label for="pais">País de nacionalidad</label>
            <input type="text" name="pais" id="pais" class="form-control" value="<?php echo $row['pais_natalidad'];?>">
            <br>

            <label for="tel_res">Teléfono residencial</label>
            <input type="text" name="tel_res" id="tel_res" class="form-control" value="<?php echo $row['telefono_res'];?>">
            <br>

            <label for="tel_mov">Teléfono móvil</label>
            <input type="text" name="tel_mov" id="tel_mov" class="form-control" value="<?php echo $row['telefono_mov'];?>">
            <br>
            
            <label for="lic">Posee licencia de conducir?</label></br>
            <input type="checkbox" name="lic" id="lic" value="Sí">Sí
            </br></br>

            <label for="veh">Posee vehiculo propio?</label></br>
            <input type="checkbox" name="veh" id="veh" value="Sí">Sí
            </br></br>

            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $row['email'];?>">
            <br>
            
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="contrasena" class="form-control" value="<?php echo $row['contrasena'];?>">
            <br>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Listo!</button>
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
