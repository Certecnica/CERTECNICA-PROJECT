<?php

include 'includes/session.php';

	if(isset($_POST['add'])){

		$Tipo_Documento = $_POST['Tdocumento'];

		$documento = $_POST['documento'];

		$firstname = $_POST['firstname'];

		$lastname = $_POST['lastname'];

		$address = $_POST['address'];

		$birthdate = $_POST['birthdate'];

		$contact = $_POST['contact'];

		$contraseña = $_POST['contraseña'];

		$gender = $_POST['gender'];

		$position = $_POST['position'];

		$area = $_POST['area'];

		$schedule = $_POST['schedule'] ;

		$password_encriptada= password_hash($contraseña,PASSWORD_DEFAULT);
		
		$filename = $_FILES['photo']['name'];
		
		if(!empty($filename)){
		
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		
		}
		
		$sql = "INSERT INTO employees (tipo_documento,employee_id, firstname, lastname, address, birthdate, contact_info,contraseña, gender, position_id, schedule_id, area , photo, created_on) VALUES ('$Tipo_Documento','$documento	', '$firstname', '$lastname', '$address', '$birthdate', '$contact','$password_encriptada', '$gender', '$position', '$schedule', '$area', '$filename', NOW())";
		
		if($conn->query($sql)){

			$_SESSION['success'] = 'Empleado añadido satisfactoriamente';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Complete el formulario completo';
	} 
	
	header('location: employee.php');

//realizar modificación en la base de datos
$nombre_completo = "$firstname  $lastname";	

// obtener la hora y fecha actual
$timestamp = date ('Y-m-d H:i:s');

// obtener el ID del usuario actual (si estás registrando modificaciones realizadas por usuarios)
$user_id = $_SESSION['admin'];

// crear una descripción de la modificación
$description = "Se Creo al empleado $nombre_completo con documento:$documento";

$data = "$Tipo_Documento,$documento,$firstname,$lastname,$address,$birthdate,$contact,$contraseña,$gender,$position,$schedule,$filename";

// insertar una entrada en la tabla de log
$sql = "INSERT INTO log_employees (timestamp, user_id, description , data) VALUES('$timestamp','$user_id','$description','$data')";

//conexion de base de datos y el query que se realizo a la base de datos 
mysqli_query($conn, $sql);

?>
