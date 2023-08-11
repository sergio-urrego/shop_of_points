<?php
require_once('../validate_session.php');
require_once('../conecxion.php');
date_default_timezone_set('America/Bogota');
$fecha_actual = date("Y-m-d h:i:s");
$nit=$_POST['empresa_nit'];
$nombre=$_POST['empresa_nombre'];
$direccion=$_POST['empresa_direccion'];
$correo=$_POST['empresa_correo'];
$celular=$_POST['empresa_celular'];
$telefono=$_POST['empresa_telefono'];

$actualizar="UPDATE empresa c 
set  c.nombre='$nombre', 
c.direccion='$direccion', c.correo_empresa='$correo', 
c.celular='$celular', c.telefono='$telefono', c.usuario_actualizo='$_SESSION[user]',
c.fecha_actualizo='$fecha_actual' WHERE c.nit='$nit' ";
$resultado=mysqli_query($con,$actualizar);

echo $actualizar

?>