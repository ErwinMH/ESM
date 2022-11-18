<?php
include_once("../conexion.php");

    $cod = $_REQUEST['id'];
    $nom_empr =$_REQUEST['nom_empr'];
        $rnc = $_REQUEST['rnc'];
        $id_em = $_REQUEST['ident'];
        $dept = $_REQUEST['dept'];
        $alcance = $_REQUEST['alcance'];
        $acti = $_REQUEST['act_eco'];
        $indu = $_REQUEST['indu'];
        $tama = $_REQUEST['cap'];
        $direc = $_REQUEST['dir'];
        $sector = $_REQUEST['sect'];
        $secc = $_REQUEST['secc'];
        $provincia = $_REQUEST['prov'];
        $municipo = $_REQUEST['mun'];
        $pais = $_REQUEST['pais'];
        $telpri = $_REQUEST['tel_prin'];
        $telsec = $_REQUEST['tel_dir'];
        $contacto = $_REQUEST['cont_empr'];
        $mail = $_REQUEST['email'];
        $clave = $_REQUEST['clave'];
        $tel_ext = $_REQUEST['tel_ext'];
    $update="UPDATE datos_form2 SET nombre_empresa='$nom_empr', RNC='$rnc', identidad_empresa='$id_em', 
    departamento_formacion='$dept', alcance_empresa='$alcance', actividad_economica='$acti',
     industria='$indu', tamaño_empresa='$tama', direccion='$direc', sector='$sector',seccion='$secc'
     provincia='$provincia', municipio='$municipio', pais_operacion='$pais', telefono_pri='$telpri'
     telefono_di='$telsec', email='$mail', contraseña='$clave', tel_ext='$tel_ext' WHERE id=$cod";
    
    mysqli_query($conn_practicaphp, $update);

    header("../adm-form2.php?update=success");

    $conn_practicaphp->close();

?>