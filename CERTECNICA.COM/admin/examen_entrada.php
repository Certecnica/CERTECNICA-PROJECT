
<?php include 'includes/conn.php'?>

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
       Llegadas Empleados
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
      <body>

      <div class="col-md-10">

<div class="table-responsive">

<table class="table table-bordered table-hover">

<form action="eva_nuevax.php" method="post" enctype="multipart/form-data">
  <thead class="bg-secondary text-white">

    <tr>
      <th colspan="4" ><h3> Formulario de la Evaluación</h3></th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="warning">Categoría:
      <input type="hidden" name="autor" value="<?php echo $usuario;?>">
      <input type="hidden" name="gestion" value="<?php $gestions=date("Y"); echo $gestions;?>">
      </td>
      <td><select name="categoria" class="form-control">
      <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM categoria";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['categoria']."'>".$prow['categoria']."</option>
                            ";
                          }
                        ?>
      </select></td>
<tr>

        <td class="warning">Estado:</td>
        <td><select name="estado" class="form-control">
          <option value="">Seleccionar</option>
          <option value="Publicado">Publicado</option>
          <option value="Despublicado">No</option>
        </select></td>
</tr>
<tr>

        <td>Tiempo del Examen:</td>
        <td><select name="tiempo" class="form-control">
          <option value="1">1 - Minutos</option>
          <option value="2">2 - Minutos</option>
          <option value="3">3 - Minutos</option>
          <option value="4">4 - Minutos</option>
          <option value="5">5 - Minutos</option>
          <option value="6">6 - Minutos</option>
          <option value="7">7 - Minutos</option>
          <option value="8">8 - Minutos</option>
          <option value="9">9 - Minutos</option>
          <option value="10">10 - Minutos</option>

        </select></td>
        <td class="danger">Fecha  final del Examen:</td>
        <td><input type="date" name="fecha_final" class="form-control" ></td>
</tr>

    </tbody>
<tr>
  <td colspan="4">
    <a href="index_examen.php"><button type='button' class='btn btn-warning'><i class="fas fa-fast-backward fa-5x">Atras</i></button></a>
    <button type="submit" class="btn btn-success" ><i class="fas fa-save fa-5x"></i>Guardar</button></td>
</tr>
<!--<tr>
      <td>Pregunta 1:</td>
      <td><textarea name="preg" class="form-control" rows="3"></textarea></td>
      <td><br>Escriba la Respuesta:</td>
      <td>
      <input type="text" name="resp" class="form-control" placeholder="Escriba la respuesta igual al inciso correcto..." style="background-color:#FD0664;color:#ffffff;"><br>
      <input type="text" name="A" class="form-control" placeholder="Escriba la respuesta del inciso A" required><br>
      <input type="text" name="B" class="form-control" placeholder="Escriba la respuesta del inciso B" required><br>
      <input type="text" name="C" class="form-control" placeholder="Escriba la respuesta del inciso C" required><br>
      <input type="text" name="D" class="form-control" placeholder="Escriba la respuesta del inciso D" required></td>
      
</tr> -->




  </form>
</table>



</div><!--fin de la tabla responsive-->
<!--<font class="alert alert-danger" style="font-size:17px;"> Se le Recomienda Realizar las <b>10 Preguntas</b> con sus Respuestas para el Buen Funcionamiento del SISTEMA gracias</font>-->
</div>
      </body> 
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
    