<?php

$conexion = mysql_connect("localhost", "root", "", "enfermo");


$Nombre=$_POST["Nombre"];
$Apellido=$_POST["Apellido"];
$E-MAIL=$_POST["E-MAIL"];
$Telefono=$_POST["Telefono"];


echo $Nombre;
echo $Apellido;
echo $E-MAIL;
echo $Telefono;


mysql_query($conexion,"INSERT INTO 'enfermo' ,'zuniga'('Nombre','Apellido','E-MAIL','Telefono'")VALUES ('$Nombre','$Apellido','$E-MAIL','$Telefono')");

echo "EXITO ...";

mysql_close($conexion);

?>