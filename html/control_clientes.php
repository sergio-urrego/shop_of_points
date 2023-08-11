<?php
 require_once('../php/validate_session.php');
 require_once('../php/conecxion.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/control_empresas_admin.css">
</head>
<body>
    <header id="header" class="contenedor-header">
        <!--fondo animado-->
        <div class="fondo-animado">
            <span class="uno delay-1"></span>
            <span class="dos"></span>  <!--el delay sirve para que los cubos vallan en distintas direcciones-->
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
                 <span>inicio</span>
             </a>
         </li>
     </ul>

     <ul class="ul-enlaces">
     <li>
                    <a href="../html/agregar_clientes.php" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                        <span class="fondo-verde">agregar</span>
                    </a>
                </li>
                <li>
                    <a href="../html/listado_clientes_gerente.php" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-clipboard2-check-fill" viewBox="0 0 16 16">
                            <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
                            <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5Zm6.769 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708Z"/>
                        </svg>
                      <span class="fondo-rojo">usuarios</span>
                    </a>
                </li>

                <li>
                    <a href="../html/control_clientes.php" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-bar-chart-line" viewBox="0 0 16 16">
                            <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
                        </svg>
                        <span class="fondo-verde">control</span>                         
                    </a>
                </li>

                <li>
                    <a href="../html/historial_clientes.php" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                      <span class="fondo-cielo">Historial</span>
                    </a>
                </li>
                <li>
                    <a href="#" type="button" onclick="cerrarseccion()" >
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
        <div class="col-8">
            <h1 class="espacio1">SHOP OF <b> POINST</b></h1>
            <h2 class="decoracion espacio2">Control de empresas</h2>        

            <div class="container3">
                <div class="cuadro2" class="">
                    <?php 
                        $consulta0="SELECT * FROM detalles_clientes u  where u.nit_empresa='$_SESSION[empresa]'";
                        $resultado=mysqli_query($con,$consulta0);
                        $validacion=mysqli_num_rows($resultado);
                        $cuenta=$validacion;
                    ?>
                    <h1>clientes<br>
                        <?php echo $cuenta;
                        ?>
                    </h1>
                </div>
            </div>
            <img class="informacion" src="../img/imagendecontrol.png" alt="" width="1100px">
        </div>
    
        <div class="col-4">
            <div class="container2">
                <div class="cuadro">
                    <?php 
                        $consulta="SELECT * FROM clientes c inner join  detalles_clientes u on c.cedula = u.cedula_cliente where u.usuario_borro is not null ";
                        $resultado=mysqli_query($con,$consulta);
                        $validacion2=mysqli_num_rows($resultado);
                        $cuenta2=$validacion2;
                    ?>
                    <h1>Desactivados<br>
                        <img src="../img/peso1.png" alt="" width="50px">
                        <?php echo $cuenta2;
                        ?>
                    </h1>
                </div>
            </div>
        
        <!--boton para ver los usuarios-->
                
        <button id="boton" onclick="ver();">Ver empresas</button>
        <!--Tabla de usuarios-->
        <div id="tabla">
            <main class="table"> 
            <button id="boton1" onclick="cerrar();">X</button>

                <section class="table__body">
                    <table>
                        <thead>
                            <tr>
                            <th>nit</th>
                            <th>Nombre</th>
                            <th>correo</th>
                            <th>estado</th>
                            </tr>
                        </thead>
                        <tbody class="icono">
                        <?php
                        $consulta="SELECT c.cedula, c.nombre,c.correo, c.usuario_creo,c.fecha_creacion, c.usuario_actualizo,
                        c.fecha_actualizacion, c.usuario_borro,
                        c.fecha_borrado, u.nit_empresa , u.usuario_borro
                                    FROM clientes c inner join  detalles_clientes u on c.cedula = u.cedula_cliente 
                                    WHERE u.nit_empresa='$_SESSION[empresa]' and u.usuario_borro is not null ";
                        $resultado=mysqli_query($con,$consulta);
                        while ($empresa=mysqli_fetch_array($resultado)){
                        ?>
                        <tr>
                            <td class="dato" data-id="1"><?php echo $empresa['cedula'] ?></td>
                            <td><?php echo $empresa['nombre'] ?></td>
                            <td><?php echo $empresa['correo'] ?></td>
                            <td>
                                <div class="movimiento">
                                <button class="btn btn-sm btn-success enviarbtn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                <span class="fondo-naranja">Seleccionar</span>    
                                <button>
                                </div>
                            </td>
                            </tr>
                            <?php } ?>
        
                        </tbody>
                    </table>
                </section>
            </main>
        </div>
        
        <script>
            function ver(){
                document.getElementById('tabla').style.display = 'block';
            }
        
            function cerrar(){
                document.getElementById('tabla').style.display = 'none';
            }
        </script>
                
        </div>
</div>
</div>
<script type="text/javascript" src="../jquery/jquery.js"></script>
     <script type="text/javascript" src="../jquery/jquery.validate.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script src="../js/cerrarseccion.js"></script>
     <!-- jQuery UI 1.11.4 -->
     <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
     <!-- jQuery 2.2.3 -->
     <script src="../jquery/jquery-2.2.3.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {
        $('.enviarbtn').click(function() {
          // Obtén el dato desde el elemento td padre
          var dato = $(this).closest('tr').find('.dato').text();

          // Realiza la petición AJAX
          $.post('../php/update/activarcliente.php', { dato: dato }, function(response) {
            // Procesa la respuesta del servidor y muéstrala en el contenedor
            location.reload();
          }).fail(function() {
            // Maneja el error si ocurre uno durante la petición
            alert('Ha ocurrido un error al enviar el dato.');
          });
        });
      });
</script>
</body>
</html>