<?php
include_once("../conexion.php");

    $cod = $_REQUEST['id'];
    $nom_empr =$_REQUEST['nom_empresa'];
        $rnc = $_REQUEST['RNC'];
        $id_em = $_REQUEST['identidad_empresa'];
        $dept = $_REQUEST['departamento_formacion'];
        $alcance = $_REQUEST['alcance_empresa'];
        $acti = $_REQUEST['actividad_economica'];
        $indu = $_REQUEST['industria'];
        $tama = $_REQUEST['tamaño_empresa'];
        $direc = $_REQUEST['direccion'];
        $sector = $_REQUEST['sector'];
        $secc = $_REQUEST['seccion'];
        $provincia = $_REQUEST['provincia'];
        $municipio = $_REQUEST['municipio'];
        $pais = $_REQUEST['pais_operacion'];
        $telpri = $_REQUEST['telefono_pri'];
        $telsec = $_REQUEST['telefono_di'];
        $contacto = $_REQUEST['cont_empr'];
        $mail = $_REQUEST['email'];
        $clave = $_REQUEST['contraseña'];
        $tel_ext = $_REQUEST['tel_ext'];
    $update="UPDATE datos_form2 SET nombre_empresa='$nom_empr', RNC='$rnc', identidad_empresa='$id_em', 
    departamento_formacion='$dept', alcance_empresa='$alcance', actividad_economica='$acti',
     industria='$indu', tamaño_empresa='$tama', direccion='$direc', sector='$sector',seccion='$secc',
     provincia='$provincia', municipio='$municipio', pais_operacion='$pais', telefono_pri='$telpri',
     telefono_di='$telsec', email='$mail', contraseña='$clave', tel_ext='$tel_ext' WHERE id=$cod";
    
    mysqli_query($conn_practicaphp, $update);

    header("location: ../adm-form2.php?update=success");

    $conn_practicaphp->close();

?>