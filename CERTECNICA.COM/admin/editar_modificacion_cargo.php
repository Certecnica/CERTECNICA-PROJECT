<?php
	include 'includes/session.php';

	if(isset($_POST['editar'])){
		$empleado = $_POST['empleado'];
		$antiguo = $_POST['antiguo'];
        $nuevo = $_POST['nuevo'];

		$sql = "UPDATE modificacion_cargo SET EMPLEADO = '$empleado', Cargo_anterior = '$antiguo', Cargo_Nuevo = '$nuevo'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Cargo actualizado con éxito';
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