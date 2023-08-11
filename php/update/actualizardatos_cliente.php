<?php
require_once('../validate_session.php');
require_once('../conecxion.php');
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$celular=$_POST['celular'];
$contraseña=$_POST['contraseña'];

    $insertar="UPDATE  clientes SET
    ( nombre, apellidos,correo, celular) VALUES
    ('$nombre','$apellidos','$correo',
    '$celular')";
    $resultado=mysqli_query($con,$insertar); 
    echo $insertar;  
    
    // if ($resultado){
    //     $complemento="UPDATE detalles_clientes SET
    //     ( contraseña,) VALUES 
    //     ('$contraseña') where nit_empresa='$_SESSION[empresa] and cedula_cliente='$contraseña'";
    //     $verificar=mysqli_query($con,$complemento);
    // }
?>