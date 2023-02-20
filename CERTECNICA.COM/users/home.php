<?php include 'includes/session.php';?>

<?php include 'includes/header.php'; ?>

<?php include 'includes/conn.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>

  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
  
    <section class="content-header">
  
    <script src="https://code.iconify.design/iconify-icon/1.0.4/iconify-icon.min.js"></script>

      <h1>

        Dashboard
      </h1>

      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Inicio</a></li>
        
        <li>Administradores</li>

        <li class="active">Lista de Administradores</li>
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
  
  <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <?php
               $id = $_SESSION['employees'];
               $leaves ="SELECT * FROM solicitudes WHERE id_user = '$id' AND aprobacion_GH = 'Aceptado' AND estado_JF = 'Aceptado' ";
                $query = $conn->query($leaves);

                echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>Solicitudes Aprobadas</p>
            </div>
            <div class="icon">
            <iconify-icon icon="ion:checkmark-circle-outline"></iconify-icon>
          </div>
            <a href="solicitudes_permisos.php" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <?php
               $id = $_SESSION['employees'];
               $leaves ="SELECT * FROM solicitudes WHERE id_user = '$id' AND aprobacion_GH = 'Rechazada' OR  estado_JF = 'Rechazada' ";
               $query = $conn->query($leaves);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
              <p>Solicitudes Rechazadas</p>
            </div>
            <div class="icon">
            <iconify-icon icon="ion:close-circle-outline"></iconify-icon>
          </div>
            <a href="solicitudes_rechazadas.php" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php
               $id = $_SESSION['employees'];
               $leaves ="SELECT * FROM solicitudes WHERE id_user = '$id' AND aprobacion_GH = 'Pendiente' OR  estado_JF = 'Pendiente' ";
               $query = $conn->query($leaves);
                echo "<h3>".$query->num_rows."</h3>";
              ?>
              <p>Solicitudes Pendientes</p>
            </div>
            <div class="icon">
            <iconify-icon icon="ion:warning-outline"></iconify-icon>
          </div>
            <a href="solicitudes_pendientes.php" class="small-box-footer"> Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
  $('.photo').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });
});
function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'employee_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.empid').val(response.empid);
      $('.employee_id').html(response.id);
      $('.del_employee_name').html(response.firstname+' '+response.lastname);
      $('#employee_name').html(response.firstname+' '+response.lastname);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      $('#edit_address').val(response.address);
      $('#datepicker_edit').val(response.birthdate);
      $('#edit_contact').val(response.contact_info);
      $('#gender_val').val(response.gender).html(response.gender);
      $('#position_val').val(response.position_id).html(response.description);
      $('#schedule_val').val(response.schedule_id).html(response.time_in+' - '+response.time_out);
    }
  });
}
</script>
</body>
</html>
