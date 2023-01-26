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
<?php
include("funciones.php");

$resultado_preguntas = obetenerTodasLasPreguntas();
?>
    <title>Examenes</title>

<body>
  <br>
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Tema</th>
                  <th>Pregunta</th>
                  <th>Opcion a</th>
                  <th>Opcion b</th>
                  <th>Opcion c</th>
                  <th>Opcion Correcta</th>
                  <th>Acción</th>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM preguntas";
                    $query = $conn->query($sql);
                        while ($row = mysqli_fetch_assoc($resultado_preguntas)) {
                      ?>
                        <tr>
                          <td><?php echo obtenerNombreTema($row['tema'])?></td>
                          <td><?php echo $row['pregunta']?></td>
                          <td><?php echo $row['opcion_a']?></td>
                          <td><?php echo $row['opcion_b']?></td>
                          <td><?php echo $row['opcion_c']?></td>
                          <td><?php echo $row['correcta']?></td>

                          <td>
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['id']; ?>"><i class="fa fa-edit"></i> Editar</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i> Eliminar</button>
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
              
              
              
              
              
              
              
              
              
              
              
              
                <!-- 
                <section id="listadoPreguntas">
                <?php while ($row = mysqli_fetch_assoc($resultado_preguntas)) : ?>
                    <div class="contenedor-pregunta">
                        <header>
                            <span class="tema"><?php echo obtenerNombreTema($row['tema'])?></span>
                            <div class="opciones">
                                <i class="fa-solid fa-pen-to-square" onclick="editarPregunta(<?php echo $row['id']?>)"></i>
                                <i class="fa-solid fa-trash" onclick="abrirModalEliminar(<?php echo $row['id']?>)"></i>
                                
                            </div>
                        </header>
                        <p class="pregunta"><?php echo $row['pregunta']?></p>
                        <div class="opcion">
                            <div class="caja <?php if($row['correcta']=='A'){ echo 'pintarVerde';}?>">
                                A
                            </div>
                            <span class="texto"><?php echo $row['opcion_a']?></span>
                        </div>
                        <div class="opcion">
                            <span class="caja <?php if($row['correcta']=='B'){ echo 'pintarVerde';}?>">B</span>
                            <span class="texto"><?php echo $row['opcion_b']?></span>
                        </div>
                        <div class="opcion">
                            <span class="caja <?php if($row['correcta']=='C'){ echo 'pintarVerde';}?>">C</span>
                            <span class="texto"><?php echo $row['opcion_c']?></span>
                        </div>
                    </div>
                    
                <?php endwhile ?>
                -->
                </section>
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
</body>
</html>

    <!-- The Modal para la eliminación de una Pregunta -->
    <div id="modalPregunta" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <p>¿Esta seguro que desea eliminar la Pregunta?</p>
            <button onclick="eliminarPregunta()" class="btn">Si</button>
            <button onclick="cerrarEliminar()" class="btn">Cancelar</button>
        </div>
    </div>
    <script src="script.js"></script>
    <script>paginaActiva(2);</script>   
</body>

<?php


    
        