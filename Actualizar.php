<?php
include "conexion.php";
$Id=$_POST["ID"];
$nom=$_POST["Nom"];
$dir=$_POST["Dir"];
$rfc=$_POST["Rfc"];
$tel=$_POST["Tel"];
$clasif=$_POST["Clasif"];
$foto=$_POST["Foto"];
$lat=$_POST["Lat"];
$longit=$_POST["Long"];

$sql="UPDATE alberto_tabla SET nombre_servicio='$nom', direccion='$dir', RFC='$rfc', TELEFONO='$tel', CLASIFICACION='$clasif', FOTO='$foto', LATITUD='$lat', LONGITUD='$longit' where Id_Servicios='$Id'";

$reg=mysqli_query($conn,$sql);
if($reg){
echo "Nombre:".$nom." Direccion:".$dir." RFC:".$rfc." Tel:".$tel." Clasificacion:".$clasif." Foto:".$foto." Latitud:".$lat." Longitud:".$longit;
}
else{
echo "Error al registrar los datos:".mysqli_error();	
}

mysqli_close($conn);
?>