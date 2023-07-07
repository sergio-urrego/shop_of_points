<?php
require_once('../validate_session.php');
require_once('../conecxion.php');
date_default_timezone_set('America/Bogota');
$fecha_actual = date("Y-m-d h:i:s");

$actualizar="UPDATE empresa c 
set c.nit='$_POST[empresa_nit]', c.nombre='$_POST[empresa_nombre]', 
c.direccion='$_POST[empresa_direccion]', c.correo_empresa='$_POST[empresa_correo]', 
c.celular='$_POST[empresa_celular]', c.telefono='$_POST[empresa_telefono]', c.usuario_actualizo='$_SESSION[user]',
c.fecha_actualizo='$fecha_actual' WHERE c.nit='$_POST[empresa_nit]' ";
$resultado=mysqli_query($con,$actualizar);
echo$resultado

?>