<?php
	include 'includes/session.php';

	include 'includes/conn.php';

	if(isset($_POST['delete'])){

		$id = $_POST['id'];

		$consulta = mysqli_query($conn, "SELECT lastname from employees WHERE id = '$id'");
	
		$sql = "DELETE FROM employees WHERE id = '$id'";
		
		if($conn->query($sql)){
			
			$_SESSION['success'] = 'Empleado eliminado con éxito';
		}

		else{

			$_SESSION['error'] = $conn->error;
		}
	}
	else{

		$_SESSION['error'] = 'Seleccione el elemento para eliminar primero';
	}

	header('location: employee.php');

	// obtener la hora y fecha actual

	$timestamp = date ('Y-m-d H:i:s');
	
	// obtener el ID del usuario actual (si estás registrando modificaciones realizadas por usuarios)

	$user_id = $_SESSION['admin'];
	
	// crear una descripción de la modificación

	$description = "Se elimino al empleado con la ID: $id";
	
	$data = "Se elimino toda la informacion relacionada con el empleado de ID $id";
	
	// insertar una entrada en la tabla de log

	$sql = "INSERT INTO log_employees (timestamp , user_id, description , data) VALUES('$timestamp','$user_id','$description','$data')";
	 
	mysqli_query($conn, $sql);

?>