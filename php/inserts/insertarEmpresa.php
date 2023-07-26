<?php
require_once('../validate_session.php');
require_once('../conecxion.php');
    date_default_timezone_set('America/Bogota');
    $fecha_actual = date("Y-m-d h:i:s");
    $agregar="INSERT INTO empresa 
    (nit, nombre, direccion, correo_empresa, telefono, celular, usuario_creo, fecha_creo) VALUES
    ('$_POST[nit]','$_POST[nombre]','$_POST[direccion]','$_POST[correo]','$_POST[telefono]',
    '$_POST[celular]','$_SESSION[user]','$fecha_actual')";
    $resultado=mysqli_query($con,$agregar);   
    
    if ($resultado){
        $consulta="INSERT INTO sistema_puntos
        ( `nit_empresa`,`porc_bono`, `tope_canje`, `usuario_creo`, `fecha_creo`) VALUES 
        ('$_POST[nit]','$_POST[porcentaje]','$_POST[tope]','$_SESSION[user]','$fecha_actual')";
        $verificar=mysqli_query($con,$consulta);
        echo $agregar;
    }
?>