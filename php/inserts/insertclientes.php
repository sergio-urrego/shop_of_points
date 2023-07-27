<?php
require_once('../validate_session.php');
require_once('../conecxion.php');
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$celular=$_POST['celular'];
$contraseña=$_POST['contraseña'];
    date_default_timezone_set('America/Bogota');
    $fecha_actual = date("Y-m-d h:i:s");


    $insertar="INSERT INTO clientes
    (cedula, nombre, apellidos,correo, celular, usuario_creo, fecha_creacion) VALUES
    ('$cedula','$nombre','$apellidos','$correo',
    '$celular','$_SESSION[user]','$fecha_actual')";
    $resultado=mysqli_query($con,$insertar);   
    
    if ($resultado){
        $complemento="INSERT INTO detalles_clientes
        ( nit_empresa,cedula_cliente, contraseña,usuario_creo, fecha_creo) VALUES 
        ('$_SESSION[empresa]','$cedula','$contraseña','$_SESSION[user]','$fecha_actual')";
        $verificar=mysqli_query($con,$complemento);
    }
?>