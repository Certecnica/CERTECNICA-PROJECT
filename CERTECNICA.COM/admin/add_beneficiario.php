<?php

include 'includes/conn.php';

include 'includes/session.php';

    //información  de el empleado 

    $cedula_empleado = $_POST['cedula_empleado'];

    $nombre_empleado = $_POST['nombres_empleado'];

    $caja_compensacion = $_POST['caja_compensacion'];

    $eps = $_POST['eps'];

    $direccion = $_POST['direccion'];

    // Información del beneficiario

    $parentesco = $_POST['parentesco'];

    $tipo_documento = $_POST['tipo_documento'];

    $numero_documento = $_POST['numero_documento'];

    $nombres_beneficiarios = $_POST['nombres_beneficiarios'];

    $fecha_nacimiento = $_POST['fecha_nacimiento'];


    $sql = "INSERT INTO beneficiarios (cedula_empl , nombres_emp , caja_compensacion , eps , direccion , parentesco , tipo_documento , documento_bene , nombre_bene , fecha_nacimiento)
     VALUES ('$cedula_empleado' , '$nombre_empleado','$caja_compensacion', '$eps' , '$direccion', '$parentesco','$tipo_documento','$numero_documento', '$nombres_beneficiarios','$fecha_nacimiento')";
    
	if($conn->query($sql)){

        $_SESSION['success'] = 'Beneficiario  añadido satisfactoriamente';
    }
    else{

        $_SESSION['error'] = $conn->error;
    }



header('location: Admin.php');

?>






