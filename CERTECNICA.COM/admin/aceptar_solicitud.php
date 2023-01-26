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
        Lista de Empleados
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Empleados</li>
        <li class="active">Lista de Empleados</li>
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
               <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>ID de solicitud</th>
                  <th>motivo</th>
                  <th>Empleado</th>
                  <th>descripcion</th>
                  <th>fecha_inicio</th>
                  <th>N° de dias</th>
                  <th>Aprobacion de Jefe </th>
                  <th>Aprobacion Gestion Humana</th>
                  <th>Acción</th>
                </thead>
                <tbody>
                  <?php
                   global $row;
                   $query = mysqli_query($conn,"SELECT * FROM solicitudes WHERE aprobacion_GH ='Pendiente'");
                   $numrow = mysqli_num_rows($query);
                      if ($query) {
                          if ($numrow != 0) {
                              $cnt = 1;

                              while ($row = mysqli_fetch_assoc($query)) {
                                  $datetime1 = new DateTime($row['fecha_inicio']);
                                  $datetime2 = new DateTime($row['fecha_fin']);
                                  $interval = $datetime1->diff($datetime2);
                                  echo "<tr>
                                            <td>$cnt</td>
                                            <td>{$row['Motivo']}</td>
                                            <td>{$row['descripcion']}</td>
                                            <td>{$datetime1->format('Y/m/d')} <b>--</b> {$datetime2->format('Y/m/d')}</td>
                                            <td>{$interval->format('%a Day/s')}</td>
                                            <td>{$row['aprobacion_GH']}</td>
                                            <td>{$row['estado_JF']}</td>

                                            <td><a href=\"updateStatusAccept.php?id={$row['id']}&descripcion={$row['descripcion']}\"><button class='btn-success btn-sm' >Aceptar</button></a>
                                            <a href=\"updateStatusReject.php?id={$row['id']}&descripcion={$row['descripcion']}\"><button class='btn-danger btn-sm' >Rechazar</button></a></td>
                                          </tr>";
                                  $cnt++;
                              }
                          }
                      }
                  
                        ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    

<?php include 'includes/footer.php'; ?>
  <?php include 'includes/employee_modal.php'; ?>
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
      $('.employee_id').html(response.employee_id);
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
