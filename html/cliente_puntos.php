<?php
 require_once('../php/validate_session.php');
 require_once('../php/conecxion.php');

 //consulta para saber el total de puntos 
 $consulta = "SELECT SUM(puntos_porcompra) AS total_puntos FROM acumulado_compras WHERE nit_empresa='{$_SESSION['empresa']}' AND cedula_cliente='{$_SESSION['user']}' AND estado='activo'";

 // Ejecutar la consulta
 $resultado = mysqli_query($con, $consulta);
 
 // Verificar si la consulta fue exitosa
 if ($resultado) {
     // Obtener el resultado como un arreglo asociativo
     $fila = mysqli_fetch_assoc($resultado);
     
     // Obtener el total de puntos
     $totalPuntos = $fila['total_puntos'];
 } else {
     echo "Error en la consulta: " . mysqli_error($con);
 }

//consulta para llenar los datos del usuario 
$consulta2="SELECT c.cedula,c.nombre,c.apellidos,c.correo,c.celular, u.nit_empresa FROM clientes c inner join  detalles_clientes u on c.cedula = u.cedula_cliente where  c.cedula='{$_SESSION['user']}'  and u.nit_empresa='{$_SESSION['empresa']}'";
$resultado2=mysqli_query($con,$consulta2);

while($datos=mysqli_fetch_assoc($resultado2)){
    $cedula=$datos['cedula'];
    $nombre=$datos['nombre'];
    $apellidos=$datos['apellidos'];
    $correo=$datos['correo'];
    $celular=$datos['celular'];
}

$consulta3="SELECT valor_punto, nit_empresa FROM sistema_puntos  where  nit_empresa='{$_SESSION['empresa']}'";
$resultado3=mysqli_query($con,$consulta3);
while($dato=mysqli_fetch_array($resultado3)){
    $valor=$dato['valor_punto'];
    
}

$valorcanje=$totalPuntos*$valor;
$suma = $valorcanje;
$suma_formateada = number_format($suma, 0, '.', ',');
$suma_formateada;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cliente_puntos.css">
</head>
<body>
    <!--    <header id="header" class="contenedor-header">
        fondo animado
        <div class="fondo-animado">
            <span class="uno delay-1"></span>
            <span class="dos"></span>  --el delay sirve para que los cubos vallan en distintas direcciones
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
        -->
         
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
                    <a href="../html/filtro_compras.php" title="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                      <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                    </svg>
                        <span class="fondo-violeta">compras</span>
                    </a>
                </li>

                <li>
                    <a href="../html/filtro_historialcanje.php" title="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                      <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                      <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                      <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                        <span class="fondo-cielo">historial canjes</span>
                    </a>
                </li>

                <li>
                    <a href="../html/cliente_puntos.php" title="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                      <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                    </svg>
                        <span class="fondo-verde">Puntos</span>
                    </a>
                </li>
<!-- 
                <li>
                    <a  title="" href="../html/actualizardatos_cliente.php" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-gear-fill list_button list_button_click text-white" viewBox="0 0 16 16">
                      <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                    </svg>
                        <span class="fondo-amarillo">ajustes</span>
                    </a>
                </li> -->

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
        
<div class="container1">
    <div class="row">
        <img class="imagen" src="../img/Usuarios.webp" alt="foto" width="10px" height="15px"> 

        <div class="col-10">
           <h1 class="espacio1">SHOP OF <b> POINST</b></h1>
           <h1 class="espacio2"><b class="b1">Puntos</b></h1> 
           <img src="../img/Captura4.png" alt="">

            <section class="informacion">
                <h1><b>Cedula:</b> <?php echo $cedula ?> </h1>
                <div class="nombre">
                    <p><b><?php echo $nombre." ".$apellidos ?> </b></p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                    <b><?php echo $correo ?> </b>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                    <b><?php echo $celular ?> </b>
                    </p>
                </div>
            </section>            
        </div>
        
        <div class=" col-2">
            <h1 class="t_puntos">Total Puntos</h1>
            <div class="container2">
                <div class="cuadro">
                    <h1><center><img src="../img/numeral.png" width="50px" alt="">
                        <?php echo $totalPuntos ?> <br></center>
                        <img src="../img/peso1.png" alt="" width="50px">
                        <?php echo $suma_formateada;?></h1>
                </div>
            </div>
            <div class="puntos">
                <button  onclick="canjearpuntos()" >
                    <svg  xmlns="http://www.w3.org/2000/svg" width="46" height="56"  class="bi bi-cash-coin" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                        <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                        <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                        <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                    </svg>
                    <h2 class="canjear">canjear</h1>
                </button>
            </div>
        </div>
    </div>
           
    <img class="imagen3" src="../img/fondo_usuarios2.png" alt="" height="145px">
    <img class="imagen4" src="../img/fondo_usuarios2.png" alt="" height="145px">
</div>
<script type="text/javascript" src="../jquery/jquery.js"></script>
    <script type="text/javascript" src="../jquery/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/cerrarseccion.js"></script>
    <script src="../js/canjearpuntos.js"></script>
    <script src="../js/ajustes.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- jQuery 2.2.3 -->
    <script src="../jquery/jquery-2.2.3.min.js"></script>
</body>
</html>