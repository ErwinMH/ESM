<?php
    include_once("../conexion.php");
    
        $id = $_REQUEST['id'];

        $delete="DELETE FROM datos_form2 WHERE id=$id";
        //echo $delete;
        mysqli_query($conn_practicaphp, $delete);
        
        header("location: ../adm-form2.php?delete=success");

        $conn->close();
    
?>