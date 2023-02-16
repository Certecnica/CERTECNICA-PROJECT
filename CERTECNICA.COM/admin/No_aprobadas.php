<?php include 'includes/session.php'; ?>

<?php include 'includes/header.php'; ?>

<?php 

$documentos = $conexion2 -> prepare("SELECT * FROM solicitudes") ;

$documentos -> execute();

$listado = $documentos ->fetchAll();
?>

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
        <li class="active">Solicitudes No Aprovadas</li>
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

            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>ID de solicitud</th>
                  <th>motivo</th>
                  <th>Empleado</th>
                  <th>descripcion</th>
                  <th>fecha_inicio</th>
                  <th>N° de dias</th>
                  <th>N° de horas</th>
                  <th>Aprobacion Gestion Humana</th>
                  <th>SOPORTES</th>
                </thead>
                <tbody>
                  <?php
                  global $row;
                 $leaves = mysqli_query($conn,"SELECT * FROM solicitudes WHERE aprobacion_GH='Rechazada' OR estado_JF ='Rechazada'");
                 if($leaves){
                   $numrow = mysqli_num_rows($leaves);
                   if($numrow!=0){
                     $cnt=1;
                     while($row1 = mysqli_fetch_array($leaves)){
                       $datetime1 = new DateTime($row1['fecha_inicio']);
                       $datetime2 = new DateTime($row1['fecha_fin']);
                       $interval = $datetime1->diff($datetime2);
                       
                       echo "<tr>
                       <td>$cnt</td>
                       <td>{$row1['Motivo']}</td>
                       <td>{$row1['emplead']}</td>
                       <td>{$row1['descripcion']}</td>
                       <td>{$datetime1->format('Y/m/d  h:i:s ')} <b> Hasta </b> {$datetime2->format('Y/m/d/ h:i:s')}</td>
                       <td>{$interval->format('%a Dia/s')}</td>
                       <td>{$interval->format('%H Horas %i Minutos')}</td>
                       <td>{$row1['aprobacion_GH']}</td>
                       "
                       ?>
                       <td>
                       <button type="button" class="btn btn-link"><a href="<?php echo $row1['documento']; ?>"> <i class="fa fa-download" aria-hidden="true"></i>Descargar Archivo</a></button></td>
                       </tr>
                       <?php
                    $cnt++; }
                   } else {
                     echo"<tr class='text-center'><td colspan='12'>YOU DON'T HAVE ANY LEAVE HISTORY! PLEASE APPLY TO VIEW YOUR STATUS HERE!</td></tr>";
                   }
                 }
                 else{
                  echo "Query Error : " . "SELECT * FROM solicitudes WHERE aprobacion_GH ='Pendiente'" . "<br>" . mysqli_error($conn);

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
