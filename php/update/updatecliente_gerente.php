<?php
require_once('../validate_session.php');
require_once('../conecxion.php');
date_default_timezone_set('America/Bogota');
$fecha_actual = date("Y-m-d h:i:s");

$actualizar="UPDATE clientes c  
INNER JOIN detalles_clientes dc   
ON c.cedula = dc.cedula_cliente  
SET c.cedula='$_POST[cedula]', c.nombre='$_POST[nombre]', 
c.apellidos='$_POST[apellidos]', c.correo='$_POST[correo]', 
c.celular='$_POST[celular]', c.usuario_actualizo='$_SESSION[user]',c.fecha_actualizacion='$fecha_actual' 
WHERE dc.nit_empresa='$_SESSION[empresa]' and c.cedula='$_POST[cedula]'";
$resultado=mysqli_query($con,$actualizar);
echo $actualizar



?>