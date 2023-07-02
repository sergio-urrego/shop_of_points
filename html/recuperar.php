<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style2.css">
</head>

<body>
    <h1> Recupera tu contraseña</h1>
    <div class="container col-11 col-md-5">
        <p>Ingresa tu correo electrónico para buscar tu cuenta.</p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="form" method="post">
            <?php
            if (isset($_POST['cedula'])){
                             
                $campos=array();
                if($_POST['cedula']==''){
                    array_push($campos, "el campo cedula no puede estar vacio");
                }
                if($_POST['correo']==''|| strpos($_POST['correo'],"@")=== false){
                    array_push($campos, "Ingresa un correo electronico valido");
                }
                if($_POST['empresa']=='0'){
                    array_push($campos, "debe seleccionar la empresa a la que corresponda restaurar la contraseña");
                }
                
                if (count($campos)>0){
                    echo "<div class='error'>";
                    for($i=0; $i < count($campos); $i++){
                        echo "<li>".$campos[$i]."</li>";}
                }else{
                    session_start();
                    $_SESSION['user']=$_POST['cedula'];
                    $_SESSION['correo']=$_POST['correo'];
                    $_SESSION['empresa']=$_POST['empresa'];
                   header("location:http://localhost/shop_of_points/php/recuperacion.php");
                }
            }
            ?>

            <div class="form-correo">
                <input type="text" placeholder="Ingrese su cedula" class="correo" name="cedula">
            </div>
            <div class="form-correo">
                <input type="email" placeholder="Ingrese su correo" class="correo" name="correo">
            </div>
            <div class="my-3">
                <select id="inputState" name="empresa" class="form-control">
                    <option value="0">seleccione la empresa</option>
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
            <div class="form-button">
                <a class="salir " href="../html/index.php">Salir</a>
                <button type="submit" class="enviar">comprobar</button>
            </div>
        </form>
    </div>


</body>

</html>