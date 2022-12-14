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
    <div class="container-md" id="who">
        <h1>Información de empresa</h1>
        <br><br>
        
        <form action="" method="post" class="row row-cols-lg-auto g-3 align-items-center">
            <br>
            <div class="col-sm-3 row">
                <div class="input-group mb-3 col-sm-3">
                    <input type="number" class="form-control" placeholder="Digite ID a buscar" name="filtro">
                    <button class="btn btn-outline-success" type="submit" name="f1">Buscar</button>
                    
                    </div>
                </div>
                <br>
        </form>
        
        <?php 
                    if ($_SERVER['REQUEST_METHOD']=='POST') {
                    $filtro = $_REQUEST['filtro'];

                    $select = "SELECT * FROM datos_form2 WHERE id=$filtro";

                    $result = mysqli_query($conn_practicaphp, $select);
                    $resultCheck = mysqli_num_rows($result);
                    if ($resultCheck > 0) {
                        while ($row=mysqli_fetch_assoc($result)) {
                            echo "<h3>Resultado: </h3>";
                            echo "<table class='table table-borderless'>
                            <thead>
                                <tr>
                                    <th scope='col'>ID</th>
                                    <th scope='col'>Nombre empresa</th>
                                    <th scope='col'>rnc</th>
                                    <th scope='col'>Identidad empresa</th>
                                    <th scope='col'>Departamento de formacion</th>
                                    <th scope='col'>alcance empresa</th>
                                    <th scope='col'>actividad economica</th>
                                    <th scope='col'>industria</th>
                                    <th scope='col'>Tamaño empresa</th>
                                    <th scope='col'>Direccion</th>
                                    <th scope='col'>Sector</th>
                                    <th scope='col'>Seccion</th>
                                    <th scope='col'>Municipio</th>
                                    <th scope='col'>Provincia</th>
                                    <th scope='col'>Pais donde opera</th>
                                    <th scope='col'>Telefono principal</th>
                                    <th scope='col'>Telefono directo</th>
                                    <th scope='col'>email</th>
                                    <th scope='col'>contraseña</th>
                                    <th scope='col'>contacto empresa</th>
                                    <th scope='col'>teléfono extensión</th>
                                </tr>
                            </thead>
                            
                            <tr>
                            <td>". $row['id'] ."</td>
                            <td>". $row['nombre_empresa'] ."</td>
                            <td>". $row['RNC']    ."</td>
                            <td>". $row['identidad_empresa']  ."</td>
                            <td>". $row['departamento_formacion']  ."</td>
                            <td>". $row['alcance_empresa'] ."</td>
                            <td>". $row['actividad_economica']    ."</td>
                            <td>". $row['industria']  ."</td>
                            <td>". $row['tamaño_empresa']  ."</td>
                            <td>". $row['direccion'] ."</td>
                            <td>". $row['sector']    ."</td>
                            <td>". $row['seccion']    ."</td>
                            <td>". $row['municipio']    ."</td>
                            <td>". $row['provincia']    ."</td>
                            <td>". $row['pais_operacion']    ."</td>
                            <td>". $row['telefono_pri']    ."</td>
                            <td>". $row['telefono_di']    ."</td>
                            <td>". $row['email']    ."</td>
                            <td>". $row['contraseña']    ."</td>
                            <td>". $row['contacto_empresa']    ."</td>
                            <td>". $row['tel_ext']    ."</td>
                                <td><a href='./frm2/delete.php?id=$row[id]'>Borrar</td>
                                <td><a href='./frm2/update.php?id=$row[id]'>Editar</td>
                            </tr>";
                        } 
                    }
                    }
                    ?>
                    


        <form method="get">
        <div class="table-responsive ">
            <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre empresa</th>
                    <th scope="col">RNC</th>
                    <th scope="col">Identidad empresa</th>
                    <th scope="col">Departamento formacion</th>
                    <th scope="col">Alcance empresa</th>
                    <th scope="col">Actividad economica</th>
                    <th scope="col">Industria</th>
                    <th scope="col">Tamaño empresa</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Sector</th>
                    <th scope="col">Seccion</th>
                    <th scope="col">Municipio</th>
                    <th scope="col">Provincia</th>
                    <th scope="col">Pais donde opera</th>
                    <th scope="col">Telefono principal</th>
                    <th scope="col">Telefono directo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">contacto empresa</th>
                    <th scope="col">Teléfeno extensión</th>



                </tr>
            </thead>
                <tbody>
                <?php
                    $select = "SELECT * FROM datos_form2";
                    $data = mysqli_query($conn_practicaphp, $select);
                    $total = mysqli_num_rows($data);

                    if ($total>0) {
                        while ($row=mysqli_fetch_assoc($data)) {
                            echo 
                            "<tr>
                                <td>". $row['id'] ."</td>
                                <td>". $row['nombre_empresa'] ."</td>
                                <td>". $row['RNC']    ."</td>
                                <td>". $row['identidad_empresa']  ."</td>
                                <td>". $row['departamento_formacion']  ."</td>
                                <td>". $row['alcance_empresa'] ."</td>
                                <td>". $row['actividad_economica']    ."</td>
                                <td>". $row['industria']  ."</td>
                                <td>". $row['tamaño_empresa']  ."</td>
                                <td>". $row['direccion'] ."</td>
                                <td>". $row['sector']    ."</td>
                                <td>". $row['seccion']    ."</td>
                                <td>". $row['municipio']    ."</td>
                                <td>". $row['provincia']    ."</td>
                                <td>". $row['pais_operacion']    ."</td>
                                <td>". $row['telefono_pri']    ."</td>
                                <td>". $row['telefono_di']    ."</td>
                                <td>". $row['email']    ."</td>
                                <td>". $row['contraseña']    ."</td>
                                <td>". $row['contacto_empresa']    ."</td>
                                <td>". $row['tel_ext']    ."</td>
                                <td><a href='./frm2/delete.php?id=$row[id]'>Borrar</td>
                                <td><a href='./frm2/update.php?id=$row[id]'>Editar</td>
                            </tr>";
                        }
                    }
                ?>
                </tbody>

            </table>
        </div>

        </form>
    
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