<?php
require_once('../validate_session.php');
require_once('../conecxion.php');
if (isset($_POST['dato'])) {
    // Procesa el dato recibido
    $nit = $_POST['dato'];
    
    // Realiza cualquier operación con el dato, por ejemplo, devolverlo como respuesta
    
    $actualizar="UPDATE empresa 
    set usuario_borro=null,fecha_borrado=null WHERE nit='$nit' ";
    $resultado=mysqli_query($con,$actualizar);
    echo $actualizar;
  }

?>