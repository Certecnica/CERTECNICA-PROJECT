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
       Solicitud de Permiso
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li>Empleado</li>
        <li class="active">Solicitud de Empleado</li>
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


<?php include "includes/conn.php"; ?>
<?php
  $reasonErr = $absenceErr = "";
  global $leaveApplicationValidate;
  if(isset($_POST['submit'])){
    if(empty($_POST['absence'])){
      $absenceErr = "Please select absence type";
      $leaveApplicationValidate = false;
    }
    else{
      $arr = $_POST['absence'];
      $absence = implode(",",$arr);
      $leaveApplicationValidate = true;
    }

    if(empty($_POST['fromdate'])){
      $fromdateErr = "Please Enter starting date";
      $leaveApplicationValidate = false;
    }
    else{
      $fromdate = mysqli_real_escape_string($conn,$_POST['fromdate']);
      $leaveApplicationValidate = true;
    }

    if(empty($_POST['todate'])){
      $todateErr = "Please Enter ending date";
      $leaveApplicationValidate = false;
    }
    else{
      $todate = mysqli_real_escape_string($conn,$_POST['todate']);
      $leaveApplicationValidate = true;
    }

    
    $reason = mysqli_real_escape_string($conn,$_POST['reason']);
    if(empty($reason)){
      $reasonErr = "Please give reason for the leave in detail";
      $leaveApplicationValidate = false;
    }
    else{
      $absencePlusReason = $absence." : ".$reason;
      $leaveApplicationValidate = true;
    }
    $status = "Pending"; 
    if($leaveApplicationValidate){
      //for eid
      $username = $_SESSION["employees"];
      $eid_query = mysqli_query($conn,"SELECT id FROM employees WHERE firstname = '".$username."'");
      $row = mysqli_fetch_array($eid_query);
      $query = "INSERT INTO leaves (eid, ename, descr, fromdate, todate, status) VALUES({$row['id']},'{$username}','$absencePlusReason', '$fromdate', '$todate', '$status')";
      $execute = mysqli_query($conn,$query);
      if($execute){
        echo '<script>alert("Leave Application Submitted. Please wait for approval status!")</script>';
      }
      else{
        echo "Query Error : " . $query . "<br>" . mysqli_error($conn);;
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
  <title>Leave Application</title>
  <script>
    const validate = () => {
      let desc = document.getElementById('leaveDesc').value;
      let checkbox = document.getElementsByClassName("form-check-input");
      let errDiv = document.getElementById('err');
      let checkedValue = [];
      for (let i = 0; i < checkbox.length; i++) {
        if(checkbox[i].checked === true)
          checkedValue.push(checkbox[i].id);
      }
       let errMsg = [];
      if (desc === "") {
        errMsg.push("Please enter the reason and date of leave");
      }
      if(checkedValue.length < 1){
        errMsg.push("Please select the type of Leave");
      }
      if (errMsg.length > 0) {
        errDiv.style.display = "block";
        let msgs = "";
        for (let i = 0; i < errMsg.length; i++) {
          msgs += errMsg[i] + "<br/>";
        }
        errDiv.innerHTML = msgs;
        scrollTo(0, 0);
        return;
      }
    }
  </script>
</head>
<body>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <!--Navbar-->
  <div class="container">
    </div>
    <form method="POST">
      <label><b>Seleccione el tipo de permiso</b></label>
      <!-- error message if type of absence isn't selected -->
      <span class="error"><?php echo "&nbsp;".$absenceErr ?></span><br/>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Sick" id="Sick">
        <label class="form-check-label" for="Sick">
        Enfermedad
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Casual" id="Casual">
        <label class="form-check-label" for="Casual">
          Casual
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Vacation" id="Vacation">
        <label class="form-check-label" for="Vacation">
          Vacaciones
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Bereavement" id="Bereavement">
        <label class="form-check-label" for="Bereavement">
        Fallecimiento de un familiar
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Time off without pay" id="Time Off Without Pay">
        <label class="form-check-label" for="Time Off Without Pay">
        Tiempo libre sin goce de sueldo
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Maternity / Paternity" id="Maternity/Paternity">
        <label class="form-check-label" for="Maternity/Paternity">
          Maternidad / Paternidad
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Sabbatical" id="Sabbatical">
        <label class="form-check-label" for="Sabbatical">
        Sabático
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Other" id="Other">
        <label class="form-check-label" for="Other">
     Otro
        </label>
      </div>
      <div class="mb-3 ">
        <label for="dates"><b>Desde -</b></label>
        <input type="date" name="fromdate">
        <label for="dates"><b>Hasta -</b></label>
        <input type="date" name="todate">
      </div>
      <div class="mb-3">
        <label for="leaveDesc" class="form-label"><b>Por favor mencione las razones de sus días de licencia :</b></label>
        <!-- error message if reason of the leave is not given -->
        <span class="error"><?php echo "&nbsp;".$reasonErr ?></span>
        <textarea class="form-control" name="reason" id="leaveDesc" rows="4" placeholder="Entre aquí..."></textarea>
      </div>
      <input type="submit" name="submit" value="Enviar Solicitud de permiso" class="btn btn-success">
    </form>  
  </div>
</body>
</html>
<?php
ini_set('display_errors', true);
error_reporting(E_ALL);
?>
    </body>                        
    </section>   
</div>
<?php include 'includes/scripts.php'; ?>
<?php include 'includes/footer.php'; ?>
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
</body>
</html>

