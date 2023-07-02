<?php
require_once('../php/conecxion.php');
session_start();

$solicitud=$_SESSION['correo'];
$cedula=$_SESSION['user'];
$empresa=$_SESSION['empresa'];

$consulta="SELECT * FROM usuario WHERE correo='$solicitud' and cedula='$cedula' and codigo_empresa='$empresa' " ;
$resultado=mysqli_query($con,$consulta);


$consultacliente="SELECT c.cedula,c.correo, u.nit_empresa FROM clientes c inner join  detalles_clientes u on c.cedula = u.cedula_cliente  WHERE c.correo='$solicitud' and c.cedula='$cedula' and u.nit_empresa='$empresa'";
$resultadocliente=mysqli_query($con,$consultacliente);



if ($resultado){
    session_start();
    $_SESSION['user']=$cedula;
    $_SESSION['usuario'];
    header("location:http://localhost/shop_of_points/html/actualizacion.php");

}
else if ($resultadocliente){ 
    session_start();
    $_SESSION['user']=$cedula;
    $_SESSION['cliente']=$empresa;
    header("location:http://localhost/shop_of_points/html/actualizacion.php");
    
}else{
    echo"ERROR USUARIO Y/O CORREO NO EXISTEN";
}
?>