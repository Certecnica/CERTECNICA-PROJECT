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
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM informacion_empleado WHERE id = $id";
$resultado = mysqli_query($conn, $sql);
$usuario = mysqli_fetch_assoc($resultado);

$id_employee = $_GET['id'];
$empleados = "SELECT * FROM employees WHERE id = $id ";
$data = mysqli_query($conn, $empleados);
$row = mysqli_fetch_assoc($data);

?>
  <body>
  <form  class="" action="edit_empleado.php" method="POST"enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">EMPLEADO</label>
      <input type="text" class="form-control" id="empleado" name="empleado" value="<?= $usuario['empleado'];  ?>" readonly>
    </div>

  <div class="form-group col-md-6">
      <label for="inputState">CARGO</label>
      <select id="cargo" name="cargo" class="form-control">
        <option  selected><?= $usuario['cargo']; ?></option>
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

    <div class="form-group col-md-4">
      <label for="inputState">AREA</label>
      <select id="area" name="area"  class="form-control">
        <option selected> <?= $usuario['area'] ?></option>
        <?php
                          $sql = "SELECT * FROM areas";
                          $query = $conn->query($sql);
                          while($lrow = $query->fetch_assoc()){
                            echo "
                              <option value='".$lrow['area']."'>".$lrow['area']."</option>
                            ";
                          }
                        ?>
      </select>
    </div>
    <div class="col-md-4 mb-3">
      <label for="correo_corporativo">CORREO CORPORATIVO</label>
      <input type="text" class="form-control" id="correo_corporativo" name="correo_corporativo" placeholder="" value="<?= $usuario['correo_corporativo']?>" >
      </div>
    
    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">NUMERO CORPORATIVO</label>
      <input type="text" class="form-control" id="telefono_corporativo" name="telefono_corporativo" value="<?= $usuario['telefono_corporativo'] ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">EPS</label>
      <select id="eps" name="eps" class="form-control">
        <option selected><?= $usuario['eps'] ?></option>
        <?php
                          $sql = "SELECT * FROM eps";
                          $query = $conn->query($sql);
                          while($lrow = $query->fetch_assoc()){
                            echo "
                              <option value='".$lrow['eps']."'>".$lrow['eps']."</option>
                            ";
                          }
                        ?>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">AFP</label>
      <select id="afp" name="afp" class="form-control">
        <option selected><?= $usuario['afp'] ?></option>
        <?php
                          $sql = "SELECT * FROM afp";
                          $query = $conn->query($sql);
                          while($lrow = $query->fetch_assoc()){
                            echo "
                              <option value='".$lrow['NOMBRE']."'>".$lrow['NOMBRE']."</option>
                            ";
                          }
                        ?>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">CESANTIAS</label>
      <select id="cesantia" name="cesantia" class="form-control">
        <option selected><?= $usuario['cesantia'] ?></option>
        <?php
                          $sql = "SELECT * FROM cesantias";
                          $query = $conn->query($sql);
                          while($lrow = $query->fetch_assoc()){
                            echo "
                              <option value='".$lrow['NOMBRE']."'>".$lrow['NOMBRE']."</option>
                            ";
                          }
                        ?>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">CAJA COMPENSACIÓN</label>
      <select id="caja_compensacion" name="caja_compensacion" class="form-control">
        <option selected><?= $usuario['caja_compensacion'] ?></option>
        <?php
                          $sql = "SELECT * FROM cesantias";
                          $query = $conn->query($sql);
                          while($lrow = $query->fetch_assoc()){
                            echo "
                              <option value='".$lrow['NOMBRE']."'>".$lrow['NOMBRE']."</option>
                            ";
                          }
                        ?>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">ARL</label>
      <select id="arl" name="arl" class="form-control">
        <option selected><?= $usuario['arl'] ?></option>
        <?php
                          $sql = "SELECT * FROM arl";
                          $query = $conn->query($sql);
                          while($lrow = $query->fetch_assoc()){
                            echo "
                              <option value='".$lrow['NOMBRE']."'>".$lrow['NOMBRE']."</option>
                            ";
                          }
                        ?>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">TIPO CONTRATO</label>
      <select id="tipo_contrato" name="tipo_contrato"  class="form-control">
        <option selected><?= $usuario['tipo_contrato'] ?></option>
        <?php
                          $sql = "SELECT * FROM tipo_contrato";
                          $query = $conn->query($sql);
                          while($lrow = $query->fetch_assoc()){
                            echo "
                              <option value='".$lrow['NOMBRE']."'>".$lrow['NOMBRE']."</option>
                            ";
                          }
                        ?>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">NIVEL ESCOLARIDAD</label>
      <select id="nivel_escolaridad" name="nivel_escolaridad" class="form-control">
        <option selected><?= $usuario['nivel_escolaridad'] ?></option>
        <?php
                          $sql = "SELECT * FROM nivel_escolaridad";
                          $query = $conn->query($sql);
                          while($lrow = $query->fetch_assoc()){
                            echo "
                              <option value='".$lrow['NOMBRE']."'>".$lrow['NOMBRE']."</option>
                            ";
                          }
                        ?>
      </select>
    </div>
    
    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">TITULO </label>
      <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $usuario['titulo'];  ?>">
    </div>

    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">MATRICULA PROFESIONAL</label>
      <input type="text" class="form-control" id="matricula_profesional" name="matricula_profesional" value="<?php echo $usuario['matricula_profesional'];  ?>">
    </div>


    <div class="form-row"> 
     
    </div>

  <div class="form-group">
    </div>
    <input type="hidden" name="accion" value="editar_registro">
                                <input type="hidden" name="id" value="<?php echo $id;?>">
<br>
<br><br><br><br><br><br>
<br>
<br>
<br>
<br>
<br>
 <center><button type="submit" class="btn btn-success" name="edit" >GUARDAR</button></center> 
</form>


</html>