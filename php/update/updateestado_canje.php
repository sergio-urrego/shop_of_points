<?php
require_once('../validate_session.php');
require_once('../conecxion.php');

$id=$_POST['factura'];
$empresa=$_POST['empresa'];
$cedula_cli=$_POST['cliente'];


date_default_timezone_set('America/Bogota');
$fecha_actual = date("Y-m-d h:i:s");

$actualizarestado="UPDATE historial_canje SET estado='canjeado',usuario_actualizo='{$_SESSION['user']}',fecha_actualizo='$fecha_actual' WHERE id='$id' and nit_empresa='$empresa' and cedula_cliente='$cedula_cli'";
$resultado=mysqli_query($con,$actualizarestado);

?>