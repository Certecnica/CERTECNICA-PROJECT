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

    <h1>ENTREGAS</h1>

<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>EMPLEADOS</li>
        <li class="active">ENTREGAS</li>
      </ol>
    </section>

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
              <h4><i class='icon fa fa-check'></i> Éxito!</h4>
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
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>EMPLEADO</th>
                  <th>FECHA ENTREGA</th>
                  <th>ELEMENTO</th>
                  <th>DESCRIPCIÓN</th>
                  <th>Acción</th>
                </thead>
                <tbody>
                  <?php 
                    $sql = "SELECT * FROM entrega_dotacion";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                        <tr>
                          <td><?php echo $row['empleado']?></td>
                          <td><?php echo $row['fecha_entrega']?></td>
                          <td><?php echo $row['elemento'] ?></td>
                          <td><?php echo $row['descripcion'] ?> </td>
                          <td>
                          <a class='btn btn-success btn-sm editar btn-flat' href="edit_entrega.php?id=<?php echo $row['id'] ?> "><i class="fa fa-edit">  Editar</i></a>
                          <a class='btn btn-danger btn-sm editar btn-flat' href="entrega_eliminar.php?id=<?php echo $row['id']?> "><i class="fa fa-trash" aria-hidden="true"> Eliminar</i>
                          </td>
                        </tr>
                    <?php
                        ; 
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'modal_entrega.php'; ?>

    <?php include 'includes/scripts.php'; ?>
    <script>
    $(function(){
      $('.edit').click(function(e){
        e.preventDefault();
        $('#editar').modal('show');
        var id = $(this).data('id');
        getRow(id);
      });
      $('.delete').click(function(e){
        e.preventDefault();
        $('#delete').modal('show');
        var id = $(this).data('id');
        getRow(id);
      });
    });
    function getRow(id){
      $.ajax({
        type: 'POST',
        url: 'cashadvance_row.php',
        data: {id:id},
        dataType: 'json',
        success: function(response){
          console.log(response);
          $('.date').html(response.date_advance);
          $('.employee_name').html(response.firstname+' '+response.lastname);
          $('.caid').val(response.caid);
          $('#edit_amount').val(response.amount);
          $('#edit_Ncuotas').val(response.cuotas);
          $('#edit_cuotasMensual').val(response.cuota_mensual);
          $('#edit_fechapago').val(response.date_primerpago);
          $('#edit_destino').val(response.destino_prestasmos);
        }
      });
    }
    </script>
    <script>
      function formToggle(ID) {
       var element = document.getElementById(ID);
       if (element.style.display == 'none') {
         element.style.display = 'block';
      }else{
        element.style.display = 'none';
      }
    }   
    </script>
    </body>
    </html>