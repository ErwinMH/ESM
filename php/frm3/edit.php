<?php
include_once("../conexion.php");

    $cod = $_REQUEST['id'];
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

    $update="UPDATE datos_form3 SET nombre_empresa='$nom_emp', nombre_puesto='$nom_pue', perfil_puesto='$func_pue', sueldo='$sueldo', ubicacion='$ubic', tipo_contrato='$tipo_con', horario='$hor', correo='$email', persona_contacto='$cont', telefono='$tel' WHERE id=$cod";
    
    mysqli_query($conn_practicaphp, $update);

    header("location: ../adm-form3.php?update=success");

    $conn_practicaphp->close();

?>