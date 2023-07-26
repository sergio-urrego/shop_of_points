<?php

require_once('conecxion.php');

$cedula=$_POST['cedula'];
$contraseña=$_POST['contraseña'];
$nitempresa=$_POST['empresa'];

$consulta="SELECT * FROM usuario WHERE cedula='$cedula' and contraseña='$contraseña'" ;
$resultado=mysqli_query($con,$consulta);
$validacion=mysqli_num_rows($resultado);

$consulta2="SELECT c.cedula, u.nit_empresa, u.contraseña FROM clientes c inner join  detalles_clientes u on c.cedula = u.cedula_cliente where  c.cedula='$cedula' and u.contraseña='$contraseña' and u.nit_empresa='$nitempresa'";
$resultado2=mysqli_query($con,$consulta2);
$validacion2=mysqli_num_rows($resultado2);

if ($validacion>0){
    while ($codigo=mysqli_fetch_array($resultado)){ 
        $valor=$codigo['codigo_tipo'];
        $empresa=$codigo['nit_empresa'];
        if ($valor==11111 & $empresa==$nitempresa){
            session_start();
            $_SESSION['user']=$cedula;
            # code...

            header("location:http://localhost/shop_of_points/html/administrador.php");

        } 
        if($valor==10000 & $empresa==$nitempresa){
            session_start();
            ob_start();
            $_SESSION['user']=$cedula;
            $_SESSION['empresa']=$nitempresa;
            header("location:http://localhost/shop_of_points/html/gerente.php");
        }}
}else if($validacion2>0){
    session_start();
    $_SESSION['user']=$cedula;
    $_SESSION['empresa']=$nitempresa;
    header("location:http://localhost/shop_of_points/html/usuarios.php");
}else{
    echo"ERROR USUARIO Y/O CLIENTE NO EXISTEN";
}

mysqli_free_result($resultado);
mysqli_close($con);
mysqli_free_result($resultado2);


