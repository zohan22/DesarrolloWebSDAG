<?php
include('operaciones.php');
session_start();
    echo $_SESSION["ca"]->MostrarCalculos();
?>

