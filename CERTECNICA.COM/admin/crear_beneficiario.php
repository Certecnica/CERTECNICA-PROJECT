
<?php include 'includes/session.php'; ?>

<?php include 'includes/header.php'; ?>

<?php include 'includes/conn.php';?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">
      
  <h4>INFORMACIÓN EMPLEADO</h4>
 
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Empleado</li>
        <li class="active">AGREGAR BENEFICIARIO</li>
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
      $id          = $_GET['id'];
      $consulta    = "SELECT * FROM informacion_empleado WHERE id = $id ";
      $queryData   = mysqli_query($conn, $consulta);
      $info        = mysqli_fetch_assoc($queryData);

      $id_corporativa = $_GET['id'];

      $query       = "SELECT * FROM employees WHERE id = $id_corporativa ";
      $Data        = mysqli_query($conn, $query);
      $empleado    = mysqli_fetch_assoc($Data);

      ?>
<form class="" action="add_beneficiario.php" method="POST"enctype="multipart/form-data" >
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="cedula_empleado">NUMERO DE IDENTIDAD</label>
      <input type="text" class="form-control" id="cedula_empleado" name="cedula_empleado" value="<?= $empleado['employee_id']?>" readonly>
      <div class="valid-feedback">

      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="nombres_empleado">EMPLEADO </label>
      <input type="text" class="form-control" id="nombres_empleado" name="nombres_empleado" placeholder="" value="<?= $info['empleado']?>" readonly>
      <div class="valid-feedback">
      </div>
    </div>
    <br>
   <br>
   <br>
   <br>
   
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for= "caja_compensacion">CAJA COMPENSACIÓN</label>
      <input type="text" class="form-control" id="caja_compensacion" name = "caja_compensacion" value="<?= $info['caja_compensacion']?>"  readonly>
      <div class="invalid-feedback">

      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="eps">EPS</label>
      <input type="text" class="form-control" id="eps" name="eps" value="<?= $info['eps']?>" readonly >
      <div class="invalid-feedback">
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="direccion">DIRECCIÓN</label>
      <input type="text" class="form-control" id="direccion" name="direccion" value="<?= $empleado['address']?>" readonly>
      <div class="invalid-feedback">
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
<h4> INFORMACIÓN BENEFICIARIO </h4>
    <div class="col-sm-6"> 
                      <select class="form-control" name="parentesco" id="parentesco" required>
                        <option value="" selected>- Seleccione tipo de parentesco -</option>
                        <option value="Hijo">Hijo</option>
                        <option value="Madre">Madre</option>
                        <option value="Padre">Padre</option>
                      </select>
                    </div>
    <div class="col-sm-6"> 
                      <select class="form-control" name="tipo_documento" id="tipo_documento" required>
                        <option value="" selected>- Seleccione tipo de documento -</option>
                        <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                        <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                        <option value="Cédula de extranjería">Cédula de extranjería</option>
                      </select>
                    </div>
                      <br>
                      <br>
                      <br>    
    <div class="col-md-3 mb-3">
      <label for="numero_documento">N° DE DOCUMENTO</label>
      <input type="number" class="form-control" id="numero_documento" name="numero_documento" required>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="nombres_beneficiario">NOMBRES Y APELLIDOS </label>
      <input type="text" class="form-control" id="nombres_beneficiarios" name="nombres_beneficiarios" required  >
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="fecha_nacimiento">FECHA DE NACIMIENTO</label>
      <input type="date" class="form-control" id="fecha_nacimiento"  name="fecha_nacimiento" required>
      </div>
       <br>
       <br> 
       <br>
       <br>
       <br>
         <center><button class="btn btn-primary" type="submit"  name="createBeneficiario">Guardar</button></center>
    </div>
</form>
<?php include 'includes/scripts.php' ;?>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>



