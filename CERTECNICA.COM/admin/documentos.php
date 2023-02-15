<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>
<?php 

$sqlquery4 = " SELECT firstname,lastname FROM employees";
$data = $conn ->query($sqlquery4);
?>
<?php 

$sqlquery5 = " SELECT NOMBRE FROM tipo_documento";
$datos = $conn ->query($sqlquery5);
?>
<?php $documentos = $conexion2 -> prepare("SELECT * FROM documentos") ;
$documentos -> execute();
$listado = $documentos ->fetchAll();
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Documentación
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Documentación</li>
        <li class="active">Documentación Empleados</li>
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

<section>

<div class="container">
<form action="guardar.php" method="post" enctype="multipart/form-data" class="col-md-6" >
                 
<br>
<div class="">
                    <label name="empleado" id="empleado" class="form-label"> EMPLEADO: </label>     
                    <select name="empleado" id="empleado">
                     <br>
                     <br>
                    <?php 
                    while ($row_data = $data -> fetch_assoc()) { ?>
                   <option value="<?php echo $row_data ["firstname"] ; echo $row_data ["lastname"] ?>"> <?=$row_data["firstname"] ; echo $row_data ["lastname"]?></option> 
                   <?php } ?>                </div>
<br>
<br>
<div class="">
<label for="documento" class="form" >Documento</label>
<input type="file" class="form-control" id="documento" name="documento" >
</div>
<br>
<div>
<label for="Tdocumento" class="form-label" >Tipo Documento :</label>
<input type="text" class="form-control" id="Tdocumento" name="Tdocumento">
</div>
<br>
<center><button  type="submit" name="guardar" class="btn btn-success">Guardar</button></center>
</form>
</div>
<br>
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
          
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Empleado</th>
                  <th>Tipo Documento</th>
                  <th>Fecha Subida</th>
                  <th>Descargar Archivo</th>
                  <th>Eliminar Archivo</th>
                </thead>
                <tbody>
                 <?php foreach ($listado as $key => $value) { ?>                
                        <tr>
                          <td><?php echo $value['EMPLEADO']; ?></td>
                          <td><?php echo $value['tipo_documento']; ?></td>
                          <td><?php echo $value['Fecha_subida']; ?></td>
                          <td><button type="button" class="btn btn-warning"><a href="<?php echo $value['DOCUMENTO']; ?>">Descargar Archivo</a></td></button>
                          <td><button type="button" class="btn btn-success"><a href="eliminar.php?id=<?php echo $value['id']; ?>">Eliminar</a></td></button>
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

</section>   
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
