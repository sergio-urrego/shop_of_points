<?php ob_start();
require_once('php/validate_session.php');
require_once('php/conecxion.php');
$numero=$_REQUEST['numerofactura']; 


// consulta para el historial de canje 

$historial="SELECT * FROM historial_canje WHERE nit_empresa='$_SESSION[empresa]' and cedula_cliente='$_SESSION[user]' and usuario_actualizo is null ";
$resultado=mysqli_query($con,$historial);
while($mostrardatos_canje=mysqli_fetch_array($resultado)){
    $nit=$mostrardatos_canje['nit_empresa'];
    $cedula_cliente=$mostrardatos_canje['cedula_cliente'];
    $cantidad_puntos=$mostrardatos_canje['total_puntos_canjeados'];
    $estado=$mostrardatos_canje['estado'];
    $fechaamostrar=$mostrardatos_canje['fecha_canje'];
    $valorbono=$mostrardatos_canje['valor_bono'];
}
    function dividirFechaYHora($fechaamostrar) {
        // Crear un objeto DateTime a partir de la fecha datetime proporcionada
        $fechaHoraObj = new DateTime($fechaamostrar);
    
        // Obtener la fecha y la hora como cadenas separadas
        $fecha = $fechaHoraObj->format('Y-m-d'); // Formato: AAAA-MM-DD
        $hora = $fechaHoraObj->format('H:i:s'); // Formato: HH:mm:ss
    
        // Retornar un arreglo asociativo con la fecha y la hora
        return array(
            'fecha' => $fecha,
            'hora' => $hora
        );
    }
    // Ejemplo de uso
    $resultado1 = dividirFechaYHora($fechaamostrar);
    
    $solofecha=$resultado1['fecha'];
    $solohora=$resultado1['hora'];
    function convertirFecha($solofecha) {
        // Parsear la fecha y obtener un array con los componentes
        $fecha_parseada = date_parse($solofecha);
    
        // Extraer el día, mes y año del array
        $dia = $fecha_parseada['day'];
        $mes = $fecha_parseada['month'];
        $anio = $fecha_parseada['year'];
    
        // Retornar los valores como un array asociativo
        return array(
            'dia' => $dia,
            'mes' => $mes,
            'anio' => $anio
        );
    }
    
    $fechaDB =$solofecha; // Fecha obtenida de la base de datos
    $fecha_convertida = convertirFecha($fechaDB);
    
    $dia= $fecha_convertida['dia'];
    $mes=$fecha_convertida['mes'] ;
    $año=$fecha_convertida['anio'];
    
    //
    function convertirMes($mes) {
        
        $fechaCompleta = date('Y-m-d', strtotime('01-'.$mes.'-2000'));
        $nombreMes = date('F', strtotime($fechaCompleta));
    
        return $nombreMes;
    }
    $nombreMes = convertirMes($mes);


    //sacar informacion del cliente 
    $info="SELECT c.cedula, c.nombre,c.correo,c.apellidos FROM clientes c inner join  detalles_clientes u on c.cedula = u.cedula_cliente where  c.cedula='$cedula_cliente' and u.nit_empresa='$nit'";
$consulta=mysqli_query($con,$info);
    while($informacion=mysqli_fetch_array($consulta)){
        $nombre_cliente=$informacion['nombre'];
        $apellido_cliente=$informacion['apellidos'];
        $correo=$informacion['correo'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/historial_canje.css">
</head>
<body>
    
    <div class="invoice animated-bg">
        <div class="invoice-header">
            <img src="http://localhost/shop_of_points/img/historial-removebg-preview.png" class=" float-right "  height="96.88" alt="Logo de la empresa">
            <br><br>
            <h1>Historial de Canje</h1>
        </div>
        <div class="row">
            <div class="col-md-6 text-left">
                <p><b>Id de canje:</b> <?php echo $numero; ?></p>
                <h4> <b>NIT empresa:</b> </h4>
                <p><?php echo $nit; ?></p>
            </div>
            
            <div class="col-md-6 text-right">
                <h4><b>Fecha:</b></h4>
                <p><b>Fecha de emisión:</b> <?php echo $dia; ?> de <?php echo $mes; ?> de <?php echo $año; ?></p>
            </div>
        </div>
        
            <table class="table mt-4">
                <thead>
                    <tr>
                        
                        <th>
                            <center><img src="http://localhost/shop_of_points/img/reloj.png"  height="25px"  alt=""></center>
                        </th>
                        
                        <th>Cédula</th>
                        <th>Nombre</th>
                        <th><center>correo</center></th>
                        <th>T.Puntos </th>
                        <th>Valor</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><b><?php echo $solohora; ?></b></th>
                        <td><?php echo $cedula_cliente; ?></td>
                        <td><?php echo $nombre_cliente; ?></td>
                        <td><?php echo $correo; ?></td>
                        <td><center><?php echo $cantidad_puntos; ?></center></td>
                        <td><?php echo $valorbono; ?></td>
                        <td><?php echo $estado; ?></td>
                    </tr>
                    <!-- Agregar más productos aquí -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php $html=ob_get_clean();

 include_once "dompdf/autoload.inc.php";
 use Dompdf\Dompdf;
 $pdf=new Dompdf();
 //
 $opcion=$pdf->getOptions();
 $opcion->set(array("isRemoteEnabled" =>true ));
 $pdf->setOptions($opcion);

//
 


 //
 //$pdf->setPaper('letter')
 $pdf->setpaper("A4","landingscape");
 $pdf->loadHtml($html);
 $pdf->render();
 $pdf->stream("archivo_pdf", array("Attachment"=>false));
 
 ?>