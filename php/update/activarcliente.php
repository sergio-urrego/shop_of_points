<?php
require_once('../validate_session.php');
require_once('../conecxion.php');
if (isset($_POST['dato'])) {
    // Procesa el dato recibido
    $cedula = $_POST['dato'];
    
    // Realiza cualquier operación con el dato, por ejemplo, devolverlo como respuesta
    
    $actualizar="UPDATE detalles_clientes 
    set usuario_borro=null,fecha_borrado=null WHERE cedula_cliente='$cedula' and nit_empresa='$_SESSION[empresa]' ";
    $resultado=mysqli_query($con,$actualizar);
    echo $actualizar;
  }

?>