<?php
include 'includes/conn.php';
include 'includes/session.php';

if (isset($_POST['AddEmpleado'])) {

      $empleado = $_POST['empleado'];
      $cargo  = $_POST['cargo'];
      $area  = $_POST['area'];
      $correo_corporativo= $_POST['correo_corporativo'];
      $numero= $_POST['numero'];
      $eps= $_POST['eps'];
      $afp= $_POST['afp'];
      $cesantias= $_POST['cesantias'];
      $caja_compensacion= $_POST['caja_compensacion'];
      $arl= $_POST['arl'];
      $Tcontrato= $_POST['Tcontrato'];
      $escolaridad= $_POST['escolaridad'];
      $titulo= $_POST['titulo'];
      $matricula= $_POST['matricula'];
      $fecha_contratacion = $_POST['fecha_contratacion'];


      $sql = "INSERT INTO informacion_empleado (empleado,cargo,area,correo_corporativo,telefono_corporativo,eps,afp,cesantia,caja_compensacion,arl,tipo_contrato,nivel_escolaridad,titulo,matricula_profesional, fecha_contratacion , created_on) VALUES ('$empleado', '$cargo', '$area', '$correo_corporativo','$numero','$eps','$afp','$cesantias','$caja_compensacion','$arl','$Tcontrato','$escolaridad','$titulo','$matricula','$fecha_contratacion', NOW());";

      $data = "INSERT INTO vacaciones (empleado , fecha_contratacion) VALUES ('$empleado' , '$fecha_contratacion')";

      if($conn->query($data)){
        $_SESSION['success'] = 'Informacion de vacaciones Añadida con exito';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }

      if($conn->query($sql)){
        $_SESSION['success'] = 'Informacion Corporativa Añadida con exito';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }

}
else{
    $_SESSION['error'] = 'Complete el formulario Primero';
}

header('location: emp_info_corporativa.php');
?>

