<?php

include 'includes/session.php';


if (isset($_POST['CreatePrestamo'])) {

    $user_id = $_SESSION['employees'];
     
    $empleado  = $_POST['empleado'];
   
    $monto_solicitado = $_POST['monto_solicitado'];
    
    $cuotas = $_POST['cuotas'];
    
    $valor_cuota = $_POST['valor_cuota'];
    
    $fecha_descuento = $_POST['fecha_descuento'];

    $destino_prestamo = $_POST['destino_prestamo'];

    $sql = "INSERT INTO solicitud_prestamo (empleado, id_user , monto_solicitado , cuotas , valor_cuota_mensual , fecha_primer_descuento , destino_prestamo , estado_GH , estado_DA , estado_subgerencia , comentario_GH , comentario_subgerencia ,comentario_DA,fecha_creacion) VALUES('$empleado', '$user_id', '$monto_solicitado','$cuotas','$valor_cuota','$fecha_descuento','$destino_prestamo','Pendiente','Pendiente','Pendiente','N/A','N/A','N/A', NOW());";
      
    if($conn->query($sql)){
        $_SESSION['success'] = 'Solicitud de prestamo Añadido con exito';
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



























<!--
   
    
    $sql = "INSERT INTO salarios (EMPLEADO, SALARIO_BASICO,AUX_NO_SALARIAL, TOTAL) VALUES ('$empleado', '$salario_basico', '$aux_no_salarial', '$total')";
   
    if ($conn->query($sql)){
        $_SESSION['success'] = 'Se añadio Correctamente ';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }

else{
    $_SESSION['error'] = 'Ocurrio un error intente de nuevo por favor ';
}

header('location: salarios.php');
    
    ?>

