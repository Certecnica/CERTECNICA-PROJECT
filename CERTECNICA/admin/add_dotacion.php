<?php
	include 'includes/session.php';

	if(isset($_POST['CreateDotacion'])){
		$empleado = $_POST['empleado'];
		$camisa = $_POST['camisa'];
		$calzado = $_POST['calzado'];
		$chaqueta = $_POST['chaqueta'];
		$pantalon = $_POST['pantalon'];

		$sql = "INSERT INTO dotacion (EMPLEADO, TALLA_CAMISA, TALLA_CALZADO, TALLA_CHAQUETA, TALLA_PANTALON) VALUES ('$empleado', '$camisa', '$calzado', '$chaqueta', '$pantalon')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Se añadio Correctamente la dotación del empleado';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Ocurrio un error intente de nuevo por favor ';
	}

	header('location: dotacion.php');
?>