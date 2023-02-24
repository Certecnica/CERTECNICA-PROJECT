<?php

include 'includes/session.php';

if (isset($_POST['Createsolicitud'])) {

    $user_id = $_SESSION['employees'];
     
    $empleado  = $_POST['empleado'];
   
    $dias_disponibles = $_POST['dias_disponibles'];
    
    $fecha_inicio = $_POST['fecha_inicio'];

    $fecha_fin = $_POST['fecha_fin'];

    $sql = "INSERT INTO solicitudes_vacaciones (empleado, id_user ,fecha_inicio , fecha_fin , estado_GH , estado_DA , estado_subgerencia , comentario_GH , comentario_subgerencia ,comentario_DA,fecha_creacion) VALUES('$empleado', '$user_id', '$dias_disponibles','$fecha_inicio','$fecha_fin','$fecha_descuento','$destino_prestamo','Pendiente','Pendiente','Pendiente','N/A','N/A','N/A', NOW());";
      
    if($conn->query($sql)){
        $_SESSION['success'] = ' Añadido con exito';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }
      }

      else{
    $_SESSION['error'] = 'Complete el formulario Primero';
 }

header('location: prestamos_historial.php');
?>



