<?php include 'includes/session.php'; ?>

<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>

  <?php include 'includes/menubar.php'; ?>

<?php 
  $documento = $conexion2 -> prepare("SELECT * FROM sanciones") ;
$documento -> execute();
$lista = $documento ->fetchAll();
?>
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">

      <h1>
         Sanciones Empleado
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>

        <li>Sanciones</li>

        <li class="active">Sanciones Empleados</li>
        
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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
               <a href="#addSancion" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Empleado</th>
                  <th>Fecha Falla</th>
                  <th>Fecha sancion</th>
                  <th>Motivo</th>
                  <th>Descripción</th>
                  <th>Fecha Creación</th>
                  <th>Archivo </th>
                  <th>Acciones</th>
                </thead>
                <tbody>
                <?php foreach ($lista as $key => $valor) { ?>                
                        <tr>
                          <td><?php echo $valor['EMPLEADO']; ?></td>
                          <td><?php echo $valor['FECHA_FALLA']; ?></td>
                          <td><?php echo $valor['FECHA_SANCION']; ?></td>
                          <td><?php echo $valor['MOTIVO']; ?></td>
                          <td><?php echo $valor['DESCRIPCION']; ?></td>
                          <td><?php echo $valor['Fecha_subida']; ?></td>
                          <td><a href="<?php echo $valor['DOCUMENTO']; ?>">Descargar Archivo</a></td>
                          <td><a href="eliminar.php?id=<?php echo $valor['id']; ?>">Eliminar</a></td>
                        </tr>
                    <?php 
                    } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</section>   
  </div>
  <?php include 'modal_sanciones.php'?>

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
</body>
</html>
