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
                     <a href="../html/usuarios.php"  class="a-inicio">
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
<!--tablas-->
    <main class="table">      
        <section class="table__header">
                <div class="container-fluid">
                  <form class="d-flex" role="search"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  method="post">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" value="" name="buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                  </form>
                </div>
            
            <h1>Facturas</h1>
        </section>

        <section class="table__body">
            <table class="tabla">
                <thead>
                    <tr>
                    <th>N.factura</th>
                    <th>N.empresa</th>
                    <th>C.cliente</th>
                    <th>valor</th>
                    <th>fecha</th>
                    <th>estado</th>
                    <th>Opcion.</th>
                    </tr>
                </thead>
                <tbody class="icono">
                        <?php
                        if($validacion==false  ){
                        $consulta="SELECT * FROM acumulado_compras WHERE nit_empresa='$_SESSION[empresa]' and cedula_cliente='$_SESSION[user]' and estado='activo' ";
                        $resultado=mysqli_query($con,$consulta);
                        while ($empresa=mysqli_fetch_array($resultado)){
                        ?>
                        <tr>
                            <td><?php echo $empresa['numero_factura'] ?></td>
                            <td><?php echo $empresa['nit_empresa'] ?></td>
                            <td><?php echo $empresa['cedula_cliente'] ?></td>
                            <td><?php echo $empresa['valor_compra'] ?></td>
                            <td><?php echo $empresa['fecha_factura'] ?></td>
                            <td><?php echo $empresa['estado'] ?></td>
                            <td>
                                <button class="btn btn-sm btn-success seleccionar">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <?php }}else {
                            if($_POST["buscar"]==''){
                                $consulta="SELECT * FROM acumulado_compras WHERE nit_empresa='$_SESSION[empresa]' and cedua_cliente='$_SESSION[user]' and estado='activo' ";
                                $resultado=mysqli_query($con,$consulta);
                                while ($empresa=mysqli_fetch_array($resultado)){
                                ?>
                                <tr>
                                    <td><?php echo $empresa['numero_factura'] ?></td>
                                    <td><?php echo $empresa['nit_empresa'] ?></td>
                                    <td><?php echo $empresa['cedula_cliente'] ?></td>
                                    <td><?php echo $empresa['valor_compra'] ?></td>
                                    <td><?php echo $empresa['fecha_factura'] ?></td>
                                    <td><?php echo $empresa['estado'] ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-success seleccionar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr><?php

                            }}else {
                                $consulta="SELECT * FROM acumulado_compras WHERE nit_empresa='$_SESSION[empresa]' and cedua_cliente='$_SESSION[user]' and estado='activo' and  numero_factura='$_POST[buscar]' ";
                                $resultado=mysqli_query($con,$consulta);
                                while ($empresa=mysqli_fetch_array($resultado)){
                                    ?>
                                    <tr>
                                        <td><?php echo $empresa['numero_factura'] ?></td>
                                        <td><?php echo $empresa['nit_empresa'] ?></td>
                                        <td><?php echo $empresa['cedula_cliente'] ?></td>
                                        <td><?php echo $empresa['valor_compra'] ?></td>
                                        <td><?php echo $empresa['fecha_factura'] ?></td>
                                        <td><?php echo $empresa['estado'] ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-success seleccionar">
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

    <!--Segundo Formulario-->
    <div class="consultas desplegar" id="consultar">
        <form class="form-control w-50" action="../php/ingresarempresa.php" method="post">
            <h1 class="text-center">Informacion factura</h1>
            <div class=" form-control border-white">
                <label for="">N.factura</label>
                <input type="number" readonly class="form-control w-90 rell"  name="factura" >
            </div>

            <div class="form-control border-white text-align-center">
                <label for="">N.empresa</label>
                <input type="number" disabled class="form-control w-90 rell" name="empresa">
            </div>

            <div class="form-control border-white">
                <label for="">C.cliente</label>
                <input type="number" disabled class="form-control w-90 rell" name="cliente">
            </div>

            <div class="form-control border-white">
                <label for="">valor</label>
                <input type="number" disabled class="form-control w-90 rell" name="valor">
            </div>

            <div class="form-control border-white d-flex justify-content-evenly">
                <label for="">fecha</label>
                <input type="date" disabled class="form-control w-25 rell" name="fecha">

                <label for="">estado</label>
                <input type="text" disabled class="form-control w-25 rell" name="estado">
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
    <script src="../js/eliminaempresa.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- jQuery 2.2.3 -->
    <script src="../jquery/jquery-2.2.3.min.js"></script>
</body>
</html>