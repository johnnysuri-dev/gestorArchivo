<?php
include('../modelo/conexion.php');

//$id=$_REQUEST['ide'];
$nom=$_POST['nombre'];
$ta=$_POST['tam'];
$des=$_POST['descripcion'];
$dir=$_POST['direccion'];


$query="INSERT INTO archivo (Nombre,Tamaño,Descripcion,Direccion) 
VALUES ('$nom','$ta','$des','$dir')";


$res=$conexion->query($query);
if($res){
        header("location:../vistas/ListaArchivos.php");
      } else {
        alert("no se guardo correctamente");
      }

?>

   