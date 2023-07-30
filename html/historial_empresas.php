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
    <link rel="stylesheet" href="../css/historial_empresas.css">
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
                 <li>
                    <a href="../html/agregar_empresa.php" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-building-add" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Z"/>
                            <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1V1Z"/>
                            <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
                        </svg>
                        <span class="fondo-verde">empresa</span>
                    </a>
                </li>
 
                 <li>
                     <a href="../html/control_ampresas_admin.php" title="">
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
<!--tablas-->
    <main class="table">      
        <section class="table__header">
                <div class="container-fluid">
                  <form class="d-flex" role="search"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  method="post">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" value="" name="buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                  </form>
                </div>
            
            <h1>Historial Empresas</h1>
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
                                <button class="btn btn-sm btn-warning seleccionar">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill text-white" viewBox="0 0 16 16">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
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
                                    <button class="btn btn-sm btn-warning seleccionar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill text-white" viewBox="0 0 16 16">
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
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
                                    <button class="btn btn-sm btn-warning seleccionar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill text-white" viewBox="0 0 16 16">
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                        </svg>
                                    </button>
                                    </td>
                                </tr><?php

                            } }
                        }?>
                </tbody>    
            </table>
        </section>

    <!--Segundo Formulario-->
    <div class="consultas desplegar" id="consultar">
        <form class="form-control w-50" action="../html/historial_administrador.php" method="post">
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
                <input type="text" disabled class="form-control w-90 rell" name="empresa_direccion" >
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
const consultar = document.getElementById("consultar");
const inputs = document.querySelectorAll(".act");
const rellenar = document.querySelectorAll(".rell");

console.log(inputs);
let count = 0;

window.addEventListener("click", (e) => {

  if (e.target.matches(".seleccionar")) {
            
    let data = e.target.parentElement.parentElement.children;
    fillData1(data);
    consultar.classList.toggle("desplegar");
  }

  if (e.target.matches(".close")) {
    consultar.classList.toggle("desplegar");
    count=0
  };
});

const fillData1 = (data) => {
  for (let index of rellenar ) {
    index.value = data[count].textContent;
    count += 1;
  }
};
</script>
    <script type="text/javascript" src="../jquery/jquery.js"></script>
    <script type="text/javascript" src="../jquery/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/cerrarseccion.js"></script>
    <script src="../js/updateempresa.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- jQuery 2.2.3 -->
    <script src="../jquery/jquery-2.2.3.min.js"></script>
</body>
</html>