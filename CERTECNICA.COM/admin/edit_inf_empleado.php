<?php
include 'includes/conn.php';
include 'includes/session.php';

if (isset($_POST['editEmpleadoInf'])) {
      $empid = $_POST['id'];
      $edit_empleado = $_POST['edit_empleado'];   
      $edit_cargo  = $_POST['edit_cargo'];
      $edit_area  = $_POST['edit_area'];
      $edit_correo_corporativo= $_POST['edit_correo_corporativo'];
      $edit_numero= $_POST['edit_numero'];
      $edit_eps= $_POST['edit_eps'];
      $edit_afp= $_POST['edit_afp'];
      $edit_cesantias= $_POST['edit_cesantias'];
      $edit_caja_compensacion= $_POST['edit_caja_compensacion'];
      $edit_arl= $_POST['edit_arl'];
      $edit_Tcontrato= $_POST['edit_Tcontrato'];
      $edit_escolaridad= $_POST['edit_escolaridad'];
      $edit_titulo= $_POST['edit_titulo'];
      $edit_matricula= $_POST['edit_matricula'];

      $sql = "UPDATE employees SET empleado = '$edit_empleado', cargo = '$edit_cargo', area = '$edit_area', correo_corporativo = '$edit_correo_corporativo', telefono_corporativo = '$edit_numero', eps = '$edit_eps', afp = '$edit_afp', cesantia = '$edit_cesantias', 
      caja_compensacion = '$edit_caja_compensacion', arl = '$edit_arl' , tipo_contrato = '$edit_Tcontrato' , nivel_escolaridad = '$edit_escolaridad' , titulo = '$edit_titulo' , matricula_profesional = '$edit_matricula'  WHERE id = '$empid'";
	
      if($conn->query($sql)){
          $_SESSION['success'] = 'Empleado actualizado con éxito';
      }
      else{
          $_SESSION['error'] = $conn->error;
      }
  }
  else{

      $_SESSION['error'] = 'Seleccionar empleado para editar primero';
  }

  header('location: employee.php');

?>	