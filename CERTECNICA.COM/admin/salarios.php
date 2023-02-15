<?php include 'includes/session.php'; ?>

<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

<?php 

$sqlquery4 = " SELECT firstname,lastname FROM employees";
$data = $conn ->query($sqlquery4);
?>
  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Salarios Empleados
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Salarios</li>
        <li class="active">salarios Empleados</li>
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
               <a href="#addSalario" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>EMPLEADO</th>
                  <th>Salario basico</th>
                  <th>Auxilio No Salarial</th> 
                  <th>Total</th>
                  <th>Acción</th>
                </thead>
                <tbody>
                  <?php    
                  $sql= "SELECT *FROM  salarios ";
                    $query = $conn->query($sql);
                  while ($fila = $query->fetch_assoc()) {
                    ?>
                      <tr>
                        <td><?php echo $fila['EMPLEADO'] ?></td>
                        <td><?php echo $fila['SALARIO_BASICO'] ?></td>
                        <td><?php echo $fila['AUX_NO_SALARIAL'] ?></td>
                        <td><?php 
                         
                         $suma_1 = $fila['SALARIO_BASICO'];
                         $suma_2 = $fila['AUX_NO_SALARIAL'];
                         $resultado = $suma_1 + $suma_2;
                        
                        
                        echo number_format($resultado) ?></td>
                        <td>
                        <a class='btn btn-success btn-sm editar btn-flat' href="edit_salarios.php?id=<?php echo $fila['id'] ?> "><i class="fa fa-edit">  Editar</i></a>
                        <a class='btn btn-danger btn-sm editar btn-flat' href="eliminar_salarios.php?id=<?php echo $fila['id']?> "><i class="fa fa-trash" aria-hidden="true"></i>
  Eliminar</i></a>
                        </td>
                      </tr>
                  <?php
                  }
                  ;
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
  <?php include 'modal_salarial.php'; ?>
  <?php include '../admin/includes/admin_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script></script>
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
</script>
</body>
</html>
