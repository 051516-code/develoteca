<?php
$host="localhost";
$bd="sitio";
$usuario="root";
$contrasenia="";

try {
  $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
  // if($conexion){ echo "Conectado al sistema...";}
} catch (Exepction $ex) {
  echo $ex->getMessage();
}
?>