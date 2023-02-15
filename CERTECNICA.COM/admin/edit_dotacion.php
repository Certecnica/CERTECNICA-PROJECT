
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
         EDITAR DOTACIÓN
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

<?php
$id= $_GET['id'];
$conexion= mysqli_connect("localhost", "root", "", "apsystem");
$consulta= "SELECT * FROM dotacion WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);
?>


<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>


    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body id="page-top">


<form  action="editar_dotacion.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br>
                            <br>
                            <div class="form-group">
                            <div class="form-group"  name="empleado" id="empleado">
                            <input  type="text" name="empleado" class="form-control" id="empleado" placeholder="INGRESE LA TALLA DE CAMISA" value="<?php echo $usuario['EMPLEADO'];?>" readonly>
                   </div>
  <br>
                
                        <input  type="text" name="TALLA_CAMISA" class="form-control" id="TALLA_CAMISA" placeholder="INGRESE LA TALLA DE CAMISA" value="<?php echo $usuario['TALLA_CAMISA'];?>">
                      <br>
                      <input  type="text" name="TALLA_CALZADO" class="form-control" id="TALLA_CALZADO" placeholder="INGRESE LA TALLA DE CALZADO" value="<?php echo $usuario['TALLA_CALZADO'];?>">
                      <br>
                      <input  type="text" name="TALLA_CHAQUETA" class="form-control" id="TALLA_CHAQUETA" placeholder="INGRESE LA TALLA DE CHAQUETA" value="<?php echo $usuario['TALLA_CHAQUETA'];?>">
                      <br>
                      <input  type="text" name="TALLA_PANTALON" class="form-control" id="TALLA_PANTALON" placeholder="INGRESE LA TALLA DE PANTALON" value="<?php echo $usuario['TALLA_PANTALON'];?>">
                      <br>
                            </div>
                                <input type="hidden" name="accion" value="editar_registro">
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                            </div>
                                 <br>

                                <div class="mb-3">

                                <button type="submit" class="btn btn-success" >Editar</button>
                               <a href="index.php" class="btn btn-danger">Cancelar</a>
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</div>
  <?php include 'modal_add_dotacion.php' ?>  
 
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
    url: 'dotacion_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
    $('#dotacion_id').val(response.id);
    $('')
    }
  });
}
</script>

</body>

</html>