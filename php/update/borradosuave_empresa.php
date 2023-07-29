<?php
require_once('../validate_session.php');
require_once('../conecxion.php');
date_default_timezone_set('America/Bogota');
$fecha_actual = date("Y-m-d h:i:s");

$actualizar="UPDATE empresa 
set usuario_borro='$_SESSION[user]',fecha_borro='$fecha_actual' WHERE nit='$_POST[empresa_nit]' ";
$resultado=mysqli_query($con,$actualizar);

?>