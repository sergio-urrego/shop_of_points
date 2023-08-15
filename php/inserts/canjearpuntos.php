<?php
 require_once('../validate_session.php');
 require_once('../conecxion.php');
 $consulta = "SELECT SUM(puntos_porcompra) AS total_puntos FROM acumulado_compras WHERE nit_empresa='{$_SESSION['empresa']}' AND cedula_cliente='{$_SESSION['user']}' AND estado='activo'";

 // Ejecutar la consulta
 $resultado = mysqli_query($con, $consulta);
 
 // Verificar si la consulta fue exitosa
 if ($resultado==true) {
     // Obtener el resultado como un arreglo asociativo
     $fila = mysqli_fetch_assoc($resultado);
     
     // Obtener el total de puntos
     $totalPuntos = $fila['total_puntos'];
     //
     $consulta3="SELECT valor_punto, nit_empresa FROM sistema_puntos  where  nit_empresa='{$_SESSION['empresa']}'";
     $resultado3=mysqli_query($con,$consulta3);
     while($dato=mysqli_fetch_array($resultado3)){
         $valor=$dato['valor_punto'];
    }
    $valorcanje=$totalPuntos*$valor;
    $suma = $valorcanje;
    $suma_formateada = number_format($suma, 0, '.', ',');
    $suma_formateada;
    //
    
    date_default_timezone_set('America/Bogota');
    $fecha_actual = date("Y-m-d h:i:s");
    $solofecha=date("Y-m-d");

    //
    if ($resultado==true){
        $generarhistorialcanje="INSERT INTO historial_canje(nit_empresa, cedula_cliente, fecha_canje,fecha, total_puntos_canjeados, valor_bono, estado) 
                                VALUES ('{$_SESSION['empresa']}','{$_SESSION['user']}','$fecha_actual','$solofecha','$totalPuntos','$suma_formateada','en proceso')";
        $resultado4=mysqli_query($con,$generarhistorialcanje);
        echo $generarhistorialcanje;
        if($resultado4==true){
            date_default_timezone_set('America/Bogota');
            $fecha_actual = date("Y-m-d h:i:s");
            $actualizarestado="UPDATE acumulado_compras SET estado='canjeado', fecha_actualizacion='$fecha_actual' WHERE nit_empresa='{$_SESSION['empresa']}' AND cedula_cliente='{$_SESSION['user']}' AND estado='activo'";
            $resultado5=mysqli_query($con,$actualizarestado);
            if ($resultado5==true){
                header("location:http://localhost/shop_of_points/html/filtro_historialcanje.php");
            }
        }
    }
        
 } else {
     echo "Error en la consulta: " . mysqli_error($con);
 }



?>