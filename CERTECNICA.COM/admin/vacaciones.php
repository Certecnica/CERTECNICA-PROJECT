
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
          VACACIONES
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Empleado</li>
        <li class="active">Información Corporativa Empleado</li>
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
                  <th>EMPLEADO</th>
                  <th>FECHA CONTRATACIÓN</th>
                  <th>DIAS DE VACACIONES</th>
                  <th>DIAS SOLICITADOS</th>
                  <th>DIAS TOTALES</th>
                                </thead>
                <tbody>
                  <?php    
                  $sql= "SELECT * FROM vacaciones";
                    $query = $conn->query($sql);
                    while($fila = $query->fetch_assoc()){
                      ?>
                        <tr>
                          <td><?php echo $fila['empleado']; ?></td>
                          <td><?php echo $fila['fecha_contratacion']; ?></td>
                          <td>
                           <?php
                           $hireDate = $fila['fecha_contratacion'];
                           
                           $currentDate = date("Y-m-d");

                          $start = strtotime($hireDate);

                          $end = strtotime($currentDate);

                          $daysWorked = ($end - $start)/60/60/24;

                          $vacationDaysPerYear = 15;

                          $vacationDays = $vacationDaysPerYear * $daysWorked;

                          $vacationDaysPerDay = $vacationDays / 365;

                           echo "$vacationDaysPerDay";
                           ?>
                          </td>
                          <td>                     
<?php 
   
   $fecha_inicio = new DateTime('2023-02-21');

   $fecha_fin = new DateTime('2023-02-28');
   
   $festivos = array(
       '2023-02-23', // 
       '2023-02-27',
       '2023-04-06',
       '2023-04-07',
       '2023-01-01',
       '2023-05-01',
       '2023-05-22',
       '2023-06-12',
       '2023-06-19',
       '2023-07-03',
       '2023-07-20',
       '2023-08-07',
       '2023-08-21',
       '2023-10-16',
       '2023-11-06',
       '2023-11-13',
       '2023-12-08',
       '2023-12-25', // 
   );

   $interval = $fecha_inicio->diff($fecha_fin);
   
   $numero_dias = $interval->days + 1; 

   $intervalo = new DateInterval('P1D');

   $periodo = new DatePeriod($fecha_inicio, $intervalo, $fecha_fin);
   
   $contador_dias = 0;

   foreach ($periodo as $fecha) {
    
    $dia_semana = $fecha->format('N');
    
       $fecha_actual = $fecha->format('Y-m-d');
    
       if ($dia_semana < 7 && !in_array($fecha_actual, $festivos)) {
           $contador_dias++;
       }
   }
   if ($fecha_inicio->format('N') < 6 && !in_array($fecha_inicio->format('Y-m-d'), $festivos)) {
       
    $contador_dias++;
   }
   if ($fecha_fin->format('N') < 6 && !in_array($fecha_fin->format('Y-m-d'), $festivos)) {
     
    $contador_dias++;
   }
   echo "Días hábiles entre " . $fecha_inicio->format('Y-m-d') . " y " . $fecha_fin->format('Y-m-d') . ": " . $contador_dias;
   ?>
   </td>
   <td> 
   <?php

echo "Dias Totales: " . $numero_dias; ?>

</td>
                            
                          </td>
                        </tr>
                      <?php
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
    url: 'empleado_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.empid').val(response.empid);
      $('#edit_cargo_val').val(response.cargo).html(response.description);
    }
  });
}
</script>
</body>
</html>
