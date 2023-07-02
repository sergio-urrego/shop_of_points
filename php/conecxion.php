<?php

$user="root";
$pass="";
$server="localhost";
$db="shopofpoints";

$con=mysqli_connect($server,$user,$pass,$db) or die ("Error al conectar a la base de datos");
mysqli_set_charset($con,'utf8');



?>