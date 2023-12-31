<?php
require_once('../php/validate_session.php');
require_once('../php/conecxion.php');
$numero=$_POST['factura'];
$nit=$_POST['empresa'];
$cedula_cliente=$_POST['cliente'];
$valor=$_POST['valor'];
$fecha_factura=$_POST['fecha'];
$estado=$_POST['estado'];
//
$puntos="SELECT puntos_porcompra,cedula_cliente,nit_empresa FROM acumulado_compras where numero_factura='$numero' and nit_empresa='$nit' and cedula_cliente='$cedula_cliente'";
$consulta=mysqli_query($con,$puntos);
    while($puntoscompra=mysqli_fetch_array($consulta)){
        $cantidad=$puntoscompra['puntos_porcompra'];
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

$fechaDB =$fecha_factura; // Fecha obtenida de la base de datos
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


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Factura de Producto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/factura.css">

</head>

<body>
    <!--circulo de carga-->
    <header id="header" class="contenedor-header">
        <!--fondo animado-->
        <div class="fondo-animado">
            <span class="uno delay-1"></span>
            <span class="dos"></span> <!--el delay sirve para que los cubos vallan en distintas direcciones-->
            <span class="tres delay-4"></span>
            <span class="cuatro"></span>

            <span class="uno delay-3"></span>
            <span class="dos delay-7"></span>
            <span class="tres delay-5"></span>
            <span class="cuatro delay-4"></span>

            <span class="uno"></span>
            <span class="dos delay-2"></span>
            <span class="tres delay-5"></span>
            <span class="cuatro delay-3"></span>

        </div>
       <!--menu-->
       <nav class="menu">
        <ul class="ul-home">
            <li>
                <a href="../html/usuarios.php" title="" class="a-inicio">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="90px"  fill="currentColor" class="bi bi-house-gear-fill" viewBox="0 0 16 16">
                        <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5Z"/>
                        <path d="M11.07 9.047a1.5 1.5 0 0 0-1.742.26l-.02.021a1.5 1.5 0 0 0-.261 1.742 1.5 1.5 0 0 0 0 2.86 1.504 1.504 0 0 0-.12 1.07H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6 4.724 4.724a1.5 1.5 0 0 0-1.654 1.03Z"/>
                        <path d="m13.158 9.608-.043-.148c-.181-.613-1.049-.613-1.23 0l-.043.148a.64.64 0 0 1-.921.382l-.136-.074c-.561-.306-1.175.308-.87.869l.075.136a.64.64 0 0 1-.382.92l-.148.045c-.613.18-.613 1.048 0 1.229l.148.043a.64.64 0 0 1 .382.921l-.074.136c-.306.561.308 1.175.869.87l.136-.075a.64.64 0 0 1 .92.382l.045.149c.18.612 1.048.612 1.229 0l.043-.15a.64.64 0 0 1 .921-.38l.136.074c.561.305 1.175-.309.87-.87l-.075-.136a.64.64 0 0 1 .382-.92l.149-.044c.612-.181.612-1.049 0-1.23l-.15-.043a.64.64 0 0 1-.38-.921l.074-.136c.305-.561-.309-1.175-.87-.87l-.136.075a.64.64 0 0 1-.92-.382ZM12.5 14a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Z"/>
                    </svg>
                    <span>inicio</span>
                </a>
            </li>
        </ul>

        <ul class="ul-enlaces">
            <li>
                <a href="#" title="">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                </svg>
                    <span class="fondo-violeta">compras</span>
                </a>
            </li>

            <li>
                <a href="#" title="">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                  <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                  <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                  <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
                    <span class="fondo-cielo">historial canjes</span>
                </a>
            </li>

            <li>
                <a href="#" title="">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                  <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                </svg>
                    <span class="fondo-verde">Puntos</span>
                </a>
            </li>

            <li>
                <a href="#" title="">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                </svg>
                    <span class="fondo-amarillo">ajustes</span>
                </a>
            </li>
            <li>
                <a href="#" type="button" onclick="cerrarseccion()"  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                      </svg>
                      <span class="fondo-rojo">cerrar</span>
                </a>
            </li>
        </ul>
    </nav>
        <div class="container mt-4 p-3 rounded ">
            <div class="invoice animated-bg">
                <div class="invoice-header">
                    <img src="..//img/proyecto-removebg.png" alt="Logo de la empresa">
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
                       
                        <a href="../html/filtro_compras.php" class="btn btn-primary">Devolver</a>
                        <a href="../imprimirfactura.php?numerofactura=<?php echo $numero ;?>" class="btn btn-success btn-descargar"  role="button" target="_blank" > Descargar</a>
                    </div>



                </div>

            </div>
        </div>
        <script>
        // Crea el botón y añádelo al documento
        const botonAlternar = document.createElement("button");
        botonAlternar.innerHTML = '<i class="fas fa-pause" ></i>'; // Agregar icono
        botonAlternar.id = "botonAlternar";
        botonAlternar.classList.add("btn", "btn-primary", "btn-sm"); // Agregar la clase de boostrap
        document.body.appendChild(botonAlternar);

        // Obtiene la animación
        const animacion = document.querySelector(".fondo-animado");

        let animacionVisible = true; // Variable para controlar el estado de la animación

        // Agrega el evento de clic al botón para alternar la visibilidad de la animación
        botonAlternar.addEventListener("click", () => {
            if (animacionVisible) {
                animacion.style.display = "none"; // Oculta la animación
            } else {
                animacion.style.display = "block"; // Muestra la animación
            }
            animacionVisible = !animacionVisible; // Cambia el estado
        });

    </script>

    </header>


    <script>

        // Animación de resaltado de la tabla
        const tableRows = document.querySelectorAll('tbody tr');
        tableRows.forEach((row, index) => {
            anime({
                targets: row,
                opacity: [0, 1],
                duration: 800,
                delay: index * 100,
                easing: 'easeInOutQuad',
            });
        });
    </script>
    <script type="text/javascript" src="../jquery/jquery.js"></script>
    <script type="text/javascript" src="../jquery/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/cerrarseccion.js"></script>
    <script src="../js/ajustes.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- jQuery 2.2.3 -->
    <script src="../jquery/jquery-2.2.3.min.js"></script>
    


</body>

</html>

