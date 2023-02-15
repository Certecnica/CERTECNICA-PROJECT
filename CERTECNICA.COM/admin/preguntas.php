
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

    <body>
    <div class="col-md-12">

<div class="table-responsive">
<?php
$numero=1; 
include("includes/conn.php"); 
$id=$_GET['id'];
$categoria=$_GET['categoria'];
$titulo=$_GET['titulo'];
echo "<a href='evaluacion.php?id=$id&categoria=$categoria&titulo=$titulo'><button type='button' class='btn btn-info' > <<< REGRESAR ATRAS</button></a>";
?>
<table class="table table-bordered table-hover">

<form action="preguntasx.php" method="post" enctype="multipart/form-data">
  <thead>
    <tr>
      <th colspan="4" ><h3> Formula tu pregunta</h3></th>

    </tr>
  </thead>
  
<tr>
      <td>Pregunta:</td>
      <td><textarea name="preg" class="form-control" placeholder="Escriba la pregunta" rows="3" required></textarea></td>
      <td><br>Escriba la Respuesta:</td>
      <td>
      <input type="text" name="resp" class="form-control" placeholder="Escriba la respuesta igual al inciso correcto..." style="background-color:#F8F683;" required><br>
      <input type="text" name="A" class="form-control" placeholder="Escriba la respuesta del inciso A" required><br>
      <input type="text" name="B" class="form-control" placeholder="Escriba la respuesta del inciso B" required><br>
      <input type="text" name="C" class="form-control" placeholder="Escriba la respuesta del inciso C" required><br>
      <input type="text" name="D" class="form-control" placeholder="Escriba la respuesta del inciso D" required>
      <input type="hidden" name="id" value="<?php echo $id;?>">
      <input type="hidden" name="categoria" value="<?php echo $categoria;?>">
      <input type="hidden" name="numero" value="<?php echo $numero;?>">
      <input type="hidden" name="titulo" value="<?php echo $titulo;?>"></td>
      
</tr>
<tr>
<td colspan="3"></td><td><button type="submit" class="btn btn-success" >GUARDAR</button></td>
</tr>



  </form>
</table>



</div><!--fin de la tabla responsive-->
<!--<font class="alert alert-danger" style="font-size:17px;"> Se le Recomienda Realizar las <b>10 Preguntas</b> con sus Respuestas para el Buen Funcionamiento del SISTEMA gracias</font>-->
</div>
<?php
?> 


    </body>                        
    </section>   
</div>
  </tbody>
</table>
<?php include 'includes/scripts.php'; ?>
</body>

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
    <script src="js/jquery.min.js"></script>
    <script src="'js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    function formToggle(ID){
    
        var element = document.getElementById(ID);
        
        if(element.style.display === "none"){
    
            element.style.display = "block";
        }
        else{
            element.style.display = "none";
        }
    }
    </script>
    </body>
    </html>