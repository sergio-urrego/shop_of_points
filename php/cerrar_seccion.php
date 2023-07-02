<script type="text/javascript"> 
var opciones=confirm("Estas seguro de salir de la plataforma?")
   if (opciones==true){ <?php
       session_start(); 
       session_destroy(); ?>
       window.location.href="http://localhost/shop_of_points/html/index.php";}
       else{
       window.location.href="http://localhost/shop_of_points/html/administrador.html";
       }
</script>