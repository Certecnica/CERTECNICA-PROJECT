<?php include 'includes/conn.php'; ?>

<?php include 'includes/session.php'; ?>

<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  
  <?php include 'includes/menubar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         VER SOLICITUD DE PERMISO 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Empleado</li>
        <li class="active">Información Corporativa Empleado</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i>¡Proceso Exitoso!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
<?php

$id = $_GET['id'];  

$sql = "SELECT * FROM solicitudes WHERE id = $id";

$resultado = mysqli_query($conn, $sql);

$usuario = mysqli_fetch_assoc($resultado);

$datetime1 = new DateTime($usuario['fecha_inicio']);

$datetime2 = new DateTime($usuario['fecha_fin']);

$interval = $datetime1->diff($datetime2);

?>
<body>
  <form  class="" action="" method="POST"enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">EMPLEADO</label>
      <input type="text" class="form-control" id="empleado" name="empleado" value="<?= $usuario['emplead'];  ?>" readonly>
    </div>

  <div class="form-group col-md-6">
      <label for="inputState">MOTIVO</label>    
      <input type="text" class="form-control" id="motivo" name="motivo" value="<?= $usuario['Motivo'];  ?>" readonly>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">FECHA INCIO </label>
      <input type="text" class="form-control" id="fecha_inicio" name="fecha_inicio" value="<?= $usuario['fecha_inicio'];  ?>" readonly>
    </div>
    <div class="col-md-4 mb-3">
      <label for="correo_corporativo">FECHA FIN </label>
      <input type="text" class="form-control" id="fecha_fin" name="fecha_fin"  value="<?= $usuario['fecha_fin']?>" readonly>
      </div>

    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">DESCRIPCION</label>
      <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $usuario['descripcion'] ?>" readonly>
    </div>

    <div class="form-group col-md-6">
      <label for="inputState">DIAS SOLICITADOS</label>
      <input type="text" class="form-control" id="jefe_area" name="jefe_area" value="<?php echo $interval->format('%a Dia/s')?>" readonly>
    </div>

    <div class="form-group col-md-6">
      <label for="inputState">HORAS SOLICITADAS</label>
      <input type="text" class="form-control" id="jefe_area" name="jefe_area" value="<?php echo $interval->format('%H Horas %i Minutos')?>" readonly>
    </div>

    <div class="form-group col-md-6">
      <label for="inputState">APROBACION JEFE DE AREA</label>
      <input type="text" class="form-control" id="jefe_area" name="jefe_area" value="<?= $usuario['estado_JF'] ?>" readonly>
    </div>

    <div class="form-group col-md-6">
      <label for="comentarios"> APROBACIÓN GESTION HUMANA</label>
      <input type="text" class="form-control" id="comentarios" name="comentarios" value="<?= $usuario['aprobacion_GH'] ?>" readonly>
    </div>

    <div class="form-group col-md-6">
      <label for="comentarios"> APROBACIÓN DIRECTOR ADMINISTRATIVO</label>
      <input type="text" class="form-control" id="comentarios" name="comentarios" value="<?= $usuario['estado_DA'] ?>"readonly>
    </div>

    <div class="form-group col-md-6">
      <label for="comentarios"> COMENTARIOS GESTION HUMANA </label>
      <input type="text" class="form-control" id="comentarios" name="comentarios" value="<?= $usuario['comentario_GH'] ?>"readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="comentarios"> COMENTARIOS JEFE DE AREA</label>
      <input type="text" class="form-control" id="comentarios" name="comentarios" value="<?= $usuario['comentario_JF'] ?>" readonly>
    </div>
        <div class="form-group col-md-6"> 
<label for="comentarios_jefe">COMENTARIOS JEFE DE AREA</label>
        <input type="text" class="form-control" id="comentarios_jefe" name="comentarios_jefe" value="<?= $usuario['comentario_DA']?>" readonly
</div>
    </div>
  <div class="form-group">
    </div>
    <input type="hidden" name="accion" value="editar_registro">
    <input type="hidden" name="id" value="<?php echo $id;?>">
<div class="mb-3">
    <center>
            <a href="solicitudes_historial.php" class="btn btn-danger">Cancelar</a>
</div>
    </center>
</form>

<?php  include 'includes/scripts.php'; ?>

</html>