<script type="text/javascript"> 
var opciones=confirm("Estas seguro de salir de devolverte?")
   if (opciones==true){ <?php
       session_start(); 
       session_destroy(); ?>
       window.location.href="http://localhost/shop_of_points/html/recuperar.php";}
       else{
       window.location.href="http://localhost/shop_of_points/html/actualizacion.php";
       }
</script>