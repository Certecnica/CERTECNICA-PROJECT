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
        <li class="active">Editar beneficiarios</li>
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
      $id = $_GET['id'];
      $sql = "SELECT * FROM  beneficiarios WHERE id = $id";
      $data = mysqli_query($conn, $sql);
      $user = mysqli_fetch_assoc($data);
      ?>
      <form action="edit_beneficiarios.php" method="POST">
  <div class="col-sm-6"> 
                      <select class="form-control" name="parentesco" id="parentesco">
                        <option  selected><?= $user['parentesco']?></option>
                        <option value="Hijo">Hijo</option>
                        <option value="Madre">Madre</option>
                        <option value="Padre">Padre</option>
                      </select>
                    </div>
    <div class="col-sm-6"> 
                      <select class="form-control" name="tipo_documento" id="tipo_documento" >
                        <option selected><?= $user ['tipo_documento'] ?></option>
                        <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                        <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                        <option value="Cédula de extranjería">Cédula de extranjería</option>
                      </select>
                    </div>
                      <br>
                      <br>
                      <br>    
    <div class="col-md-3 mb-3">
      <label for="numero_documento">N° DE DOCUMENTO</label>
      <input type="number" class="form-control" id="numero_documento" name="numero_documento" value="<?= $user ['documento_bene'] ?>" >
      </div>
  
    <div class="col-md-4 mb-3">
      <label for="nombres_beneficiario">NOMBRES Y APELLIDOS </label>
      <input type="text" class="form-control" id="nombres_beneficiarios" name="nombres_beneficiarios"  value= "<?= $user ['nombre_bene'] ?>" >
      </div>
  
    <div class="col-md-4 mb-3">
      <label for="fecha_nacimiento">FECHA DE NACIMIENTO</label>
      <input type="date" class="form-control" id="fecha_nacimiento"  name="fecha_nacimiento"   value= "<?= $user ['fecha_nacimiento'] ?>" >
      </div>
      <input type="hidden" name="accion" value="editar_registro">
                            <input type="hidden" name="id" value="<?php echo $id;?>">
       <br>
       <br> 
       <br>
       <br>
       <br>
         <center><button class="btn btn-info" type="submit"  name="editBeneficiario" > Guardar</button></center>
    </div>
</form>

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
    