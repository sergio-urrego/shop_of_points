<?php
require_once('../php/validate_session.php');
require_once('../php/conecxion.php');


$contraseña=$_POST['contraseña'];

if((isset($_SESSION['usuario']))){

    $actualizacion="UPDATE usuario SET contraseña='$contraseña' where cedula='$_SESSION[usuario]'";
    $confirmacion=mysqli_query($con,$actualizacion);
    if ($confirmacion){
        ?>
        <script type="text/javascript"> 
        var opciones=confirm("su contraseña se ha restablecido correctamente")
           if (opciones==true){ 
               window.location.href="http://localhost/shop_of_points/html/index.php";
            }else{
                window.location.href="http://localhost/shop_of_points/html/actualizacion.php"
            }
        </script>
        <?php
        }
        else{
            echo"OCURRIO UN ERROR AL RESTABLECER CONTRASEÑA PORFAVOR VUELVA A INTENTARLO";
        }
        
}

if(isset($_SESSION['usuariocliente'])){
    $consultacliente="UPDATE detalles_clientes c SET c.contraseña='$contraseña'  
                      WHERE c.cedula_cliente='$_SESSION[user]' and c.nit_empresa='$_SESSION[cliente]' ";
    $confirmacion=mysqli_query($con,$consultacliente);
    if ($confirmacion){
        ?>
        <script type="text/javascript"> 
        var opciones=confirm("su contraseña se ha restablecido correctamente")
           if (opciones==true){ 
               window.location.href="http://localhost/shop_of_points/html/index.php";
            }else{
                window.location.href="http://localhost/shop_of_points/html/actualizacion.php"
            }
        </script>
        <?php
        }
        else{
            echo"OCURRIO UN ERROR AL RESTABLECER CONTRASEÑA PORFAVOR VUELVA A INTENTARLO1";
        }

}
