<?php
$conn_practicaphp = new mysqli("localhost", "root", "c55h32o5n4Mg", "mfct_bd");

if ($conn_practicaphp->connect_error) {
    die("Error: ".$conn_practicaphp->connect_errno ." " .$conn_practicaphp->connect_error);
}

?>