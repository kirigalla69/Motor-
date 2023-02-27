<?php

include("conexion.php");
$con=conectar();

$serie=$_GET['id'];

$sql="DELETE FROM moto WHERE serie='$serie'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: moto.php");
    }
?>
