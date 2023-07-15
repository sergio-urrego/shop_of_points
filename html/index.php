<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop of Points</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div class="container   mt-5 p-5   ">
        <div class="row  bg-white align-items-center rounded  ">
            <div class="d-none d-lg-block col text-center  ">
                <img class="imagen" src="../img/proyecto-removebg.png" class="mx-auto">
            </div>

            <div class="col-12 col-lg-6 p-5  align-items-center  ">
                <div>
                    <h2 class="text-uppercase text-center ">Shop of Points</h2>
                    <h2 class="fw-bold text-center ">Bienvenidos </h2>
                </div>
                
                <div class="col">
                    <form  id="form"  class="col-12" method="post">
                        <div class="mb-4">
                            <label for=""> Usuario</label>
                            <input type="text" id="cedula" class="form-control" placeholder="Ingrese su numero de cedula" name="cedula">
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">Contraseña</label>
                            <input type="password" id="password" class="form-control" placeholder="Ingrese su Contraseña" name="contraseña">
                        </div>
                        <div class="my-3">
                            <label for="inputState"> Empresa </label>
                            <select id="inputState" name="empresa" class="form-control">
                                <?php
                                require_once('../php/conecxion.php');
                                $empresa="SELECT * FROM empresa";
                                $resultado=mysqli_query($con,$empresa);
                                while ($valores=mysqli_fetch_array($resultado)){ 
                                   echo '<option value="'.$valores['nit'].'">'.$valores['nombre'].'</option>'; 
                                
                                }
                                ?>                                                              
                            </select>
                        </div>
                        <div class="d-grid">
                            <button type="button" name="submit" class="btn btn-success" onclick="validarlogin()" > Iniciar Sesión</button>
                        </div>

                        <div class="my-3">
                           <center><span><a href="../html/recuperar.php">¿Olvidastes tu Contraseña?</a></span></center> 
                           <br>
 
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"crossorigin="anonymous"></script>
</body>


</html>