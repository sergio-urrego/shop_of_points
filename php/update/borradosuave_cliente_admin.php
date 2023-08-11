<?php
require_once('../validate_session.php');
require_once('../conecxion.php');

$cedula=$_POST['cliente_cedula'];

if ($_POST['tipo_opcion']==1){
    date_default_timezone_set('America/Bogota');
    $fecha_actual = date("Y-m-d h:i:s");

    $actualizar="UPDATE detalles_clientes 
    set usuario_borro='$_SESSION[user]',fecha_borrado='$fecha_actual' WHERE cedula_cliente='$cedula' and nit_empresa='$_SESSION[select_empresa]' ";
    $resultado=mysqli_query($con,$actualizar);
    echo $actualizar;
}else if ($_POST['tipo_opcion']==2){
    $delete="DELETE FROM detalles_clientes where cedula_cliente='$cedula' and nit_empresa='$_SESSION[select_empresa]'";
    $resultado1=mysqli_query($con,$delete);
    // if($resultado1){
    //     $eliminar="DELETE FROM sistema_puntos where nit_empresa='nit'";
    //     $resultado2=mysqli_query($con,$eliminar);
    // }
    
}

?>