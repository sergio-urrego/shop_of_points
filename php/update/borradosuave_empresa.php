<?php
require_once('../validate_session.php');
require_once('../conecxion.php');

$nit=$_POST['empresa_nit'];

if ($_POST['tipo_opcion']==1){
    echo "entro en el si";
    date_default_timezone_set('America/Bogota');
    $fecha_actual = date("Y-m-d h:i:s");

    $actualizar="UPDATE empresa 
    set usuario_borro='$_SESSION[user]',fecha_borrado='$fecha_actual' WHERE nit='$nit' ";
    $resultado=mysqli_query($con,$actualizar);
    echo $actualizar;
}else if ($_POST['tipo_opcion']==2){
    $delete="DELETE FROM empresas where nit='$nit'";
    $resultado1=mysqli_query($con,$delete);
    if($resultado1){
        $eliminar="DELETE FROM sistema_puntos where nit_empresa='nit'";
        $resultado2=mysqli_query($con,$eliminar);
    }
    
}

?>