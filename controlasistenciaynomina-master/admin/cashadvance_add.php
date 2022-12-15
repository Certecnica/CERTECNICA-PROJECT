<?php
	include 'includes/session.php';
//TRAEMOS DATOS DEL MODAL
	if(isset($_POST['add'])){
		$employee = $_POST['employee'];
		$amount = $_POST['amount'];
		$cuotas =$_POST['cuotas'];
		$cuota_mensual = $_POST['cuota_mensual'];
		$fecha_pago = $_POST['fecha_pago'];
		$destino_prestamo = $_POST['destino_prestamo'];

		//CONSULTA A LA BASE DE DATOS (BASICO)		
		$sql = "SELECT * FROM employees WHERE employee_id = '$employee'";
		$query = $conn->query($sql);
		if($query->num_rows < 1){
			$_SESSION['error'] = 'El empleado no se encuentra registrado';
		}
		else{
			$row = $query->fetch_assoc();
			$employee_id = $row['id'];
			$sql = "INSERT INTO cashadvance (employee_id, date_advance, amount ,cuotas,cuota_mensual, date_primerpago , destino_prestasmo) VALUES ('$employee_id', NOW(), '$amount','$cuotas','$cuota_mensual','$fecha_pago','$destino_prestamo')";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Préstamo  añadido satisfactoriamente';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
		}
	}	
	else{
		$_SESSION['error'] = 'Rellene los datos del formulario primero';
	}

	header('location: cashadvance.php');

?>