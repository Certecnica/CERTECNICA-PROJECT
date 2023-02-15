
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
       Llegadas Empleados
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
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
<?php if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Se Actualizo Correctamente';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Ocurrio un error, intente de nuevo';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Por Favor suba un archivo valido CSV.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}
?>
<!-- Display status message -->
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
            <div class="row">
    <!-- Import link -->
    <div class="col-md-12 head">
        <div class="float-right">
            <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i>Importar</a>
        </div>
    </div>
    <br>
<div class="col-md-12" id="importFrm" style="display: none;">
        <form action="importData.php" method="post" enctype="multipart/form-data">
        <br>    
        <input type="file" name="file" />
            <br>    
        <input type="submit" class="btn btn-danger" name="importSubmit" value="Importar archivo">
        </form>
    </div><br>
            </div>
            <a href="PruebaV.php" class="btn btn-danger"><b>PDF</b>
       <i class="fa-solid fa-file-pdf"></i> </a>
 <br>
            <div class="box-body">
  
  <?php

  include('includes/conn.php');
  
  $sqlClientes = ("SELECT * FROM llegadas ORDER BY id ASC");
  $queryData   = mysqli_query($conn, $sqlClientes);
  $total_client = mysqli_num_rows($queryData);
  
  ?>
 <table id="example1" class="table table-bordered">
          <thead>
            <tr>
              <th>NOMBRES</th>
              <th>APELLIDOS</th>
              <th>FECHA</th>
              <th>HORA LLEGADA</th>
              <th>HORA SALIDA</th>
              <th>ESTADO DE ENTRADA</th>
              <th>ESTADO DE SALIDA</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i = 1;
            while ($data = mysqli_fetch_array($queryData)) { ?>
            <tr>
              <td><?php echo $data['NOMBRES']; ?></td>
              <td><?php echo $data['APELLIDOS']; ?></td>
              <td><?php echo $data['FECHA']; ?></td>
              <td><?php echo $data['HORA_LLEGADA']; ?></td>
              <td><?php echo $data['HORA_SALIDA']; ?></td>
              <td>
              <?php 
            $hora_entrada = $data['HORA_LLEGADA'];

            $currentTime = new DateTime("07:00:00");
            $hora_puntual = date_format($currentTime, 'H:i:s');
            
            if ($hora_entrada > $hora_puntual) {
                echo "  <button class='btn btn-danger btn-sm edit btn-flat'>Tarde</button>";
              } else {
                echo "  <button class='btn btn-success btn-sm edit btn-flat'>Temprano</button>";
              }
            ?>
              </td>
              <td>
                  <?php              
                  $hora_salida = $data['HORA_SALIDA'];
                  $currentTiempo = new DateTime("17:15:00");
                  $puntual_salida = date_format($currentTiempo, 'H:i:s');
                  if ($hora_salida < $puntual_salida) {
                    echo "  <button class='btn btn-warning btn-sm edit btn-flat'>Antes de tiempo</button>";
                  } else {
                    echo "  <button class='btn btn-info btn-sm edit btn-flat'> A tiempo </button>";
                  }
                  ?>
              </td>
            </tr>
          <?php } ?> 
          </tbody>
        </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
  <?php include 'includes/footer.php'; ?>

  <?php include '../admin/includes/admin_modal.php'; ?>

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
<script src="js/jquery.min.js"></script>
<script src="'js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
function formToggle(ID){

    var element = document.getElementById(ID);
    
    if(element.style.display === "none"){

        element.style.display = "block";
    }
    else{
        element.style.display = "none";
    }
}
</script>
</body>
</html>
