
<?php

include 'includes/session.php';

$id_user = $_SESSION['employees'];

$sql = "SELECT * FROM vacaciones WHERE id = '$id_user'";

$result = mysqli_query($conn , $sql);

$row = mysqli_fetch_assoc($result);

$fecha_inicio = strtotime($row ['fecha_contratacion']);

$fecha_actual = time ();

$dias_trabajados = ($fecha_actual - $fecha_inicio ) /86400;

if ($dias_trabajados > 365){?>

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
       Solicitudes de vacaciones
      </h1>
     
      <ol class="breadcrumb">
       
      <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>

        <li>Empleado</li>
        
        <li class="active">Solicitud de permisos </li>
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
    <body>
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
               <a href="#addsolicitud" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>NUMERO DE SOLICITUD</th>
                  <th>EMPLEADO</th>
                  <th>FECHA INICIO</th>
				          <th>FECHA FIN</th>
				          <th>DIAS TOTALES</th>
                </thead>
                <tbody>
                  <?php
                  $id = $_SESSION['employees'];
                 $leaves = mysqli_query($conn,"SELECT * FROM solicitudes_vacaciones WHERE user_id = '$id' ");
                 if($leaves){
                   $numrow = mysqli_num_rows($leaves);
                   if($numrow!=0){
                     $cnt=1;
                     while($row1 = mysqli_fetch_array($leaves)){
                       ?>
                <tr>
                       <td><?php echo $cnt?></td>
                       <td><?php echo $row1['empleado'] ?></td>
                       <td><?php echo $row1['descripcion']?></td>
                       <td> 
                       <?php 
?>
  </td>
          </tr>
                    <?php $cnt++; 
                }
                   } else {
                     echo"<tr class='text-center'><td colspan='12'>YOU DON'T HAVE ANY LEAVE HISTORY! PLEASE APPLY TO VIEW YOUR STATUS HERE!</td></tr>";
                   }
                 }
                 else{
                   echo "Query Error : " .  " SELECT descripcion, aprobacion_GH FROM solicitudes WHERE id='".$_SESSION['employees']."'" . "<br>" . mysqli_error($conn);;
                 }
             ?>
     </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
</body>                        
</section>   
</div>
<?php include 'includes/scripts.php'; ?>
<?php include 'modal_solicitud_vacaciones.php'; ?>
</body>
</html>
<?php 
}else{
  // en caso de que el rol no esté definido, redirigir a una página de error o mostrar un mensaje de error
  header('location: error_vacaciones.php');
  }

?>


