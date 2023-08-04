<?php ob_start()?>
<!DOCTYPE html>
<html lang="en">
<?php
$user="root";
$pass="";
$server="localhost";
$db="shopofpoints";

$con=mysqli_connect($server,$user,$pass,$db) or die ("Error al conectar a la base de datos");
mysqli_set_charset($con,'utf8');
session_start();

//
$numero=$_REQUEST['numerofactura']; 
$nit=$_SESSION['empresa'];
$cedula_cliente=$_SESSION['user'];
//
$puntos="SELECT puntos_porcompra,cedula_cliente,nit_empresa, fecha_factura, valor_compra, estado FROM acumulado_compras where numero_factura='$numero' and nit_empresa='$nit' and cedula_cliente='$cedula_cliente'";
$consulta=mysqli_query($con,$puntos);
    while($factura=mysqli_fetch_array($consulta)){
        $cantidad=$factura['puntos_porcompra'];
        $valor=$factura['valor_compra'];
        $fecha_factura=$factura['fecha_factura'];
        $estado=$factura['estado'];
    }
//
$info="SELECT c.cedula, c.nombre,c.correo, c.celular, u.contraseña FROM clientes c inner join  detalles_clientes u on c.cedula = u.cedula_cliente where  c.cedula='$cedula_cliente' and u.nit_empresa='$nit'";
$consulta=mysqli_query($con,$info);
    while($informacion=mysqli_fetch_array($consulta)){
        $nombre_cliente=$informacion['nombre'];
        $celular_cliente=$informacion['celular'];
        $correo=$informacion['correo'];
    }


//

function convertirFecha($fecha_factura) {
    // Parsear la fecha y obtener un array con los componentes
    $fecha_parseada = date_parse($fecha_factura);

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

$fechaDB = '2023-08-02'; // Fecha obtenida de la base de datos
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

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/factura.css">
</head>

<?php


?>
<body>

    <div class="invoice animated-bg">
        <div class="invoice-header">
            <img src="http://localhost/shop_of_points/img/proyecto-removebg.png" class=" float-right " width="100" height="96.88" alt="Logo de la empresa">
            <h1>Factura de Compra</h1>
            <p>Número de factura : <?php echo $numero ?></p>
            
        </div>
        <div class="invoice-body">
            <div class="row">
                <div class="col-md-6">
                    <h4>Información del Cliente:</h4>
                    <p>Nombre del cliente: <?php echo $nombre_cliente ?></p>
                    <p>Correo: <?php echo $correo?></p>
                    <p>Celular: <?php echo $celular_cliente ?></p>
                </div>
                <div class="col-md-6 text-right">
                    <h4>Fecha:</h4>
                    <p>Fecha de emisión:<?php echo $dia?> de <?php echo $nombreMes?> de <?php echo $año?></p>
                   
                </div>
            </div>
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th>NIT empresa</th>
                        <th>Puntos Compra</th>
                        <th>Valor Compra</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $nit ?></td>
                        <td><?php echo $cantidad ?></td>
                        <td><?php echo $valor ?></td>
                        <td><?php echo $estado ?></td>
                    </tr>
                    <!-- Agregar más productos aquí -->
                </tbody>
            </table>
            <div class="text-right mt-4">
                <h4>Total a pagar: $<?php echo $valor ?></h4>
            </div>
        </div>
    </div>
    
    </header>
</body>
</html>
<?php $html=ob_get_clean();

 include_once "dompdf/autoload.inc.php";
 use Dompdf\Dompdf;
 $pdf=new Dompdf();
 //
 $opcion=$pdf->getOptions();
 $opcion->set(array("isRemoteEnabled" =>true));
 $pdf->setOptions($opcion);
 //
 //$pdf->setPaper('letter')
 $pdf->setpaper("A4","landingscape");
 $pdf->loadHtml($html);
 $pdf->render();
 $pdf->stream("archivo_pdf", array("Attachment"=>false));
 
 ?>