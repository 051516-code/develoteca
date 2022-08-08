
<?php 
session_start();

if($_POST){

if(($_POST['usuario']=="amdress")&&($_POST['contrasenia']=="admin")){

  $_SESSION['usuario']="ok";
  $_SESSION['nombreUsuario']="amdress";
        header('Location:inicio.php');
}else{
  $mensaje="Error : El usuario o contrasenia son incorrectos!!";
}
  
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
   <div class="container">
     <div class="row">


          <div class="col-md-4"></div>


          <div class="col-md-4">
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>



                  <div class="card">
                    <div class="card-header">
                      Login
                    </div>
                    <div class="card-body">

                    <!-- mensaje  -->
                    <?php if(isset($mensaje)){?>
                      <div class="alert alert-danger" role="alert">
                              <?php echo $mensaje ; ?> 
                      </div>
                     <?php }?>
                     
                        <form  action="" method="POST">

                              <div class = "form-group">
                                  <label >Usuario</label>
                                  <input type="text" class="form-control" name="usuario"  placeholder="Usuario">
                              </div>

                              <div class="form-group">
                                  <label >Contrasenha</label>
                                  <input type="password" class="form-control" name="contrasenia"  placeholder="Contrasenha">
                              </div>
                              <br/>
                              <br/>
                              <button type="submit" class="btn btn-primary">Entrar al Aministrador</button>
                        </form>
                        
                    </div>
                  </div>
          </div>
       </div>
     </div>
 
</body>
</html>