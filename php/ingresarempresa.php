<?php
require_once('../php/validate_session.php');
require_once('../php/conecxion.php');
$_SESSION['select_empresa']=$_POST['empresa_nit'];
$_SESSION['select_empresanombre']=$_POST['empresa_nombre'];
header("location:http://localhost/shop_of_points/html/ingresar_empresa.php")

?>