<?php include 'includes/session.php'; ?>

<?php $documentos = $conexion2 -> prepare("SELECT * FROM solicitudes") ;
$documentos -> execute();
$listado = $documentos ->fetchAll();
?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>
  <style>
        h1 {
            text-align: center;
            font-size: 2.5em;
            font-weight: bold;
            padding-top: 1em;
        }

        .mycontainer {
            width: 90%;
            margin: 1.5rem auto;
            min-height: 60vh;
        }

        .mycontainer table {
            margin: 1.5rem auto;
        }
    </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Solicitudes
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Solicitudes</li>
        <li class="active">Lista de Solicitudes</li>
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
               <a href="#addsolicitud" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Empleado</th>
                  <th>Motivo</th>
                  <th>descripcion</th>
                  <th>fecha de permiso</th>
                  <th>N° de dias</th>
                  <th>N° de horas</th>
                  <th>Aprobacion Gestion Humana</th>
                  <th>Aprobacion de Jefe </th>
                  <th>Acciones</th>

                </thead>
                <tbody>
                <?php foreach ($listado as $key => $value) { ?>
                <?php $datetime1 = new DateTime($value['fecha_inicio']);
                $datetime2 = new DateTime($value['fecha_fin']);
                $interval = $datetime1->diff($datetime2);
                ?>         
                        <tr>
                          <td><?php echo $value['emplead']; ?></td>
                          <td><?php echo $value['Motivo']; ?></td>
                          <td><?php echo $value['descripcion']; ?></td>
                          <td><?php echo $datetime1->format('Y/m/d  h:i:s ') ?><b> Hasta </b> <?php echo $datetime2->format('Y/m/d/ h:i:s') ?></td>                  
                          <td><?php echo $interval->format('%a Dia/s') ?></td>
                          <td><?php echo $interval->format('%H Horas %i Minutos') ?></td>
                          <td><?php echo $value['aprobacion_GH'] ?></td>
                          <td><?php echo  $value['estado_JF'] ?></td>

                          <td><button type="button" class="btn btn-warning"><a href="<?php echo $value['documento']; ?>">Descargar Archivo</a></td></button>

                        </tr>
                    <?php
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


</html>
<?php
ini_set('display_errors', true);
error_reporting(E_ALL);
?>
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
</body>
</html>
