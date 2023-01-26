<?php
include 'includes/conn.php';
?>

<?php include 'includes/session.php'; ?>

<?php include 'includes/header.php'; ?>

<?php 
$id = $_GET['id'];
$sql = " SELECT * FROM informacion_empleado WHERE id= $id";
$resultado = mysqli_query($conn, $sql);
$usuario = mysqli_fetch_assoc($resultado);
?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  
  <?php include 'includes/menubar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         EDITAR INFORMACIÓN CORPORATIVA
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
<html>
<head>
  <body>
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<h4 class="modal-title"><b><span class="<?= $usuario['empleado']?>"></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST " action="funcion_editar_empleado.php" enctype="multipart/form-data">
          		  <div class="form-group">
                <div class="form-group">
                    <label for="empleado" class="col-sm-3 control-label">EMPLEADO :</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="edit_empleado" id="edit_empleado">
                        <option value="" selected><?= $usuario['empleado']?></option>
                        <?php
                          $sql = "SELECT * FROM employees";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['firstname'] .$prow['lastname']."'>".$prow['firstname']."".$prow['lastname']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nuevo" class="col-sm-3 control-label">CARGO : </label>

                    <div class="col-sm-9">
                      <select class="form-control" id="edit_cargo" name="edit_cargo" >
                        <option value="" selected><?= $usuario['cargo']?></option>
                        <?php
                          $sql = "SELECT * FROM position";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['description']."'>".$srow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="area" class="col-sm-3 control-label"> AREA : </label>

                    <div class="col-sm-9">
                      <select class="form-control" id="edit_area" name="edit_area" >
                         <option value="" selected><?= $usuario['area']?></option>
                        <?php
                          $id = $_GET['id'];
                          $sql = "SELECT * FROM areas"; 
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['area']."'>".$srow['area']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  	<label for="correo_corporativo" class="col-sm-3 control-label">CORREO CORPORATIVO :</label>

                  	<div class="col-sm-9">
                    	<input type="email" class="form-control" id="edit_correo_corporativo" name="edit_correo_corporativo" placeholder="Ingrese el correo corporativo(si no tiene asignado uno ingresar N/A)" value="<?= $usuario['correo_corporativo']?>">
                  	</div> 
                </div>
                <div class="form-group">
                  	<label for="numero" class="col-sm-3 control-label">TELEFONO CORPORATIVO : </label>

                  	<div class="col-sm-9">
                    	<input type="number" class="form-control" id="edit_numero" name="edit_numero" placeholder="Ingrese el Telefono  corporativo" value="<?= $usuario['telefono_corporativo']?>">
                  	</div> 
                </div>
                <div class="form-group">
                    <label for="eps" class="col-sm-3 control-label"> EPS : </label>

                    <div class="col-sm-9">
                      <select class="form-control" id="edit_eps" name="edit_eps">
                        <option value="" selected><?= $usuario['eps']?></option>
                        <?php
                          $sql = "SELECT * FROM eps";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['eps']."'>".$srow['eps']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="afp" class="col-sm-3 control-label"> AFP : </label>

                    <div class="col-sm-9">
                      <select class="form-control" id="edit_afp" name="edit_afp">
                        <option value="" selected><?= $usuario['afp']?></option>
                        <?php
                          $sql = "SELECT * FROM afp";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['NOMBRE']."'>".$srow['NOMBRE']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cesantias" class="col-sm-3 control-label"> CESANTIAS : </label>

                    <div class="col-sm-9">
                      <select class="form-control" id="edit_cesantias" name="edit_cesantias">
                        <option value="" selected><?= $usuario['cesantia']?></option>
                        <?php
                          $sql = "SELECT * FROM cesantias";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['NOMBRE']."'>".$srow['NOMBRE']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="caja_compensacion" class="col-sm-3 control-label">CAJA COMPENSACIÓN : </label>

                    <div class="col-sm-9">
                      <select class="form-control" id="edit_caja_compensacion" name="edit_caja_compensacion">
                        <option value="" selected><?= $usuario['caja_compensacion']?></option>
                        <?php
                          $sql = "SELECT * FROM cesantias";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['NOMBRE']."'>".$srow['NOMBRE']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>           <div class="form-group">
                    <label for="arl" class="col-sm-3 control-label"> ARL : </label>

                    <div class="col-sm-9">
                      <select class="form-control" id="edit_arl" name="edit_arl">
                        <option value="" selected><?= $usuario['arl']?></option>
                        <?php
                          $sql = "SELECT * FROM cesantias";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['NOMBRE']."'>".$srow['NOMBRE']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_Tcontrato" class="col-sm-3 control-label">TIPO CONTRATO : </label>

                    <div class="col-sm-9">
                      <select class="form-control" id="edit_Tcontrato" name="edit_Tcontrato" >
                        <option value="" selected><?= $usuario['tipo_contrato']?></option>
                        <?php
                          $sql = "SELECT * FROM tipo_contrato";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['NOMBRE']."'>".$srow['NOMBRE']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_escolaridad" class="col-sm-3 control-label"> NIVEL ESCOLARIDAD</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="edit_escolaridad" name="edit_escolaridad" >
                        <option value="" selected><?= $usuario['nivel_escolaridad']?></option>
                        <?php
                          $sql = "SELECT * FROM nivel_escolaridad";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['NOMBRE']."'>".$srow['NOMBRE']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  	<label for="edit_titulo" class="col-sm-3 control-label">TITULO</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_titulo" name="edit_titulo" placeholder="Ingrese titulo del empleado" value="<?= $usuario['titulo']?>">
                  	</div> 
                </div>
                <br>
                <div class="button_volver">
            	   <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i>Volver</button></div>
            	   <center><button type="submit" class="btn btn-primary btn-flat" name="editEmpleadoInf"><i class="fa fa-save"></i> Guardar</button></center>
              <style>
                      .button_volver{
                           padding-left: 144px;
                      }
              </style>
            	</form>
          	</div>
        </div>
    </div>
</div>
  </body>
</head>
</html>