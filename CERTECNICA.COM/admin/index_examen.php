
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
     EXAMENES EMPLEADOS 
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

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Categoria Examen</th>
                  <th>Estado</th>
                  <th>Acciones</th>

                </thead>
                <tbody>
                  <?php
                  $usuario = $_SESSION['admin'];
                  $consulta="SELECT * FROM examen";
                  $query = $conn -> query($consulta);
                  while ($row = $query -> fetch_assoc()){
                      $id = $row['id'];
                      $categoria = $row['categoria'];
                      $titulo = $row['titulo'];
                       echo "<tr>
                       <td>{$row['categoria']}</td>
                       <td>{$row['estado']}</td>
                        
                      <td>
                     
                      <a href='eva_puntajes.php?id=$id'><button type='button' class='btn btn-warning' data-toggle='tooltip' data-placement='bottom' title='Puntajes'><i class='fas fa-file-alt'></i></button></a>
                     
                      <a href='evaluacion.php?id=$id&categoria=$categoria&titulo=$titulo'><button type='button' class='btn btn-defauld' data-toggle='tooltip' data-placement='bottom' title='Editar'><i class='fas fa-edit'></i></button></a>
                     
                      <a href='epuntajes_pdf.php?id=$id' class='btn btn-primary' data-toggle='tooltip' title='Imprimir' target='_blank' data-placement='bottom'><i class='fal fa-print'></i></a>
                     
                      <a href='eva_eliminar.php?id=$id'><button type='button' class='btn btn-danger' data-toggle='tooltip' data-placement='bottom' title='Eliminar'><i class='fas fa-trash-alt'></i></button></a></td>
                     
                      </tr>";
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
    