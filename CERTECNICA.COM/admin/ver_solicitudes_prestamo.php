
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
         VER SOLICITUD DE PRESTAMO 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Solicitud</li>
        <li class="active">Prestamo</li>
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

$sql = "SELECT * FROM solicitud_prestamo WHERE id = $id";

$resultado = mysqli_query($conn, $sql);

$usuario = mysqli_fetch_assoc($resultado);

?>
<body>
  <form  class="" action="" method="POST"enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="empleado">EMPLEADO</label>
      <input type="text" class="form-control" id="empleado" name="empleado" value="<?= $usuario['empleado'];  ?>" readonly>
    </div>

  <div class="form-group col-md-6">
      <label for="monto_solicitado"> MONTO </label>    
      <input type="text" class="form-control" id="monto_solicitado" name="monto_solicitado" value="<?php echo  number_format ($usuario['monto_solicitado']);  ?>" readonly>
    </div>

    <div class="form-group col-md-4">
      <label for="cuotas"> CUOTAS </label>
      <input type="text" class="form-control" id="cuotas" name="cuotas" value="<?= $usuario['cuotas'];  ?>" readonly>
    </div>

    <div class="col-md-4 mb-3">
      <label for="valor_cuota_mensual">VALOR CUOTA MENSUAL</label>
      <input type="text" class="form-control" id="valor_cuota_mensual" name="valor_cuota_mensual"  value="<?php echo number_format($usuario['valor_cuota_mensual']); ?>"readonly>
      </div>

    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="fecha_primer_descuento">FECHA PRIMER DESCUENTO</label>
      <input type="text" class="form-control" id="fecha_primer_descuento" name="" value="<?= $usuario['fecha_primer_descuento'] ?>"readonly>
    </div>

    <div class="form-group col-md-6">
      <label for="destino_prestamo"> DESTINO PRESTAMO </label>
      <input type="text" class="form-control" id="destino_prestamo" name="destino_prestamo" value="<?php echo $usuario['destino_prestamo']?>" readonly>
    </div>

    <div class="form-group col-md-6">
      <label for="estado_GH"> APROBACIÓN GESTION HUMANA </label>
      <input type="text" class="form-control" id="estado_GH" name="estado_GH" value="<?php echo $usuario['estado_GH']; ?>" readonly>
    </div>

    <div class="form-group col-md-6">
      <label for="estado_subgerencia">APROBACION SUBGERENCIA</label>
      <input type="text" class="form-control" id="estado_subgerencia" name="estado_subgerencia" value="<?= $usuario['estado_subgerencia'] ?>" readonly>
    </div>

    <div class="form-group col-md-6">
      <label for="estado_DA"> APROBACIÓN DIRECTOR ADMINISTRATIVO</label>
      <input type="text" class="form-control" id="estado_DA" name="estado_DA" value="<?= $usuario['estado_DA']?>" readonly>
    </div>

    <div class="form-group col-md-6">
      <label for="comentarios_subgerencia">COMENTARIOS SUBGERENCIA</label>
      <input type="text" class="form-control" id="comentarios_subgerencia" name="comentarios_subgerencia" value="<?= $usuario['comentario_subgerencia'] ?>"readonly>
    </div>

    <div class="form-group col-md-6">
      <label for="comentarios_DA"> COMENTARIOS DIRECTOR ADMINISTRATIVO</label>
      <input type="text" class="form-control" id="comentarios_DA" name="comentarios_DA" value="<?= $usuario['comentario_DA'] ?>" readonly>
    </div>
    
        <div class="form-group col-md-6"> 
<label for="comentarios_GH">COMENTARIOS GESTION HUMANA</label>
        <input type="text" class="form-control" id="comentarios_GH" name="comentarios_GH" value="<?= $usuario['comentario_GH']?>" readonly
</div>
<br>
    <br>
    <br>
    </div>
    <br>
    <br>
    <br>
  <div class="form-group">
    </div>

    <input type="hidden" name="accion" value="editar_registro">
    <input type="hidden" name="id" value="<?php echo $id;?>">

    <center>
            <a href="solicitudes_total.php" class="btn btn-danger"> Volver </a>
    </center>
</form>

<?php  include 'includes/scripts.php'; ?>

</html>