
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
       Solicitudes  de Permiso
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
                <th>ID de solicitud</th>
                  <th>motivo</th>
                  <th>Empleado</th>
                  <th>descripcion</th>
                  <th>fecha_inicio</th>
                  <th>N° de dias</th>
                  <th>N° de horas</th>
                  <th>Aprobacion Gestion Humana</th>
                  <th>Aprobacion de Jefe </th>
                </thead>
                <tbody>
                  <?php
                 $leaves = mysqli_query($conn,"SELECT * FROM solicitudes");
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
                       <td>{$row1['estado_JF']}</td>
                             </tr>";
                    $cnt++; }
                   } else {
                     echo"<tr class='text-center'><td colspan='12'>YOU DON'T HAVE ANY LEAVE HISTORY! PLEASE APPLY TO VIEW YOUR STATUS HERE!</td></tr>";
                   }
                 }
                 else{
                   echo "Query Error : " . "SELECT descripcion, aprobacion_GH FROM solicitudes WHERE id='".$_SESSION['employee']."'" . "<br>" . mysqli_error($conn);;
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
<?php include 'includes/footer.php'; ?>
<?php include 'modal_solicitud.php'; ?>
</body>
</html>

