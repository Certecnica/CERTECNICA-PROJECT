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
          BENEFICIARIOS
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Empleado</li>
        <li class="active">Información de beneficiarios</li>
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
                  <th>NOMBRE BENEFICIARIO</th>
                  <th>PARENTESCO</th> 
                  <th>TIPO DOCUMENTO</th>
                  <th>N° DOCUMENTO</th>
                  <th>FECHA NACIMIENTO</th>
                  <th>EPS</th>
                  <th>EDAD</th>
                  <th>Acción</th>
                </thead>
                <tbody>
                  <?php    
                  $sql= "SELECT * FROM  beneficiarios ";
                    $query = $conn->query($sql);
                    while($fila = $query->fetch_assoc()){
                      ?>
                        <tr>
                          <td><?php echo $fila['nombres_emp']; ?></td>
                          <td><?php echo $fila['nombre_bene']; ?></td>
                          <td><?php echo $fila['parentesco']; ?></td>
                          <td><?php echo $fila['tipo_documento']; ?></td>
                          <td><?php echo $fila['documento_bene'] ?></td>
                          <td><?php echo $fila['fecha_nacimiento']?></td>
                          <td><?php echo $fila['eps']?></td>
                        <td>
                            <?php 
                            $dato = $fila['fecha_nacimiento'];
                            $fecha_nacimiento = new DateTime($dato);
                            $hoy = new DateTime();
                            $edad = $hoy->diff($fecha_nacimiento);
                            echo " " . $edad->y . " AÑOS";
                            ?>
                        </td>
                        <td><a class='btn btn-success btn-sm editar btn-flat' href="editar_beneficiarios.php?id=<?php echo $fila['id']?> "><i class="fa fa-edit">  Editar</i></a>
                        <a class='btn btn-danger   btn-sm eliminar btn-flat' href="eliminar_beneficiario.php?id=<?php echo $fila['id']?> "><i class="fa fa-trash">  Eliminar</i></a>
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
    </body>
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
    