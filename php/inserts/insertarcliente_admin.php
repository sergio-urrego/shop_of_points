<?php
require_once('../validate_session.php');
require_once('../conecxion.php');
    date_default_timezone_set('America/Bogota');
    $fecha_actual = date("Y-m-d h:i:s");
    $agregar="INSERT INTO clientes
    (cedula, nombre, apellidos,correo, celular, usuario_creo, fecha_creacion) VALUES
    ('$_POST[cedula]','$_POST[nombre]','$_POST[apellidos]','$_POST[correo]',
    '$_POST[celular]','$_SESSION[user]','$fecha_actual')";
    $resultado=mysqli_query($con,$agregar);   
    
    if ($resultado){
        $consulta="INSERT INTO detalles_clientes
        ( nit_empresa,cedula_cliente, contraseña,usuario_creo, fecha_creo) VALUES 
        ('$_SESSION[select_empresa]','$_POST[cedula]','$_POST[contraseña]','$_SESSION[user]','$fecha_actual')";
        $verificar=mysqli_query($con,$consulta);
    }
?>