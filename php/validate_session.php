<?php
session_start();
if (!isset($_SESSION['user'])){
    header("location:http://localhost/shop_of_points/html/index.php");
}
?>
