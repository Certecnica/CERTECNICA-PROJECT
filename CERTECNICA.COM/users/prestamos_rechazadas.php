<?php include 'includes/session.php'; ?>

<?php 

$documentos = $conexion2 -> prepare("SELECT * FROM solicitud_prestamo WHERE estado_GH = 'Rechazado' OR estado_subgerencia = 'Rechazado' OR estado_DA = 'Rechazado'") ;

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
        SOLICITUD DE PRESTAMO
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
               <a href="#addPrestamo" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>MONTO SOLICITADO</th>
                  <th>CUOTAS</th>
                  <th>FECHA PRIMER DESCUENTO</th>
                  <th>DESTINO PRESTAMO </th>
                  <th>APROBACIÓN GESTION HUMANA</th>
                  <th>APROBACIÓN SUBGERENCIA</th>
                  <th>APROBACIÓN DIRECTOR ADMINISTRATIVO</th>
                  <th>ACCIONES</th>
                </thead>
                <tbody>
                <?php foreach ($listado as $key => $value) { ?>
              <tr>
                          <td><?php echo $value['empleado']; ?></td>
                          <td><?php echo $value['cuotas']; ?></td>
                          <td><?php echo $value['fecha_primer_descuento']; ?></td>
                          <td><?php echo $value['destino_prestamo']; ?></td>                  
                          <td><?php echo $value['estado_GH']; ?></td>
                          <td><?php echo $value['estado_subgerencia']; ?></td>
                          <td><?php echo $value['estado_DA']; ?></td>
                          
                          <td><a class='btn btn-danger btn-sm editar btn-flat' href="ver_solicitud_prestamo.php?id=<?php echo $value['id']?>"><i class="fa fa-eye" aria-hidden="true"></i> Ver Solicitud</a>

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
</div>
<?php include 'includes/scripts.php'; ?>
<?php include 'modal_solicitud_prestamo.php'?>
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