<?php
    include 'includes/conn.php';
	include 'includes/session.php';

	if(isset($_POST['ModifiCargo'])){
		$empleado = $_POST['empleado'];
		$antiguo = $_POST['antiguo'];
		$nuevo = $_POST['nuevo'];
		$sql = "INSERT INTO modificacion_cargo (EMPLEADO,Cargo_anterior, Cargo_Nuevo,fecha_modificacion) VALUES ( '$empleado', '$antiguo', '$nuevo',NOW())";
        	
        if($conn->query($sql)){
			$_SESSION['success'] = 'Se agrego Correctamente la modficación';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Ocurrio un error intenta de nuevo';
	}


	header('location: modificacion_cargo.php');
?>

