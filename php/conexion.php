<?php
$conn_practicaphp = new mysqli("localhost", "root", "123456789", "mfct_bd");

if ($conn_practicaphp->connect_error) {
    die("Error: ".$conn_practicaphp->connect_errno ." " .$conn_practicaphp->connect_error);
}

?>