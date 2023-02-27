<?php
include ("conexion.php");
$con= conectar();

$serie =$_POST['serie'];
$color =$_POST['color'];
$nombre= $_POST['nombre'];
$cilindraje=$_POST['cilindraje'];


$sql= "UPDATE moto SET color='$color',nombre='$nombre',cilindraje='$cilindraje' WHERE serie='$serie'";
$query=mysqli_query($con,$sql);

if ($query) {
    header("Location: moto.php");
    
}
?>