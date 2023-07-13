<?php
require_once('../validate_session.php');
require_once('../conecxion.php');
date_default_timezone_set('America/Bogota');
$fecha_actual = date("Y-m-d h:i:s");

$actualizar="UPDATE c 
set c.cedula='$_POST[cedula]', c.nombre='$_POST[nombre]', 
c.apellidos='$_POST[apellidos]', c.correo='$_POST[correo]', 
c.celular='$_POST[celular]', c.usuario_actualizo='$_SESSION[user]',
c.fecha_actualizo='$fecha_actual' from detalles_clientes dc inner join clientes c on c.cedula=.cd.cedula_cliente WHERE dc.nit='$_SESSION[select_empresa]' ";
$resultado=mysqli_query($con,$actualizar);
echo $actualizar;
if ($resultado){
    echo "entro";
}

?>