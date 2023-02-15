
<?php include 'includes/session.php'; ?>

<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">


<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
 
  <?php include 'includes/menubar.php'; ?>

  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        EDITAR ENTREGA
    </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Salarios</li>
        <li class="active">Lista de Salarios</li>
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

$consulta= "SELECT * FROM entrega_dotacion WHERE id = $id";

$resultado = mysqli_query($conexion, $consulta);

$usuario = mysqli_fetch_assoc($resultado);

$sql ="SELECT * FROM productos_dotacion WHERE id = $id";

$result = mysqli_query($conexion , $sql);

$row = mysqli_fetch_assoc($result)

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body id="page-top">


<form  action="functions_entrega.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                      <br>
                            <div class="form-group">
                            <div class="form-group"  name="empleado" id="empleado">
                            <input  type="text" name="empleado" class="form-control" id="empleado" placeholder="INGRESE EL EMPLEADO" value="<?php echo $usuario['empleado'];?>" readonly>
                   </div>
                <br>
                        <input  type="date" name="fecha_entrega" class="form-control" id="fecha_entrega" value="<?php echo $usuario['fecha_entrega'];?>">
                      <br>
                      <div >
                    
                      <select class="form-control" name="elemento" id="elemento" >
                        <option  selected><?= $usuario['elemento']?></option>
                        <?php
                          $sql = "SELECT * FROM productos_dotacion";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['producto']. "'>".$prow['producto']."</option>
                            ";
                          }
                        ?>
                      </select>
                </div>	
</div>
<input  type="text" name="descripcion" class="form-control" id="descripcion" value="<?php echo $usuario['descripcion'];?>"
                    </div><br>
                                <input type="hidden" name="accion" value="editar_registro">
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                            </div>                              
<center>
                                <div class="mb-3">
                                <button type="submit" class="btn btn-success" >Editar</button>
                               <a href="entregas.php" class="btn btn-danger">Cancelar</a>
                            </div>
                          </center>
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
</div>
<?php include 'includes/scripts.php'; ?>
</div>
</div>
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