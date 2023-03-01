<?php include 'includes/session.php';?>

<?php 	

  include 'includes/conn.php';

if($user['position_id'] == '9'){?>
    
    <?php include 'includes/header.php'; ?>
    
    <body class="hold-transition skin-blue sidebar-mini">
    
    <div class="wrapper">

    <?php 

    $documentos = $conexion2 -> prepare("SELECT * FROM solicitudes WHERE area = 'TECNICA' AND estado_JF = 'Pendiente'") ;
    
    $documentos -> execute();
    
    $listado = $documentos ->fetchAll();

    ?>

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
            SOLICITUDES
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li>SOLICITUDES</li>
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
                <div class="box-body">
                  <table id="example1" class="table table-bordered">
                    <thead>
                      <th>ID DE SOLICITUD</th>
                      <th>MOTIVO</th>
                      <th>EMPLEADO</th>
                      <th>DESCRIPCION</th>
                      <th>FECHA</th>
                      <th>N° DE DIAS</th>
                      <th>N° DE HORAS</th>
                      <th> COMENTARIOS Y SOPORTE</th>
                      <th>ACCIONES</th>
                    </thead>
                    <tbody>
                      <?php
                         global $row;
                         $leaves = mysqli_query($conn,"SELECT * FROM solicitudes  WHERE area = 'TECNICA' AND estado_JF = 'Pendiente'");
                         if($leaves){
                         $numrow = mysqli_num_rows($leaves);
                            if($numrow!=0){
                         $cnt=1;
                         while($row1 = mysqli_fetch_array($leaves)){
                           $datetime1 = new DateTime($row1['fecha_inicio']);
                           $datetime2 = new DateTime($row1['fecha_fin']);
                           $interval = $datetime1->diff($datetime2);
                            ?>
                           <tr>
                           <td><?php echo $cnt?></td>
                           <td><?php echo $row1['Motivo']?></td>
                           <td><?php echo $row1['emplead']?></td>
                           <td><?php echo $row1['descripcion']?></td>
                           <td><?php echo $datetime1->format('Y/m/d  h:i:s ')?> <b> Hasta </b><?php echo $datetime2->format('Y/m/d/ h:i:s')?></td>
                           <td><?php echo $interval->format('%a Dia/s')?></td>
                           <td><?php echo $interval->format('%H Horas %i Minutos')?></td>
                           <td>
                          <a class='btn btn-primary btn-sm editar btn-flat' href="ver_solicitud_tecnica.php?id=<?php echo $row1['id']?>"><i class="fa fa-commenting-o" aria-hidden="true"></i> Añadir Comentario</a>
                          <br>
                          <button type="button" class="btn btn-link"><a href="<?php echo $row1['documento']; ?>"> <i class="fa fa-download" aria-hidden="true"></i>Descargar Archivo</a></button></td>
                        </td>
                           <td>
                            <?php echo"  
                          <a href=\"UpdateStatusTecnica.php?id={$row1['id']}&descripcion={$row1['descripcion']}\"><button class='btn-success btn-sm' >Aceptar</button></a>"?>
                          <a class='btn btn-danger btn-sm rechazar btn-flat' href="rechazar_tecnica.php?id=<?php echo $row1['id']?>" > Rechazar </a>
                        </td>
                          </tr>
                          <?php 
                           ;
                        $cnt++; }
                       } else {
                         echo"<tr class='text-center'><td colspan='12'> NO TIENES SOLICITUDES PENDIENTES POR APROBACIÓN!</td></tr>";
                       }
                     }
                     else{
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
    <?php
	  }else{
		// en caso de que el rol no esté definido, redirigir a una página de error o mostrar un mensaje de error
		header('location: error.php');
	  }
	?>