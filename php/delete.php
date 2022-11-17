<?php
    include_once("conexion.php");
    
        $id = $_REQUEST['id'];

        $delete="DELETE FROM datos_form3 WHERE id=$id";
        //echo $delete;
        mysqli_query($conn_practicaphp, $delete);
        
        header("location: adm-form3.php?insert=success");

        $conn->close();
    
?>