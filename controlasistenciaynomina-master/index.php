<?php
  session_start();
  if(isset($_SESSION['admin'])){
    header('location:admin/home.php');
  }
  if(isset($_SESSION['employees'])){
    header('location:users/home.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/x-icon" href="images/favicon.jpg" />
    <title>INICIA SESIÓN</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
      <img src="images/certecnica.2.jpg" style="padding-top:70px; padding-left:160px ; width:35%; padding-bottom:25px;">      
        <div class="signin-signup">
          <form action="users/login.php" class="sign-in-form" method="POST" > 
            <div>
          <img src="images/certecnica.2.jpg" style="padding-bottom:70px; width: 75%;">      
          </div>
          <h2 class="title">INICIA SESIÓN</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuario" name="usuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="contraseña" />
            </div>
            <input type="submit" value="INGRESA" class="btn solid" name="ingresar" />
            <div class="social-media">
            </div>
          </form>
          <form action="admin/login.php" class="sign-up-form" method="POST">
            <h2 class="title">INICIA SESIÓN</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="Correo Electronico o Usuario" name="username"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="password"/>
            </div>
            <input type="submit" class="btn" value="Ingresar" name="login" />
            <div class="social-media">
            </div>
          </form>
          <?php
  		if(isset($_SESSION['ERRORES'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['ERRORES']."</p> 
			  	</div>
  			";
  			unset($_SESSION['ERRORES']);
  		}
  	?>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¿Eres Administrador?</h3>
            <p>
            ¡Bienvenido de nuevo, se te ha echado de menos!
            </p>
         <br>
            <button class="btn transparent" id="sign-up-btn">
                Inicia Sesión
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        
        <div class="panel right-panel">
          <div class="content">
            <h3>¿Eres Empleado?</h3>
            <p>
            ¡Bienvenido de nuevo, se te ha echado de menos!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Inicia Sesión
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
        <?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
      </div>
    </div>
    <?php include 'admin/includes/scripts.php' ?>
    <?php include 'users/includes/scripts.php' ?>
    <script src="app.js"></script>
  </body>
</html>
+