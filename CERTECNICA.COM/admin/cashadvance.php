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
      Adelanto en Efectivo
      </h1>
      
      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>

        <li>Empleados</li>

        <li class="active">Avance de Efectivo</li>

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
                  <th class="hidden"></th>
                  <th>Fecha</th>
                  <th>ID Empleado</th>
                  <th>Nombre</th>
                  <th>Monto</th>
                  <th>Cuotas</th>
                  <th>Cuota Mensual</th>
                  <th>Fecha Primer Pago</th>
                  <th>Destino del prestamo</th>
                  <th>Acción</th>
                </thead>
                <tbody>
                  <?php 
                    $sql = "SELECT *, cashadvance.id AS caid, employees.employee_id AS empid FROM cashadvance LEFT JOIN employees ON employees.id=cashadvance.employee_id ORDER BY date_advance DESC";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".date('M d, Y', strtotime($row['date_advance']))."</td>
                          <td>".$row['empid']."</td>
                          <td>".$row['firstname'].' '.$row['lastname']."</td>
                          <td>".number_format($row['amount'], 2)."</td>
                          <td>" .$row['cuotas']."</td>
                          <td> ".$row['cuota_mensual']."</td>
                          <td>".$row['date_primerpago']."</td>
                          <td> ".$row['destino_prestasmo']."</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['caid']."'><i class='fa fa-edit'></i> Editar</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['caid']."'><i class='fa fa-trash'></i> Eliminar</button>
                          </td>
                        </tr>
                      ";
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

  <?php include 'includes/footer.php'; ?>

  <?php include 'includes/cashadvance_modal.php'; ?>
  
</div>

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


function getRow(id){
  $.ajax({
    type : 'POST',
    url :'employee_row.php',
    data: {id:id},
    dataType : 'json',
    success : function (response){
      $('.empid').val(response.empid);
      $('.employee_id').html(response.id);
      $('.del_employee:_name').html(response.firstname + ' '+response.lastname);
      $('#employee_name').html(response.firstname + ''+response.lastname);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      $('#edit_address').val(response.address);
      $('#datepicker_edit').val(response.birthdate);
      $('#edit_contact').val(response.contact_info);
      $('#gender_val').val(response.gender).html(response.gender);
      $('#position_val').val(response.position_id).html(response.description);
      $('#schedule_val').val(response.schedule_id).html(response.time_in +' - '+response.time_out);
    } 
  })
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
