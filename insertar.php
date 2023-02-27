<?php
include ("conexion.php");
$con= conectar();

$serie =$_POST['serie'];
$color =$_POST['color'];
$nombre= $_POST['nombre'];
$cilindraje=$_POST['cilindraje'];


$sql= "INSERT INTO moto VALUES ('$serie','$color','$nombre','$cilindraje')";
$query=mysqli_query($con,$sql);

if ($query) {
    header("Location: moto.php");
    
}else{
    
}
?>