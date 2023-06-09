<?php
$nombre= $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$recide = $_POST["recide"];
$mensaje = $_POST["mensaje"];
echo "Hola ". $nombre . " " . $telefono . " " . $email . " " . $recide ." " . $mensaje;
$texto_entero = "\n". $nombre . " " . $telefono. " " . $email . " " . $recide . " " . $mensaje. "\n";
$file = fopen("Datos.txt","a");
fwrite($file,$texto_entero);
fclose($file);
?>