<?php include 'includes/session.php'; ?>

<?php 
  include '../timezone.php'; 
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }
?>

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
        Panel de Control
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Panel de Control</li>
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
      <script src="https://code.iconify.design/iconify-icon/1.0.4/iconify-icon.min.js"></script>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM employees";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>Total de Empleados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="employee.php" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
         <!-- -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM position";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>Total Cargos</p>
            </div>
            <div class="icon">
            <iconify-icon icon="ion:briefcase"></iconify-icon>
          </div>
            <a href="position.php" class="small-box-footer"> Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM solicitudes WHERE estado_JF ='Aceptado' AND aprobacion_GH = 'Pendiente'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>Solicitudes Pendientes</p>
            </div>
            <div class="icon">
            <iconify-icon icon="ion:alarm-sharp"></iconify-icon>
                      </div>
            <a href="admin_solicitudes.php" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

<div class="row">
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM solicitudes";
                $query = $conn->query($sql);
                echo "<h3>".$query->num_rows."</h3>";
              ?>
              <p>Total de solicitudes</p>
            </div>
            <div class="icon">
            <iconify-icon icon="ion:documents-sharp"></iconify-icon>
          </div>
            <a href="historia_solicitudes.php" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="row">
        <div class="col-lg-5 col-xs-3">
          <!-- small box -->

        <!-- ./col -->
      </div>
    
     
      </section>
      <!-- right col -->
    </div>
</div>
<!-- ./wrapper -->

<!-- Chart Data -->

<!-- End Chart Data -->
<?php include 'includes/scripts.php'; ?>

</body>
</html>
