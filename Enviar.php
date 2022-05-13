<?php

$Destino = "irvingarcia565@gmail.com";
$Producto = $_POST['Producto'];
$Importe = $_POST['Importe'];
$Talla = $_POST['Talla'];
$Nombre = $_POST['Nombre'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Dreccion = $_POST['Direccion'];
$CodigoPostal = $_POST['Codigo_Postal'];

$Contenido = "Producto: " . $Producto . "\nImporte: " . $Importe . "\nTalla: " . $Talla . "\nNombre: " . $Nombre . "\nTelefono: " . $Telefono . "\nCoreeo: " . $Correo . "\nDireccion: " . $Direccion . "\nCodigo Postal: " . $CodigoPostal;

mail($Destino,"PEDIDO",$Contenido);
header("location:Gracias.html");

?>