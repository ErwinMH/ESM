<?php
include_once("../conexion.php");

    $cod = $_REQUEST['id'];
    $ano_gra = $_REQUEST['ano_gra'];
    $institucion = $_REQUEST['institucion'];
    $curso = $_REQUEST['curso'];
    $matricula = $_REQUEST['matricula'];
    $cedula = $_REQUEST['cedula'];
    $carr_tec= $_REQUEST['carr_tec'];
    $tec_bac = $_REQUEST['tec_bac'];
    $nombres = $_REQUEST['nombres'];
    $apellidos = $_REQUEST['apellidos'];
    $fecha_nac = $_REQUEST['fecha_nac'];
    $sexo = $_REQUEST['sexo'];
    $seccion= $_REQUEST['seccion'];
    $municipio = $_REQUEST['municipio'];
    $provincia = $_REQUEST['provincia'];
    $pais= $_REQUEST['pais'];
    $tel_res = $_REQUEST['tel_res'];
    $tel_mov = $_REQUEST['tel_mov'];
    $lic = $_REQUEST['lic'];
    $veh = $_REQUEST['veh'];
    $email = $_REQUEST['email'];
    $contrasena = $_REQUEST['contrasena'];


    $update="UPDATE datos_form1 SET ano_graduacion='$ano_gra', institucion_perteneciente='$institucion', curso='$curso', matricula='$matricula', cedula='$cedula', carrera_tecnica='$carr_tec', tecnico_basico='$tec_bac', nombres='$nombres', apellidos='$apellidos', fecha_nacimiento='$fecha_nac', sexo='$sexo', seccion='$seccion', municipio='$municipio', provincia='$provincia', pais_natalidad='$pais', telefono_res='$tel_res', telefono_mov='$tel_mov', licencia_conducir='$lic', vehiculo_propio='$veh', email='$email', contrasena='$contrasena' WHERE id=$cod";
    
    mysqli_query($conn_practicaphp, $update);

    header("location: ../adm-form1.php?update=success");

    $conn_practicaphp->close();

?>