<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		
		$empid = $_POST['id'];

		$firstname = $_POST['firstname'];

		$lastname = $_POST['lastname'];

		$address = $_POST['address'];

		$birthdate = $_POST['birthdate'];

		$contact = $_POST['contact'];

		$contraseña = $_POST['contraseña'];

		$gender = $_POST['gender'];

		$position = $_POST['position'];

		$schedule = $_POST['schedule'];

		$sql = "UPDATE employees SET firstname = '$firstname', lastname = '$lastname', address = '$address', birthdate = '$birthdate', contact_info = '$contact', contraseña = '$password_encriptada', gender = '$gender', position_id = '$position', schedule_id = '$schedule' WHERE id = '$empid'";
	
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

$nombre_completo = "$firstname , $lastname";

// obtener la hora y fecha actual

$timestamp = date ('Y-m-d H:i:s');

// obtener el ID del usuario actual(si estás registrando modificaciones realizadas por usuarios)

$user_id = $_SESSION['admin'];

// crear una descripción de la modificación

$description = "Se actualizo la información del empleado $nombre_completo con ID:$empid";

//definicion de todos los datos que se estan consultando y almacnarlos en una unica variable

$data = "$firstname , $lastname , $address , $birthdate , $contact , $contraseña , $gender , $position , $schedule";

// insertar una entrada en la tabla de log

$sql = "INSERT INTO log_employees (timestamp, user_id, description , data) VALUES('$timestamp','$user_id','$description','$data')";

// llamamos la variable conexion y mi sql hace referencia a la variable en la cual se hizo la consulta

mysqli_query($conn, $sql);

?>	