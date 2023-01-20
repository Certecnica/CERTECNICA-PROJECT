
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
      $absencePlusReason = $absence." , ".$reason;
      $leaveApplicationValidate = true;
    }

    $status = "Pendiente"; 
    if($leaveApplicationValidate){
      //for eid
      $username = $_SESSION["employees"];

      $eid_query = mysqli_query($conn, "SELECT id FROM employees WHERE lastname = '$username' ");
      
      $row = mysqli_fetch_array($eid_query);

      $row = $eid_query->fetch_assoc();
}
      $query = "INSERT INTO leaves(eid, ename, descr, fromdate, todate, status) VALUES('$username','$row','$absencePlusReason', '$fromdate', '$todate', '$status')";
      
      $execute = mysqli_query($conn,$query);
      
      if($execute){
        echo '<script>alert("Solicitud de permiso enviada. ¡Por favor espere el estado de aprobación!")</script>';
      }
      else{
        echo "Query Error : " . $query . "<br>" . mysqli_error($conn);
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
  <title>Solicitudes de per</title>
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
        errMsg.push("Indique el motivo de la solicitud de permiso");
      }
      if(checkedValue.length < 1){
        errMsg.push("Seleccione el tipo de solicitud de permiso");
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
        <input class="form-check-input" name="absence[]" type="checkbox" value="Control o cita medica" id="Control o cita medica">
        <label class="form-check-label" for="citamedica">
        Control o cita medica
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Calamidad Domestica" id="Calamidad Domestica">
        <label class="form-check-label" for="calamidad_domestica">
          Calamidad Domestica
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Motivos personales" id="Motivos personales">
        <label class="form-check-label" for="motivo_personal">
         Por motivos personales 
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Licencia no remunerada" id="Licencia no remunerada">
        <label class="form-check-label" for="licencia_no_remunerada">
        Licencia no remunerada
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Licencia Maternidad / Paternidad" id="Licencia Maternidad / Paternidad">
        <label class="form-check-label" for="licencia_maternidad_paternidad">
         licencia Maternidad / Paternidad
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Otro" id="Otro">
        <label class="form-check-label" for="Otro">
         otro
        </label>
      </div>
      
      <div class="mb-3 ">
        <label for="dates"><b>Desde -</b></label>
        <input type="date" name="fromdate" required>
        <label for="dates"><b>Hasta -</b></label>
        <input type="date" name="todate" required>
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
</body>
</html>

