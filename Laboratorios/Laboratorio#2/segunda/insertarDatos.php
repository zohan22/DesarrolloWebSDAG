<?php
include('operaciones.php');
session_start();
$_SESSION["a"] = $_GET["a"];
$_SESSION["b"] = $_GET["b"];
$_SESSION["c"] = $_GET["c"];

$_SESSION["ca"] = new Operaciones($_SESSION["a"], $_SESSION["b"], $_SESSION["c"]);
?>
<meta http-equiv="refresh" content="2;url=menu.php">