<?php 

session_start();
if(!isset($_SESSION['usuario'])){
  header("Location:../index.php");

}else {
  if($_SESSION['usuario']=="ok"){
    $nombreUsuario=$_SESSION["nombreUsuario"];
  }
}

?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sitio-Web</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<?php $url= "http://".$_SERVER['HTTP_HOST']."/develoteca" ;
?>

<nav class="navbar navbar-expand navbar-dark bg-primary">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#">Administrador </a>
        <a class="nav-item nav-link" href="<?php echo $url ;?>/sitioweb/administrador/inicio.php">Inicio</a>
        <a class="nav-item nav-link" href="<?php echo $url ;?>/sitioweb/administrador/seccion/productos.php">Libros</a>
        <a class="nav-item nav-link" href="<?php echo $url ;?>/sitioweb/administrador/seccion/cerrar.php">Salir</a>
        <a class="nav-item nav-link" href="<?php echo $url;?>/sitioweb">Sitio Web</a>
    </div>
</nav>

      <div class="container">
        <br/><br/>
        <div class="row">