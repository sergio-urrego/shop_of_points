<?php
 require_once('../php/validate_session.php');
 require_once('../php/conecxion.php');
 if (isset($_POST["buscar"])){
    $validacion=true;
}else{
    $validacion=false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/empresa_usu.css">
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
                     <a href="../html/administrador.php"  class="a-inicio">
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
                 <!-- <li> esto es lo de consultar usuarios
                     <a href="/html/consultas_usuarios.html" title="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                             <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                             <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
                         </svg>
                       <span class="fondo-rojo">usuarios</span>
                     </a>
                 </li> -->
                 <li>
                    <a href="../html/agregar_empresa.php" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg>
                          <span class="fondo-verde">empresa</span>
                    </a>
                </li>
 
                 <li>
                     <a href="#" title="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-bar-chart-line" viewBox="0 0 16 16">
                             <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
                         </svg>
                         <span class="fondo-verde">control</span>                         
                     </a>
                 </li>
 
                 <li>
                    <a href="../html/empresa_usu.php" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="466" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                          </svg>
                          <span class="fondo-violeta" >select_Empresa</span>
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
                    <a href="http://localhost/shop_of_points/php/cerrar_seccion.php" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                          </svg>
                          <span class="fondo-rojo">cerrar</span>
                    </a>
                </li>
             </ul>
         </nav>
<!--tablas-->
    <main class="table">      
        <section class="table__header">
                <div class="container-fluid">
                  <form class="d-flex" role="search"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  method="post">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" value="" name="buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                  </form>
                </div>
            
            <h1>Empresa</h1>
        </section>

        <section class="table__body">
            <table class="tabla">
                <thead>
                    <tr>
                    <th>NIT</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Correo</th>
                    <th>Celular</th>
                    <th>Telefono</th>
                    <th>Opcion.</th>
                    </tr>
                </thead>
                <tbody class="icono">
                        <?php
                        if($validacion==false  ){
                        $consulta="SELECT * FROM empresa ";
                        $resultado=mysqli_query($con,$consulta);
                        while ($empresa=mysqli_fetch_array($resultado)){
                        ?>
                        <tr>
                            <td><?php echo $empresa['nit'] ?></td>
                            <td><?php echo $empresa['nombre'] ?></td>
                            <td><?php echo $empresa['direccion'] ?></td>
                            <td><?php echo $empresa['correo_empresa'] ?></td>
                            <td><?php echo $empresa['celular'] ?></td>
                            <td><?php echo $empresa['telefono'] ?></td>
                            <td>
                                <button class="btn btn-sm btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16" >
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                    </svg>
                                </button>
                                <button class="btn btn-sm btn-warning">
                                    <svg  xmlns= "http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                    </svg>
                                </button>
                                <button class="btn btn-sm btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <?php }}else {
                            if($_POST["buscar"]==''){
                                $consulta="SELECT * FROM empresa ";
                                $resultado=mysqli_query($con,$consulta);
                                while ($empresa=mysqli_fetch_array($resultado)){
                                ?>
                                <tr>
                                    <td><?php echo $empresa['nit'] ?></td>
                                    <td><?php echo $empresa['nombre'] ?></td>
                                    <td><?php echo $empresa['direccion'] ?></td>
                                    <td><?php echo $empresa['correo_empresa'] ?></td>
                                    <td><?php echo $empresa['celular'] ?></td>
                                    <td><?php echo $empresa['telefono'] ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16" >
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn-sm btn-warning">
                                            <svg  xmlns= "http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                            </svg>
                                        </button>
                                        <button class="btn btn-sm btn-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr><?php

                            }}else {

                                $consulta="SELECT * FROM empresa WHERE nit='$_POST[buscar]' OR nombre like '%$_POST[buscar]' or correo_empresa='$_POST[buscar]' ";
                                $resultado=mysqli_query($con,$consulta);
                                while ($empresa=mysqli_fetch_array($resultado)){
                                ?>
                                <tr>
                                    <td><?php echo $empresa['nit']; $nit=$empresa['nit']  ?></td>
                                    <td><?php echo $empresa['nombre'] ?></td>
                                    <td><?php echo $empresa['direccion'] ?></td>
                                    <td><?php echo $empresa['correo_empresa'] ?></td>
                                    <td><?php echo $empresa['celular'] ?></td>
                                    <td><?php echo $empresa['telefono'] ?></td>
                                    <td>
                                    
                                        <button class="btn btn-sm btn-danger" value="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16" >
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                             </svg>
                                        </button>
                                        
                                        <button class="btn btn-sm btn-warning">
                                            <svg  xmlns= "http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                            </svg>
                                        </button>

                                        <button class="btn btn-sm btn-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr><?php

                            } }
                        }?>
                </tbody>    
            </table>
        </section>
    
<!--formulario de actualización-->
    <div class="formulario top translate" id="actualizar">
        <form class="form-control w-50" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> " method="post">
            <h1 class="text-center">Actualizacion de empresa</h1><?php
            date_default_timezone_set('America/Bogota');
            $fecha_actual = date("Y-m-d h:i:s");
            if(isset($_POST["empresa_nit"])){
                
                $campos=array();
                if($_POST['empresa_nit']==''){
                    array_push($campos, "el campo nit no puede estar vacio");
                }
                if($_POST['empresa_nombre']==''){
                    array_push($campos, "el campo nombre no puede estar vacio");
                }
                if($_POST['empresa_direccion']==''){
                    array_push($campos, "el campo direccion no puede estar vacio");
                }
                if($_POST['empresa_correo']==''|| strpos($_POST['empresa_correo'],"@")=== false){
                    array_push($campos, "Ingresa un correo electronico valido");
                }
                if($_POST['empresa_celular']=='' || strlen($_POST['empresa_celular']==10)){
                    array_push($campos, "Ingresa un numero de celular valido");}
                
                if (count($campos)>0){
                    echo "<div class='error'>";
                    for($i=0; $i < count($campos); $i++){
                        echo "<li>".$campos[$i]."</li>";
                    }
                }else{ 
                    $actualizar="UPDATE empresa c 
                    set c.nit='$_POST[empresa_nit]', c.nombre='$_POST[empresa_nombre]', 
                    c.direccion='$_POST[empresa_direccion]', c.correo_empresa='$_POST[empresa_correo]', 
                    c.celular='$_POST[empresa_celular]', c.telefono='$_POST[empresa_telefono]', c.usuario_actualizo='$_SESSION[user]',
                    c.fecha_actualizo='$fecha_actual' WHERE c.nit='$_POST[empresa_nit]' ";
                    $resultado=mysqli_query($con,$actualizar);
                    if ($resultado){
                        ?>
                        <script type="text/javascript"> 
                        var opciones=confirm("se ha actualizado los datos de la empresa correctamente")
                           if (opciones==true){ 
                               window.location.href="http://localhost/shop_of_points/html/empresa_usu.php";
                            }else{
                                window.location.href="http://localhost/shop_of_points/html/empresa_usu.php"
                            }
                        </script>
                        <?php
                        }
                        else{
                            echo"OCURRIO UN ERROR AL AGREGAR LA EMPRESA PORFAVOR VUELVA A INTENTARLO ";
                        }
                }
            }else{
            
            ?>
            <div class=" form-control border-white">
                <label for="">nit</label>
                <input type="text" class="form-control w-90 act" value="" name="empresa_nit" >
            </div>

            <div class="form-control border-white text-align-center">
                <label for="">nombre</label>
                <input type="text" class="form-control w-90 act" name="empresa_nombre">
            </div>

            <div class="form-control border-white">
                <label for="">Direccion :</label>
                <input type="text" class="form-control w-90 act" name="empresa_direccion">
            </div>

            <div class="form-control border-white">
                <label for="">Correo :</label>
                <input type="text" class="form-control w-90 act" name="empresa_correo">
            </div>

            <div class="form-control border-white d-flex justify-content-evenly">
                <label for="">Celular :</label>
                <input type="number" class="form-control w-25 act" name="empresa_celular">

                <label for="">telefono :</label>
                <input type="number" class="form-control w-25 act" name="empresa_telefono">
            </div>
            

            <div class="form-control border-white">|
                <button class="btn btn-primary">Guardar</button>
            </div>
        </form><?php } ?>
        <button class=" position-absolute btn cerrar">close</button>
    </div>

    <!--Segundo Formulario-->
    <div class="consultas desplegar" id="consultar">
        <form class="form-control w-50" action="../html/ingresar_empresa.php" method="post">
            <h1 class="text-center">Igresar empresa</h1>
            <div class=" form-control border-white">
                <label for="">NIT</label>
                <input type="text" readonly class="form-control w-90 rell"  name="empresa_nit" >
            </div>

            <div class="form-control border-white text-align-center">
                <label for="">nombre</label>
                <input type="text" disabled class="form-control w-90 rell" name="empresa_nombre">
            </div>

            <div class="form-control border-white">
                <label for="">Direccion :</label>
                <input type="text" disabled class="form-control w-90 rell" name="empresa_direccion">
            </div>

            <div class="form-control border-white">
                <label for="">Correo :</label>
                <input type="text" disabled class="form-control w-90 rell" name="empresa_correo">
            </div>

            <div class="form-control border-white d-flex justify-content-evenly">
                <label for="">Celular :</label>
                <input type="number" disabled class="form-control w-25 rell" name="empresa_celular">

                <label for="">telefono :</label>
                <input type="number" disabled class="form-control w-25 rell" name="empresa_telefono">
            </div>
            <div class="form-control border-white">
                <button class="btn color ">Ingresar</button>
            </div>
        </form>
        <button class="close position-absolute btn">close</button>
    </div>
    </main>

<script>
const table = document.getElementById("table");
const actualizar = document.getElementById("actualizar");
const consultar = document.getElementById("consultar");
const inputs = document.querySelectorAll(".act");
const rellenar = document.querySelectorAll(".rell");

console.log(inputs);
let count = 0;

window.addEventListener("click", (e) => {
    
 if (e.target.matches(".btn-warning")) {
    
    let data = e.target.parentElement.parentElement.children;
    fillData(data);
    actualizar.classList.toggle("translate");
  }

  if (e.target.matches(".cerrar")) {
  actualizar.classList.toggle("translate");
  count=0
  }

  if (e.target.matches(".btn-success")) {
            
    let data = e.target.parentElement.parentElement.children;
    fillData1(data);
    consultar.classList.toggle("desplegar");
  }

  if (e.target.matches(".close")) {
    consultar.classList.toggle("desplegar");
    count=0
  };
});

const fillData = (data) => {
  for (let index of inputs ) {
    index.value = data[count].textContent;
    count += 1;
  }
};

const fillData1 = (data) => {
  for (let index of rellenar ) {
    index.value = data[count].textContent;
    count += 1;
  }
};
        </script>
</body>
</html>