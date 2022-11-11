<?php

$conn_practicaphp = new mysqli("localhost", "root", "", "mfct_bd");


if ($conn_practicaphp->connect_error) {
    die("Error: ".$conn_practicaphp->connect_errno ." " .$conn_practicaphp->connect_error);
}

?>