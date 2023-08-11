<?php
 require_once('../php/validate_session.php');
 require_once('../php/conecxion.php');
$cedula=$_POST['cedula']
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    
    <link rel="stylesheet" href="../css/historial_administrador.css">
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
                    <a href="../html/administrador.php" title="" class="a-inicio">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="90px"  fill="currentColor" class="bi bi-house-gear-fill" viewBox="0 0 16 16">
                            <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5Z"/>
                            <path d="M11.07 9.047a1.5 1.5 0 0 0-1.742.26l-.02.021a1.5 1.5 0 0 0-.261 1.742 1.5 1.5 0 0 0 0 2.86 1.504 1.504 0 0 0-.12 1.07H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6 4.724 4.724a1.5 1.5 0 0 0-1.654 1.03Z"/>
                            <path d="m13.158 9.608-.043-.148c-.181-.613-1.049-.613-1.23 0l-.043.148a.64.64 0 0 1-.921.382l-.136-.074c-.561-.306-1.175.308-.87.869l.075.136a.64.64 0 0 1-.382.92l-.148.045c-.613.18-.613 1.048 0 1.229l.148.043a.64.64 0 0 1 .382.921l-.074.136c-.306.561.308 1.175.869.87l.136-.075a.64.64 0 0 1 .92.382l.045.149c.18.612 1.048.612 1.229 0l.043-.15a.64.64 0 0 1 .921-.38l.136.074c.561.305 1.175-.309.87-.87l-.075-.136a.64.64 0 0 1 .382-.92l.149-.044c.612-.181.612-1.049 0-1.23l-.15-.043a.64.64 0 0 1-.38-.921l.074-.136c.305-.561-.309-1.175-.87-.87l-.136.075a.64.64 0 0 1-.92-.382ZM12.5 14a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Z"/>
                        </svg>
                        <span>Home</span>
                    </a>
                </li>
            </ul>
            <ul class="ul-enlaces">
            <li>
                    <a href="../html/ingresar_empresa.php" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-house-check-fill" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                            <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.707l.547.547 1.17-1.951a.5.5 0 1 1 .858.514Z"/>
                        </svg>
                        <span class="fondo-verde">Inicio</span>
                    </a>
                </li>

                <li>
                    <a href="../html/agregar_usuario_admin.php" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg>
                          <span class="fondo-verde">agregar suario</span>
                    </a>
                </li>
                <li>
                    <a href="../html/listado_clientes_admin.php" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-clipboard2-check-fill" viewBox="0 0 16 16">
                        <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
                        <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5Zm6.769 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708Z"/>
                    </svg>
                    <span class="fondo-rojo">usuarios</span>
                    </a>
                </li>

                <li>
                    <a href="../html/control_clientes_admin.php" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-bar-chart-line" viewBox="0 0 16 16">
                            <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
                        </svg>
                        <span class="fondo-verde">control</span>                         
                    </a>
                </li>

                <li>
                    <a href="#" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                      <span class="fondo-cielo">Historial</span>
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
        <?php 

        // consulta general de la empresa
        $historial="SELECT c.cedula, c.nombre, c.usuario_creo,c.fecha_creacion, c.usuario_actualizo,
                           c.fecha_actualizacion, u.usuario_borro,
                           u.fecha_borrado, u.nit_empresa 
                    FROM clientes c inner join  detalles_clientes u on c.cedula = u.cedula_cliente 
                     WHERE u.nit_empresa='$_SESSION[select_empresa]' and c.cedula='$cedula' ";
        $resultado=mysqli_query($con,$historial);
        while ($insertar=mysqli_fetch_array($resultado)){ 
            $nombre=$insertar['nombre'];
            $creado=$insertar['usuario_creo'];
            $fecha_creo=$insertar['fecha_creacion'];
            $quien_actualizo=$insertar['usuario_actualizo'];
            $fecha_actualizo=$insertar['fecha_actualizacion'];
            $quien_borro=$insertar['usuario_borro'];
            $fecha_borro=$insertar['fecha_borrado'];
        }
        echo $fecha_borro;

        $nomcreador="SELECT cedula,nombre,apellidos FROM usuario where cedula=$creado";
        $resultado1=mysqli_query($con,$nomcreador);
        while ($consulta=mysqli_fetch_array($resultado1)){ 
            $nombre_creador=$consulta['nombre'];
            $apellidos=$consulta['apellidos'];
        }
        if($fecha_actualizo !=null || $fecha_actualizo !=''){
            function dividirFechaYHora($fecha_actualizo) {
                // Crear un objeto DateTime a partir de la fecha datetime proporcionada
                $fechaHoraObj = new DateTime($fecha_actualizo);
            
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
            $resultado2 = dividirFechaYHora($fecha_actualizo);
            
            $fecha_actualizo=$resultado2['fecha'];
            $hora_actualizo=$resultado2['hora'];

        }else if($fecha_actualizo==null || $fecha_actualizo==''){
            $fecha_actualizo='no se ah actualizado';
            $hora_actualizo='';        
        }

        //
        if($fecha_borro!=null || $fecha_borro!=''){
            function dividirFechaYHoraborro($fecha_borro) {
                // Crear un objeto DateTime a partir de la fecha datetime proporcionada
                $fechaHoraObj = new DateTime($fecha_borro);
            
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
            $resultado3 = dividirFechaYHoracreo($fecha_borro);
            
            $fecha_borro=$resultado3['fecha'];
            $hora_borro=$resultado3['hora'];

            

        }else if($fecha_borro==null || $fecha_borro==''){
            $$fecha_borro='';
            $hora_borro='';        
        }

        function dividirFechaYHoracreo($fecha_creo) {
            // Crear un objeto DateTime a partir de la fecha datetime proporcionada
            $fechaHoraObj = new DateTime($fecha_creo);
        
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
        $resultado1 = dividirFechaYHoracreo($fecha_creo);
        
        $fecha_creo=$resultado1['fecha'];
        $hora_creo=$resultado1['hora'];


        //
        
                

        //condicion para ver si hay una actualizacion, si la hay hace la consulta de quien fue 
        if ($quien_actualizo !=null || $quien_actualizo !=''){
            $nomactualizo="SELECT cedula,nombre,apellidos FROM usuario where cedula='$quien_actualizo'";
            $resultado3=mysqli_query($con,$nomactualizo);
            while ($consulta2=mysqli_fetch_array($resultado3)){ 
            $nombre_actualizo=$consulta2['nombre'];
            $apellidos_actualizo=$consulta2['apellidos'];
            }   
            }
            else if ($quien_actualizo==null || $quien_actualizo==''){
                $nombre_actualizo="";
        }
        
        //condicion para ver si la empresa esta borrada, si lo esta hace la consulta de quien lo hizo
        if ($quien_borro !=null || $quien_borro !=''){
            
            $nomborro="SELECT cedula,nombre,apellidos FROM usuario where cedula='$quien_borro'";
            $resultado4=mysqli_query($con,$nomborro);
            while ($consulta3=mysqli_fetch_array($resultado4)){ 
                $nombre_borro=$consulta3['nombre'];
                $apellidos_borro=$consulta3['apellidos'];
                
            }}
            else if ($quien_borro==null || $quien_borro==''){
                $nombre_borro="";
        }
        
        ?>

        <h1 class="titulo1">Shop of <b class="titulos">points</b><div class="empresa">cliente <b class="titulos"><?php echo $nombre ; ?></b>
                <h1 class="creo"><b><?php echo $nombre_creador; ?></b>
                <span>Creador</span>
                </h1>
        </h1>
        <div class="row">                                        
            <div class="col-12">                      
                    <h1 class="subtitulo2"><?php echo $fecha_creo; ?>
                        <span>Creada</span>
                    </h1>

                <div id="tabla">
                    <section class="table__body">
                        <table>        
                            <thead>
                                <tr>
                                <th>Cc. cliente</th>
                                <th>Nombre</th>
                                <th>Creador</th>
                                <th>Fecha_creado</th>
                                <th>actualizo</th>
                                <th>Borrado</th>
                                </tr>
                            </thead>
                                        
                               <tbody>
                                   <tr>
                                       <td><?php echo $cedula; ?></td>
                                       <td><?php echo $nombre ; ?></td>
                                       <td>
                                        <?php echo $nombre_creador; ?>
                                        <br>
                                        <?php echo $creado; ?>
                                        </td>
                                       <td ><?php echo $fecha_creo; ?></td>
                                       <td>
                                        <?php echo  $nombre_actualizo ;?>
                                        <br>
                                        <?php echo  $quien_actualizo ;?>
                                        </td>
                                       <td><?php echo $nombre_borro ?></td>
                                   </tr>
                                </tbody>
                           </table>
                    </section>
                    <!-- <button id="boton1" onclick="cerrar();">X</button> -->
                </div>
                <button id="boton" onclick="ver();">información cliente</button>
            </div>  
        </div>

        <div class="row">
            <div class="col-4">
                <div class="container2">
                    <div class="container3">
                        <span class="color_amarillo"> <b><?php echo  $nombre_actualizo ;?></b></span>
                    </div>

                    <span class="color_azul"><b>HORA:</b> <?php echo  $hora_actualizo ;?> </span>

                    <div class="tarjeta">
                            <h2 class="actualizacion">Actualizacion</h2>
                        <h2 class="fecha">
                            <?php echo  $fecha_actualizo ;?>
                        </h2>
                        <img class="imagen1" src="../img/actualizar.png" alt="foto" width="80px" height="70px">  
                    </div>
                </div>
            </div>
        </div>
    </header>
    <img class="imagen" src="../img/descarga3.png" alt="" width="30% " height="30%">

    <div class="tarjeta2 d-block align-items-center ">
        <h2 class="actualizacion ">Actualizacion </h2>
        <h2 class="actualizacion  ">de borrado:</h2>
        <div class="container4">
                    <span class="color_amarillo"> <b><?php echo  $nombre_borro ;?></b></span>
                    </div>

                    <span class="color_azul"><b>HORA:</b> <?php echo  $hora_borro ;?> </span>

        
    <h2 class="borrado">
        <?php echo $fecha_borro;;?>
    </h2>  
    <center><h2 class="borrador"> <?php echo  $nombre_borro;?></h2></center>
    
    </div>

    <script>
        function ver(){
            document.getElementById('tabla').style.display = 'block';
        }
    
        // function cerrar(){
        //     document.getElementById('tabla').style.display = 'none';
        // }
    </script>
    <script type="text/javascript" src="../jquery/jquery.js"></script>
     <script type="text/javascript" src="../jquery/jquery.validate.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script src="../js/cerrarseccion.js"></script>
     <!-- jQuery UI 1.11.4 -->
     <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
     <!-- jQuery 2.2.3 -->
     <script src="../jquery/jquery-2.2.3.min.js"></script>
</body>

</html>